<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $deck_ordered = [
            'Creatures' => [],
            'Planeswalkers' => [],
            'Spells' => [],
            'Lands' => [],
        ];
        foreach ($deck->getCards() as $deck_card){
            if(strpos(strtolower($deck_card->getCard()->getTypeLine()), 'creature') !== false){
                $deck_ordered['Creatures'][] = $deck_card;
            }
            else if(strpos(strtolower($deck_card->getCard()->getTypeLine()), 'planeswalker') !== false){
                $deck_ordered['Planeswalkers'][] = $deck_card;
            }
            else if(strpos(strtolower($deck_card->getCard()->getTypeLine()), 'land') !== false){
                $deck_ordered['Lands'][] = $deck_card;
            }else{
                $deck_ordered['Spells'][] = $deck_card;
            }
        }

        return $this->render('planeswalkers/deck/edit.html.twig', [
            'deck'         =>  $deck,
            'deck_ordered'   =>  $deck_ordered,
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
     * @Route("/admin/planeswalkers/decks-legality/{id}", name="planeswalkers.deck.legality")
     * @param Deck $deck
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function legality(Deck $deck, APIScryfall $apiScryfall)
    {
        $deck_cards = $this->getDoctrine()->getRepository(DeckCard::class)->findByDeck($deck);

        $legalities = [];
        $standard = true;
        $future = true;
        $modern = true;
        $legacy = true;
        $pauper = true;
        $vintage = true;
        $penny = true;
        $commander = true;
        $brawl = true;
        $duel = true;
        $oldschool = true;
        foreach($deck_cards as $deck_card){
            $response_card = $apiScryfall->interroger('get', 'cards/'.$deck_card->getCard()->getIdScryfall());
            // Cartes
            $legalities['cartes'][$deck_card->getCard()->getId()]['carte'] = $response_card->body;
            $legalities['cartes'][$deck_card->getCard()->getId()]['quantite']   = $deck_card->getQuantite();
            $legalities['cartes'][$deck_card->getCard()->getId()]['quantite_reserve'] = $deck_card->getQuantiteReserve();
            // Cartes - legality
            $legalities['cartes'][$deck_card->getCard()->getId()]['standard']   = $response_card->body->legalities->standard;
            $legalities['cartes'][$deck_card->getCard()->getId()]['future']     = $response_card->body->legalities->future;
            $legalities['cartes'][$deck_card->getCard()->getId()]['modern']     = $response_card->body->legalities->modern;
            $legalities['cartes'][$deck_card->getCard()->getId()]['legacy']     = $response_card->body->legalities->legacy;
            $legalities['cartes'][$deck_card->getCard()->getId()]['pauper']     = $response_card->body->legalities->pauper;
            $legalities['cartes'][$deck_card->getCard()->getId()]['vintage']    = $response_card->body->legalities->vintage;
            $legalities['cartes'][$deck_card->getCard()->getId()]['penny']      = $response_card->body->legalities->penny;
            $legalities['cartes'][$deck_card->getCard()->getId()]['commander']  = $response_card->body->legalities->commander;
            $legalities['cartes'][$deck_card->getCard()->getId()]['brawl']      = $response_card->body->legalities->brawl;
            $legalities['cartes'][$deck_card->getCard()->getId()]['duel']       = $response_card->body->legalities->duel;
            $legalities['cartes'][$deck_card->getCard()->getId()]['oldschool']  = $response_card->body->legalities->oldschool;
            // Résumé
            if($response_card->body->legalities->standard == 'not_legal'
                || $response_card->body->legalities->standard == 'banned'
                || ($response_card->body->legalities->standard == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $standard = false;
            }
            if($response_card->body->legalities->future == 'not_legal'
                || $response_card->body->legalities->future == 'banned'
                || ($response_card->body->legalities->future == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $future = false;
            }
            if($response_card->body->legalities->modern == 'not_legal'
                || $response_card->body->legalities->modern == 'banned'
                || ($response_card->body->legalities->modern == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $modern = false;
            }
            if($response_card->body->legalities->legacy == 'not_legal'
                || $response_card->body->legalities->legacy == 'banned'
                || ($response_card->body->legalities->legacy == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $legacy = false;
            }
            if($response_card->body->legalities->pauper == 'not_legal'
                || $response_card->body->legalities->pauper == 'banned'
                || ($response_card->body->legalities->pauper == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $pauper = false;
            }
            if($response_card->body->legalities->vintage == 'not_legal'
                || $response_card->body->legalities->vintage == 'banned'
                || ($response_card->body->legalities->vintage == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $vintage = false;
            }
            if($response_card->body->legalities->penny == 'not_legal'
                || $response_card->body->legalities->penny == 'banned'
                || ($response_card->body->legalities->penny == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $penny = false;
            }
            if($response_card->body->legalities->commander == 'not_legal'
                || $response_card->body->legalities->commander == 'banned'
                || ($response_card->body->legalities->commander == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $commander = false;
            }
            if($response_card->body->legalities->brawl == 'not_legal'
                || $response_card->body->legalities->brawl == 'banned'
                || ($response_card->body->legalities->brawl == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $brawl = false;
            }
            if($response_card->body->legalities->duel == 'not_legal'
                || $response_card->body->legalities->duel == 'banned'
                || ($response_card->body->legalities->duel == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $duel = false;
            }
            if($response_card->body->legalities->oldschool == 'not_legal'
                || $response_card->body->legalities->oldschool == 'banned'
                || ($response_card->body->legalities->oldschool == 'restricted' && $deck_card->getQuantite() + $deck_card->getQuantiteReserve() > 1)){
                $oldschool = false;
            }
            $legalities['deck']['legality']['standard'] = $standard;
            $legalities['deck']['legality']['future'] = $future;
            $legalities['deck']['legality']['modern'] = $modern;
            $legalities['deck']['legality']['legacy'] = $legacy;
            $legalities['deck']['legality']['pauper'] = $pauper;
            $legalities['deck']['legality']['vintage'] = $vintage;
            $legalities['deck']['legality']['penny'] = $penny;
            $legalities['deck']['legality']['commander'] = $commander;
            $legalities['deck']['legality']['brawl'] = $brawl;
            $legalities['deck']['legality']['duel'] = $duel;
            $legalities['deck']['legality']['oldschool'] = $oldschool;
        }
        // dump($legalities);die();

        return $this->render('planeswalkers/deck/legality.html.twig', [
            'deck'         =>  $deck,
            'legalities'   =>  $legalities,
        ]);
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
        $total_main = 0;
        $total_reserve = 0;
        foreach($deck_cards as $deck_card){
            $response_card = $apiScryfall->interroger('get', 'cards/'.$deck_card->getCard()->getIdScryfall());
            $total_carte_main = $deck_card->getQuantite() * $response_card->body->prices->eur;
            $total_carte_reserve = $deck_card->getQuantiteReserve() * $response_card->body->prices->eur;
            $total_main += $total_carte_main;
            $total_reserve += $total_carte_reserve;
            $total += $total_carte_main + $total_carte_reserve;
            // carte
            $estimation['cartes'][$deck_card->getCard()->getId()]['carte'] = $response_card->body;
            $estimation['cartes'][$deck_card->getCard()->getId()]['quantite'] = $deck_card->getQuantite();
            $estimation['cartes'][$deck_card->getCard()->getId()]['quantite_reserve'] = $deck_card->getQuantiteReserve();
            $estimation['cartes'][$deck_card->getCard()->getId()]['total_carte_main'] = $total_carte_main;
            $estimation['cartes'][$deck_card->getCard()->getId()]['total_carte_reserve'] = $total_carte_reserve;
            // total
            $estimation['deck']['total'] = $total;
            $estimation['deck']['total_main'] = $total_main;
            $estimation['deck']['total_reserve'] = $total_reserve;
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

    /**
     * @Route("/admin/planeswalkers/deck/ajax-maindepart", name="planeswalkers.deck.ajax.maindepart", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxMainDepart(Request $request)
    {
        $datas = $request->request->all();
        $deck = $this->getDoctrine()->getRepository(Deck::class)->find($datas['deck']);

        $response = array(
            'bibliotheque' => $deck->getMainDepart(),
        );
        return new JsonResponse($response);
    }

}