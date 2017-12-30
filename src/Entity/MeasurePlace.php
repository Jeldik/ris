<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="measure_place")
 * @ORM\Entity(repositoryClass="App\Repository\MeasurePlaceRepository")
 */
class MeasurePlace
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /** @ORM\Column(name="road_number", type="string", nullable=true) */
    private $roadNumber;

    /** @ORM\Column(type="string", nullable=true) */
    private $street;

    /** @ORM\Column(type="string", nullable=true) */
    private $city;

    /** @ORM\Column(type="string", nullable=true) */
    private $district;

    /** @ORM\Column(type="string", nullable=true) */
    private $county;

    /** @ORM\Column(type="integer", nullable=true) */
    private $speed;

    /** @ORM\Column(name="place_desc", type="text", nullable=true)
     */
    private $placeDesc;

    /** @ORM\Column(type="string", nullable=true)
     */
    private $camera;

    /** @ORM\Column(nullable=true, type="integer") */
    private $published;

    /** @ORM\Column(type="datetime") */
    private $date;

    public function __construct()
    {
        $this->date      = new \DateTime();
        $this->published = 0;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setRoadNumber(string $roadNumber): void
    {
        $this->roadNumber = $roadNumber;
    }

    public function getRoadNumber(): string
    {
        return $this->roadNumber;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setPlaceDesc(string $placeDesc): void
    {
        $this->placeDesc = $placeDesc;
    }

    public function getPlaceDesc(): string
    {
        return $this->placeDesc;
    }

    public function setCamera(string $camera): void
    {
        $this->camera = $camera;
    }

    public function getCamera(): string
    {
        return $this->camera;
    }

    public function setPublished(int $published): void
    {
        $this->published = $published;
    }

    public function isPublished(): int
    {
        return $this->published;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setCounty(string $county): void
    {
        $this->county = $county;
    }

    public function getCounty(): string
    {
        return $this->county;
    }
}

