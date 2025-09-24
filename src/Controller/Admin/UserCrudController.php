<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\ChoiceFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

class UserCrudController extends AbstractCrudController
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {}

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Utilisateur')
            ->setEntityLabelInPlural('Utilisateurs')
            ->setPageTitle('index', 'Gestion des utilisateurs - SMUR Pontoise')
            ->setPageTitle('new', 'Créer un utilisateur')
            ->setPageTitle('edit', 'Modifier un utilisateur')
            ->setPageTitle('detail', 'Détails de l\'utilisateur')
            ->setDefaultSort(['nom' => 'ASC', 'prenom' => 'ASC'])
            ->setPaginatorPageSize(25)
            ->setSearchFields(['nom', 'prenom', 'email_pro', 'email_perso', 'telephone', 'fonction', 'metier', 'bureau', 'identifiant']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id')
                ->hideOnForm()
                ->setColumns(2),
            
            TextField::new('identifiant', 'Identifiant')
                ->setRequired(true)
                ->setColumns(6),
            
            TextField::new('nom', 'Nom')
                ->setRequired(true)
                ->setColumns(6),
            
            TextField::new('prenom', 'Prénom')
                ->setRequired(true)
                ->setColumns(6),
            
            EmailField::new('email_pro', 'Email professionnel')
                ->setRequired(true)
                ->setColumns(6),
            
            EmailField::new('email_perso', 'Email personnel')
                ->setRequired(false)
                ->setColumns(6)
                ->hideOnIndex(),
            
            TelephoneField::new('telephone', 'Téléphone')
                ->setRequired(true)
                ->setColumns(6),
            
            ChoiceField::new('fonction', 'Fonction')
                ->setChoices([
                    'Amb SMUR' => 'Amb SMUR',
                    'Inf SMUR' => 'Inf SMUR',
                    'Med SMUR' => 'Med SMUR',
                    'Stg SMUR' => 'Stg SMUR',
                    'SAMU' => 'SAMU',
                ])
                ->setRequired(true)
                ->setColumns(4),
            
            ChoiceField::new('metier', 'Métier')
                ->setChoices([
                    'ADE' => 'ADE',
                    'IDE' => 'IDE',
                    'IADE' => 'IADE',
                    'IPDE' => 'IPDE',
                    'Cadre' => 'Cadre',
                    'ARM' => 'ARM',
                    'Medecin' => 'Medecin',
                    'Interne' => 'Interne',
                    'Externe' => 'Externe',
                    'DJ' => 'DJ',
                    'étudiant paramedical' => 'étudiant paramedical',
                ])
                ->setRequired(true)
                ->setColumns(4),
            
            ChoiceField::new('bureau', 'Bureau')
                ->setChoices([
                    'Paramed SMUR' => 'Paramed SMUR',
                    'Med SMUR' => 'Med SMUR',
                    'SAMU' => 'SAMU',
                    'Cadre' => 'Cadre',
                ])
                ->setRequired(true)
                ->setColumns(4),
            
            BooleanField::new('acces_gestion_utilisateurs', 'Accès gestion utilisateurs')
                ->setColumns(6),
            
            BooleanField::new('acces_gestion_equipes', 'Accès gestion équipes')
                ->setColumns(6),
            
            DateTimeField::new('derniere_connexion', 'Dernière connexion')
                ->hideOnForm()
                ->setFormat('dd/MM/yyyy HH:mm')
                ->setColumns(6),
            
            DateTimeField::new('created_at', 'Créé le')
                ->hideOnForm()
                ->setFormat('dd/MM/yyyy HH:mm')
                ->setColumns(6)
                ->hideOnIndex(),
            
            DateTimeField::new('updated_at', 'Modifié le')
                ->hideOnForm()
                ->setFormat('dd/MM/yyyy HH:mm')
                ->setColumns(6)
                ->hideOnIndex(),
        ];

        // Add password field only on new/edit forms
        if ($pageName === Crud::PAGE_NEW || $pageName === Crud::PAGE_EDIT) {
            $passwordField = TextField::new('password', 'Mot de passe')
                ->setFormType(PasswordType::class)
                ->setRequired($pageName === Crud::PAGE_NEW)
                ->setColumns(6);
            
            if ($pageName === Crud::PAGE_EDIT) {
                $passwordField->setHelp('Laisser vide pour conserver le mot de passe actuel');
            }
            
            // Insert password field after identifiant
            array_splice($fields, 2, 0, [$passwordField]);
        }

        return $fields;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(TextFilter::new('nom', 'Nom'))
            ->add(TextFilter::new('prenom', 'Prénom'))
            ->add(TextFilter::new('email_pro', 'Email professionnel'))
            ->add(TextFilter::new('email_perso', 'Email personnel'))
            ->add(TextFilter::new('telephone', 'Téléphone'))
            ->add(ChoiceFilter::new('fonction', 'Fonction')->setChoices([
                'Amb SMUR' => 'Amb SMUR',
                'Inf SMUR' => 'Inf SMUR',
                'Med SMUR' => 'Med SMUR',
                'Stg SMUR' => 'Stg SMUR',
                'SAMU' => 'SAMU',
            ]))
            ->add(ChoiceFilter::new('metier', 'Métier')->setChoices([
                'ADE' => 'ADE',
                'IDE' => 'IDE',
                'IADE' => 'IADE',
                'IPDE' => 'IPDE',
                'Cadre' => 'Cadre',
                'ARM' => 'ARM',
                'Medecin' => 'Medecin',
                'Interne' => 'Interne',
                'Externe' => 'Externe',
                'DJ' => 'DJ',
                'étudiant paramedical' => 'étudiant paramedical',
            ]))
            ->add(ChoiceFilter::new('bureau', 'Bureau')->setChoices([
                'Paramed SMUR' => 'Paramed SMUR',
                'Med SMUR' => 'Med SMUR',
                'SAMU' => 'SAMU',
                'Cadre' => 'Cadre',
            ]))
            ->add(BooleanFilter::new('acces_gestion_utilisateurs', 'Accès gestion utilisateurs'))
            ->add(BooleanFilter::new('acces_gestion_equipes', 'Accès gestion équipes'))
            ->add(DateTimeFilter::new('created_at', 'Créé le'))
            ->add(DateTimeFilter::new('derniere_connexion', 'Dernière connexion'));
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->setPermission(Action::NEW, 'ROLE_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_ADMIN')
            ->setPermission(Action::DELETE, 'ROLE_ADMIN');
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        /** @var User $user */
        $user = $entityInstance;
        
        // Hash the password
        if ($user->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }
        
        // Set timestamps
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());
        
        // Set identifiant to email_pro if not provided
        if (!$user->getIdentifiant()) {
            $user->setIdentifiant($user->getEmailPro());
        }

        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        /** @var User $user */
        $user = $entityInstance;
        
        // Hash the password if it's been changed
        if ($user->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }
        
        // Update timestamp
        $user->setUpdatedAt(new \DateTime());

        parent::updateEntity($entityManager, $entityInstance);
    }
}