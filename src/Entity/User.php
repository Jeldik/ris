<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Tento e-mail je již zaregistrován, zkuste jiný")
 * @UniqueEntity(fields="userName", message="Tento uživatel je již zaregistrován, zkuste jiné jméno.")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank()
     */
    private $userName;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max="4096")
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", unique=true, length=60)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(name="is_admin", type="integer")
     */
    private $isAdmin;

    /**
     * @ORM\Column(name="is_active", type="integer")
     */
    private $isActive;


    public function __construct()
    {
        $this->isActive = true;
        $this->isAdmin  = false;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getSalt()
    {
        //
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function eraseCredentials()
    {
        //
    }

    public function serialize(): string
    {
        return serialize([
            $this->id,
            $this->userName,
            $this->password,
        ]);
    }

    public function unserialize($serialized)
    {
        [
            $this->id,
            $this->userName,
            $this->password,] = $this->unserialize($serialized);
    }

    /**
     * @param string $name
     *
     * @return User
     */
    public function setUserName($name)
    {
        $this->userName = $name;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getIsAdmin(): int
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(int $isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    public function getIsActive(): int
    {
        return $this->isActive;
    }

    public function setIsActive(int $isActive)
    {
        $this->isActive = $isActive;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }
}

