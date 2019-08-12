<?php

namespace App\Entity\Planeswalkers;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="planeswalkers_deck_carte")
 * @ORM\Entity(repositoryClass="App\Repository\Planeswalkers\DeckCarteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class DeckCarte
{
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
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @var DeckCarte
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Planeswalkers\Deck", inversedBy="cartes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $deck;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function setDeck(?Deck $deck): void
    {
        $this->deck = $deck;
    }

}
