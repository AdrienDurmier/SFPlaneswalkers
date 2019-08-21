<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIScryfall;

class ArtistController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/artists", name="planeswalkers.artist.index")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function index(APIScryfall $apiScryfall)
    {
        $response = $apiScryfall->interroger('get', 'catalog/artist-names');

        return $this->render('planeswalkers/artist/index.html.twig', [
            'artists'  =>  $response->body,
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/artists/{name}", name="planeswalkers.artist.show")
     * @param APIScryfall $apiScryfall
     * @return Response
     * @throws ServerException
     */
    public function show($name, APIScryfall $apiScryfall)
    {
        $response_cards = $apiScryfall->interroger('get', 'cards/search?q=a%3A'.str_replace(' ', '',$name));
        return $this->render('planeswalkers/artist/show.html.twig', [
            'name'  =>  $name,
            'cards'  =>  $response_cards->body,
        ]);
    }
    
}