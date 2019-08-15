<?php

namespace App\Controller\Planeswalkers;

use App\Entity\Planeswalkers\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planeswalkers\Deck;
use App\Entity\Planeswalkers\DeckCard;
use App\Service\APIScryfall;

class DeckCardController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/deckcard/new", name="planeswalkers.deckcard.new")
     * @param APIScryfall $apiScryfall
     * @param Request $request
     * @return Response
     * @throws \Doctrine\DBAL\Exception\ServerException
     */
    public function new(APIScryfall $apiScryfall, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $deckcard = new DeckCard();
            // Création de la card en local
            $deck = $this->getDoctrine()->getRepository(Deck::class)->find($datas['deck']);
            $response_card = $apiScryfall->interroger('get', 'cards/'.$datas['id_scryfall']);
            $card = new Card(); // todo vérifier si cette card est déjà existente en local
            $card->setIdScryfall($response_card->body->id);
            $card->setName($response_card->body->name);
            $card->setLayout($response_card->body->layout);
            $card->setImageUrisSmall($response_card->body->image_uris->small);
            $card->setImageUrisNormal($response_card->body->image_uris->normal);
            $card->setImageUrisLarge($response_card->body->image_uris->large);
            $card->setImageUrisPng($response_card->body->image_uris->png);
            $card->setImageUrisArtCrop($response_card->body->image_uris->art_crop);
            $card->setManaCost($response_card->body->mana_cost);
            $card->setCmc($response_card->body->cmc);
            $card->setTypeLine($response_card->body->type_line);
            $card->setRarity($response_card->body->rarity);
            $card->setColors($response_card->body->colors);
            $em->persist($card);
            $em->flush();
            $deckcard->setCard($card);
            $deckcard->setQuantite($datas['quantite']);
            $deckcard->setDeck($deck);
            $em->persist($deckcard);
            $em->flush();
            return $this->redirectToRoute('planeswalkers.deck.edit', [
                'id' => $deck->getId()
            ]);
        }

        return $this->render('planeswalkers/deck/new.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/deckcard/ajax-quantite", name="planeswalkers.deckcard.ajax.quantite", methods="POST")
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxQuantite(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $datas = $request->request->all();
        $delete = false;
        $deckcard = $this->getDoctrine()->getRepository(DeckCard::class)->find($datas['deckcard']);
        if(isset($datas['quantite'])){
            if($datas['quantite'] > 1) {
                $deckcard->setQuantite($datas['quantite']);
                $em->persist($deckcard);
            } else {
                $em->remove($deckcard);
                $delete = true;
            }
            $em->flush();
        }
        $em->flush();
        $response = array(
            'delete' => $delete,
        );
        return new JsonResponse($response);
    }


}