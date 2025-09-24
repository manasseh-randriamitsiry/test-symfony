<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-user',
    description: 'Create a new user for SMUR Pontoise system',
)]
class CreateUserCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'User email')
            ->addArgument('password', InputArgument::REQUIRED, 'User password')
            ->addOption('admin', 'a', InputOption::VALUE_NONE, 'Make this user an admin')
            ->addOption('nom', null, InputOption::VALUE_REQUIRED, 'Last name', 'Admin')
            ->addOption('prenom', null, InputOption::VALUE_REQUIRED, 'First name', 'User')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');
        $isAdmin = $input->getOption('admin');
        $nom = $input->getOption('nom');
        $prenom = $input->getOption('prenom');

        // Check if user already exists
        $existingUser = $this->entityManager->getRepository(User::class)->findByEmail($email);
        if ($existingUser) {
            $io->error('A user with this email already exists!');
            return Command::FAILURE;
        }

        // Create new user
        $user = new User();
        $user->setIdentifiant($email);
        $user->setNom(strtoupper($nom));
        $user->setPrenom(ucfirst($prenom));
        $user->setEmailPro($email);
        $user->setTelephone('0123456789');
        $user->setFonction('Med SMUR');
        $user->setMetier('Medecin');
        $user->setBureau('Med SMUR');
        
        if ($isAdmin) {
            $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
            $user->setAccesGestionUtilisateurs(true);
            $user->setAccesGestionEquipes(true);
        } else {
            $user->setRoles(['ROLE_USER']);
            $user->setAccesGestionUtilisateurs(false);
            $user->setAccesGestionEquipes(false);
        }

        // Hash password
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);

        // Save user
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success(sprintf(
            'User created successfully! Email: %s, Role: %s',
            $email,
            $isAdmin ? 'Admin' : 'User'
        ));

        return Command::SUCCESS;
    }
}