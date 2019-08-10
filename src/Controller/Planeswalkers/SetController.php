<?php

namespace App\Controller\Planeswalkers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIScryfall;

class SetController extends AbstractController
{
    /**
     * @Route("/admin/planeswalkers/sets", name="planeswalkers.set.index")
     * @param APIScryfall $apiScryfall
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\DBAL\Exception\ServerException
     */
    public function index(APIScryfall $apiScryfall)
    {
        $response = $apiScryfall->interroger('get', 'sets');

        return $this->render('planeswalkers/set/index.html.twig', [
            'sets'  =>  $response->body,
        ]);
    }
    
}