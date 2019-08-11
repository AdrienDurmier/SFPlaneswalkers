<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIScryfall;

class CardController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/cards/{id}", name="planeswalkers.card.show")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function show($id, APIScryfall $apiScryfall)
    {
        $response_card = $apiScryfall->interroger('get', 'cards/'.$id);
        $response_rules = $apiScryfall->interroger('get', 'cards/'.$id.'/rulings');

        return $this->render('planeswalkers/card/show.html.twig', [
            'card'  =>  $response_card->body,
            'rules'  =>  $response_rules->body,
        ]);
    }
    
}