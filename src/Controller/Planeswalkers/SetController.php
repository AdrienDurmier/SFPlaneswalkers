<?php

namespace App\Controller\Planeswalkers;

use Doctrine\DBAL\Exception\ServerException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIScryfall;

class SetController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/sets", name="planeswalkers.set.index")
     * @param PaginatorInterface $paginator
     * @param APIScryfall $apiScryfall
     * @param Request $request
     * @return Response
     * @throws ServerException
     */
    public function index(PaginatorInterface $paginator, APIScryfall $apiScryfall, Request $request)
    {
        $response = $apiScryfall->interroger('get', 'sets');

        $sets = $paginator->paginate(
            $response->body->data,
            $request->query->getInt('page', 1),
            60
        );

        return $this->render('planeswalkers/set/index.html.twig', [
            'sets'  =>  $sets,
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