<?php

namespace App\Controller\Planeswalkers;

use App\Entity\Planeswalkers\DeckCarte;
use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planeswalkers\Deck;
use App\Service\APIScryfall;

class DeckController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/decks", name="planeswalkers.deck.index")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function index(APIScryfall $apiScryfall)
    {
        $decks = $this->getDoctrine()->getRepository(Deck::class)->findBy([
            'author' => $this->getUser()
        ]);

        return $this->render('planeswalkers/deck/index.html.twig', [
            'decks'  =>  $decks
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/decks/new", name="planeswalkers.deck.new")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $deck = new Deck();
            $deck->setTitle($datas['title']);
            $deck->setContent($datas['content']);
            $deck->setPublic(isset($datas['public'])?$datas['public']:0);
            $deck->setAuthor($this->getUser());
            $em->persist($deck);
            $em->flush();
            return $this->redirectToRoute('planeswalkers.deck.edit', [
                'id' => $deck->getId()
            ]);
        }

        return $this->render('planeswalkers/deck/new.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/decks/{id}", name="planeswalkers.deck.edit")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function edit(Deck $deck, APIScryfall $apiScryfall)
    {
        $deck_cartes = $this->getDoctrine()->getRepository(DeckCarte::class)->findByDeck($deck);

        return $this->render('planeswalkers/deck/edit.html.twig', [
            'deck'          =>  $deck,
            'deck_cartes'   =>  $deck_cartes,
        ]);
    }
    
}