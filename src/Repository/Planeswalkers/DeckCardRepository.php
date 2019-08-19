<?php

namespace App\Repository\Planeswalkers;

use App\Entity\Planeswalkers\DeckCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DeckCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeckCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeckCard[]    findAll()
 * @method DeckCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeckCardRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DeckCard::class);
    }

}
