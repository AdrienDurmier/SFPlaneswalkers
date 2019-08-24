<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\APIScryfall;

class ArtistController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/artists", name="planeswalkers.artist.index")
     * @param PaginatorInterface $paginator
     * @param APIScryfall $apiScryfall
     * @param Request $request
     * @return Response
     * @throws ServerException
     */
    public function index(PaginatorInterface $paginator, APIScryfall $apiScryfall, Request $request)
    {
        $response = $apiScryfall->interroger('get', 'catalog/artist-names');

        $artists = $paginator->paginate(
            $response->body->data,
            $request->query->getInt('page', 1),
            50
        );

        return $this->render('planeswalkers/artist/index.html.twig', [
            'artists'  =>  $artists,
        ]);
    }

    /**
     * @Route("/admin/planeswalkers/artists/{name}", name="planeswalkers.artist.show")
     * @param $name
     * @param PaginatorInterface $paginator
     * @param APIScryfall $apiScryfall
     * @param Request $request
     * @return Response
     * @throws ServerException
     */
    public function show($name, PaginatorInterface $paginator, APIScryfall $apiScryfall, Request $request)
    {
        $response_cards = $apiScryfall->interroger('get', 'collapseArtist=a%3A'.str_replace(' ', '',$name));

        $cards = $paginator->paginate(
            $response_cards->body->data,
            $request->query->getInt('page', 1),
            12
        );

        return $this->render('planeswalkers/artist/show.html.twig', [
            'name'  =>  $name,
            'cards'  =>  $cards,
        ]);
    }
    
}