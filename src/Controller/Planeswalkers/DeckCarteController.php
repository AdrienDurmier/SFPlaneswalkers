<?php

namespace App\Controller\Planeswalkers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planeswalkers\Deck;
use App\Entity\Planeswalkers\DeckCarte;

class DeckCarteController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/deckcarte/new/{deck}", name="planeswalkers.deckcarte.new")
     * @param Request $request
     * @return Response
     */
    public function new(Deck $deck, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $deckcarte = new DeckCarte();
            $deckcarte->setIdScryfall($datas['id_scryfall']);
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