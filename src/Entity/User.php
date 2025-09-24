<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email_pro'], message: 'Cette adresse email professionnelle est déjà utilisée.')]
#[UniqueEntity(fields: ['email_perso'], message: 'Cette adresse email personnelle est déjà utilisée.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank]
    private ?string $identifiant = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email]
    #[Assert\NotBlank]
    private ?string $email_pro = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Email]
    private ?string $email_perso = null;

    #[ORM\Column(length: 15)]
    #[Assert\Regex(
        pattern: '/^0[1-9](?:[0-9]{8})$/',
        message: 'Le numéro de téléphone doit contenir 10 chiffres et commencer par 0.'
    )]
    private ?string $telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\Choice(choices: ['Amb SMUR', 'Inf SMUR', 'Med SMUR', 'Stg SMUR', 'SAMU'])]
    private ?string $fonction = null;

    #[ORM\Column(length: 50)]
    #[Assert\Choice(choices: ['ADE', 'IDE', 'IADE', 'IPDE', 'Cadre', 'ARM', 'Medecin', 'Interne', 'Externe', 'DJ', 'étudiant paramedical'])]
    private ?string $metier = null;

    #[ORM\Column(length: 50)]
    #[Assert\Choice(choices: ['Paramed SMUR', 'Med SMUR', 'SAMU', 'Cadre'])]
    private ?string $bureau = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $derniere_connexion = null;

    #[ORM\Column]
    private bool $acces_gestion_utilisateurs = false;

    #[ORM\Column]
    private bool $acces_gestion_equipes = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): static
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->identifiant;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmailPro(): ?string
    {
        return $this->email_pro;
    }

    public function setEmailPro(string $email_pro): static
    {
        $this->email_pro = $email_pro;
        return $this;
    }

    public function getEmailPerso(): ?string
    {
        return $this->email_perso;
    }

    public function setEmailPerso(?string $email_perso): static
    {
        $this->email_perso = $email_perso;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): static
    {
        $this->fonction = $fonction;
        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(string $metier): static
    {
        $this->metier = $metier;
        return $this;
    }

    public function getBureau(): ?string
    {
        return $this->bureau;
    }

    public function setBureau(string $bureau): static
    {
        $this->bureau = $bureau;
        return $this;
    }

    public function getDerniereConnexion(): ?\DateTimeInterface
    {
        return $this->derniere_connexion;
    }

    public function setDerniereConnexion(?\DateTimeInterface $derniere_connexion): static
    {
        $this->derniere_connexion = $derniere_connexion;
        return $this;
    }

    public function isAccesGestionUtilisateurs(): bool
    {
        return $this->acces_gestion_utilisateurs;
    }

    public function setAccesGestionUtilisateurs(bool $acces_gestion_utilisateurs): static
    {
        $this->acces_gestion_utilisateurs = $acces_gestion_utilisateurs;
        return $this;
    }

    public function isAccesGestionEquipes(): bool
    {
        return $this->acces_gestion_equipes;
    }

    public function setAccesGestionEquipes(bool $acces_gestion_equipes): static
    {
        $this->acces_gestion_equipes = $acces_gestion_equipes;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getFullName(): string
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function __toString(): string
    {
        return $this->getFullName();
    }
}