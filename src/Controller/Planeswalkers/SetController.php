<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIScryfall;

class SetController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/sets", name="planeswalkers.set.index")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function index(APIScryfall $apiScryfall)
    {
        $response = $apiScryfall->interroger('get', 'sets');

        return $this->render('planeswalkers/set/index.html.twig', [
            'sets'  =>  $response->body,
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/sets/{code}", name="planeswalkers.set.show")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function show($code, APIScryfall $apiScryfall)
    {
        $response_set = $apiScryfall->interroger('get', 'sets/'.$code);
        $response_cards = $apiScryfall->interroger('get', 'cards/search?order=cmc&q=set%3A'.$code);

        return $this->render('planeswalkers/set/show.html.twig', [
            'set'  =>  $response_set->body,
            'cards'  =>  $response_cards->body,
        ]);
    }
    
}