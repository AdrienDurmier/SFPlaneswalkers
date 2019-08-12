<?php

namespace App\Entity\Planeswalkers;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

/**
 * @ORM\Table(name="planeswalkers_card")
 * @ORM\Entity(repositoryClass="App\Repository\Planeswalkers\CardRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Card
{
    public function __toString() {
        return $this->name;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_scryfall;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdScryfall(): ?string
    {
        return $this->id_scryfall;
    }

    public function setIdScryfall(string $id_scryfall): self
    {
        $this->id_scryfall = $id_scryfall;

        return $this;
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

}
