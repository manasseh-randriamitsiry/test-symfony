<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
    public function __construct(
        private UserRepository $userRepository
    ) {}

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        // Try to find user by email (professional or personal) or by identifiant
        $user = $this->userRepository->findByEmail($identifier);
        
        if (!$user) {
            // Try to find by identifiant
            $user = $this->userRepository->findOneBy(['identifiant' => $identifier]);
        }

        if (!$user) {
            throw new UserNotFoundException(sprintf('User with identifier "%s" not found.', $identifier));
        }

        return $user;
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new \InvalidArgumentException(sprintf('Expected an instance of %s, but got %s.', User::class, get_class($user)));
        }

        $refreshedUser = $this->userRepository->find($user->getId());

        if (!$refreshedUser) {
            throw new UserNotFoundException('User not found.');
        }

        return $refreshedUser;
    }

    public function supportsClass(string $class): bool
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }
}