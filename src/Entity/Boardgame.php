<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BoardgameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BoardgameRepository::class)
 */
class Boardgame
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $playersMin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $playersMax;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $averageTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPlayersMin(): ?int
    {
        return $this->playersMin;
    }

    public function setPlayersMin(?int $playersMin): self
    {
        $this->playersMin = $playersMin;

        return $this;
    }

    public function getPlayersMax(): ?int
    {
        return $this->playersMax;
    }

    public function setPlayersMax(?int $playersMax): self
    {
        $this->playersMax = $playersMax;

        return $this;
    }

    public function getAverageTime(): ?int
    {
        return $this->averageTime;
    }

    public function setAverageTime(?int $averageTime): self
    {
        $this->averageTime = $averageTime;

        return $this;
    }
}
