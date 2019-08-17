<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planeswalkers\Deck;
use App\Service\APIScryfall;
use App\Entity\Planeswalkers\DeckCard;
use App\Service\Planeswalkers\ProbabilityService;

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
     * @Route("/admin/planeswalkers/decks/{id}", name="planeswalkers.deck.edit", methods="GET|POST")
     * @return Response
     * @throws ServerException
     */
    public function edit(Deck $deck)
    {
        $deck_cards = $this->getDoctrine()->getRepository(DeckCard::class)->findByDeck($deck);

        return $this->render('planeswalkers/deck/edit.html.twig', [
            'deck'         =>  $deck,
            'deck_cards'   =>  $deck_cards,
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/decks/{id}", name="planeswalkers.deck.delete", methods="DELETE")
     * @param Deck $deck
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Deck $deck, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if($this->isCsrfTokenValid('delete_deck', $request->get('_token'))){
            $em->remove($deck);
            $em->flush();
            $this->addFlash('success', "Deck supprimé avec succès");
        }
        return $this->redirectToRoute('planeswalkers.deck.index');
    }

    /**
     * @Route("/admin/planeswalkers/decks-estimation/{id}", name="planeswalkers.deck.estimation")
     * @param Deck $deck
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function estimation(Deck $deck, APIScryfall $apiScryfall)
    {
        $deck_cards = $this->getDoctrine()->getRepository(DeckCard::class)->findByDeck($deck);

        $estimation = [];
        $total = 0;
        foreach($deck_cards as $deck_card){
            $response_card = $apiScryfall->interroger('get', 'cards/'.$deck_card->getCard()->getIdScryfall());
            $total_carte = $deck_card->getQuantite() * $response_card->body->prices->eur;
            $total += $total_carte;
            // carte
            $estimation['cartes'][$deck_card->getCard()->getId()]['carte'] = $response_card->body;
            $estimation['cartes'][$deck_card->getCard()->getId()]['quantite'] = $deck_card->getQuantite();
            $estimation['cartes'][$deck_card->getCard()->getId()]['total_carte'] = $total_carte;
            // total
            $estimation['deck']['total'] = $total;
        }

        return $this->render('planeswalkers/deck/estimation.html.twig', [
            'deck'         =>  $deck,
            'estimation'   =>  $estimation,
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/decks-probabilites/{id}", name="planeswalkers.deck.probabilites")
     * @param Deck $deck
     * @param ProbabilityService $probabilityService
     * @return Response
     */
    public function probabilites(Deck $deck, ProbabilityService $probabilityService)
    {
        $deck_cards = $this->getDoctrine()->getRepository(DeckCard::class)->findByDeck($deck);
        $probabilites = $probabilityService->tirageParTour($deck, $deck_cards);

        return $this->render('planeswalkers/deck/probabilites.html.twig', [
            'deck'         =>  $deck,
            'probabilites' =>  $probabilites,
        ]);
    }

}