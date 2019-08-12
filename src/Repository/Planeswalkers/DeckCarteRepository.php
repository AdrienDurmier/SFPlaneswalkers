<?php

namespace App\Repository\Planeswalkers;

use App\Entity\Planeswalkers\DeckCarte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DeckCarte|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeckCarte|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeckCarte[]    findAll()
 * @method DeckCarte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeckCarteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DeckCarte::class);
    }

}
