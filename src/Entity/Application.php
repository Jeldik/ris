<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="App\Repository\ApplicationRepository")
 */
class Application
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $keywords;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function setKeywords(string $keywords): Application
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getKeywords(): string
    {
        return $this->keywords;
    }

    public function setDescription(string $description): Application
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

