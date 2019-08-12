<?php

namespace App\Controller\Planeswalkers;

use App\Entity\Planeswalkers\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planeswalkers\Deck;
use App\Entity\Planeswalkers\DeckCard;
use App\Service\APIScryfall;

class DeckCardController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/deckcard/new/{deck}", name="planeswalkers.deckcard.new")
     * @param Deck $deck
     * @param APIScryfall $apiScryfall
     * @param Request $request
     * @return Response
     * @throws \Doctrine\DBAL\Exception\ServerException
     */
    public function new(Deck $deck, APIScryfall $apiScryfall, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $deckcarte = new DeckCard();
            // Création de la carte en local
            $response_card = $apiScryfall->interroger('get', 'cards/'.$datas['id_scryfall']);
            $carte = new Card(); // todo vérifier si cette carte est déjà existente en local
            $carte->setIdScryfall($response_card->body->id);
            $carte->setName($response_card->body->name);
            $em->persist($carte);
            $em->flush();
            $deckcarte->setCard($carte);
            $deckcarte->setQuantite($datas['quantite']);
            $deckcarte->setDeck($deck);
            $em->persist($deckcarte);
            $em->flush();
            return $this->redirectToRoute('planeswalkers.deck.edit', [
                'id' => $deck->getId()
            ]);
        }

        return $this->render('planeswalkers/deck/new.html.twig', [
        ]);
    }

}