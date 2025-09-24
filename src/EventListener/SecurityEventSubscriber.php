<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SecurityEventSubscriber implements EventSubscriberInterface
{
    private array $loginAttempts = [];
    private const MAX_ATTEMPTS = 5;
    private const LOCKOUT_TIME = 300; // 5 minutes

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        
        // Rate limit login attempts
        if ($request->getPathInfo() === '/login' && $request->isMethod('POST')) {
            $ip = $request->getClientIp();
            $currentTime = time();
            
            // Clean old attempts
            $this->cleanOldAttempts($currentTime);
            
            // Check if IP is locked out
            if ($this->isIpLockedOut($ip, $currentTime)) {
                $response = new Response('Too many login attempts. Please try again later.', 429);
                $event->setResponse($response);
                return;
            }
            
            // Record attempt
            $this->recordAttempt($ip, $currentTime);
        }
    }

    public function onKernelResponse(ResponseEvent $event): void
    {
        $response = $event->getResponse();
        
        // Add security headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        
        // Content Security Policy
        $csp = "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self'; frame-ancestors 'none';";
        $response->headers->set('Content-Security-Policy', $csp);
        
        // Remove server information
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');
    }

    private function cleanOldAttempts(int $currentTime): void
    {
        foreach ($this->loginAttempts as $ip => $attempts) {
            $this->loginAttempts[$ip] = array_filter(
                $attempts,
                fn($timestamp) => ($currentTime - $timestamp) < self::LOCKOUT_TIME
            );
            
            if (empty($this->loginAttempts[$ip])) {
                unset($this->loginAttempts[$ip]);
            }
        }
    }

    private function isIpLockedOut(string $ip, int $currentTime): bool
    {
        if (!isset($this->loginAttempts[$ip])) {
            return false;
        }

        $recentAttempts = array_filter(
            $this->loginAttempts[$ip],
            fn($timestamp) => ($currentTime - $timestamp) < self::LOCKOUT_TIME
        );

        return count($recentAttempts) >= self::MAX_ATTEMPTS;
    }

    private function recordAttempt(string $ip, int $currentTime): void
    {
        if (!isset($this->loginAttempts[$ip])) {
            $this->loginAttempts[$ip] = [];
        }
        
        $this->loginAttempts[$ip][] = $currentTime;
    }
}