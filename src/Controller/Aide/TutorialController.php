<?php

namespace App\Controller\Aide;

use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Aide\Tutorial;
use App\Repository\Aide\TutorialRepository;

class TutorialController extends AbstractController
{
    /**
     * @Route("/admin/tutorials", name="tutorial.index")
     * @param TutorialRepository $tutorialRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TutorialRepository $tutorialRepository)
    {
        $tutorials = $tutorialRepository->findAll();
        return $this->render('aide/tutorial/index.html.twig', compact('tutorials'));
    }

    /**
     * @Route("/admin/tutorial/show/{id}", name="tutorial.show", methods="GET|POST")
     * @param Tutorial $tutorial
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Tutorial $tutorial)
    {
        return $this->render('aide/tutorial/show.html.twig', [
            'entity'  =>  $tutorial,
        ]);
    }

    /**
     * @Route("/admin/tutorial/new", name="tutorial.new", methods="GET|POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function new(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $tutorial = new Tutorial();
            $tutorial->setTitle($datas['title']);
            $tutorial->setContent($datas['content']);
            $tutorial->setPublic(isset($datas['public'])?$datas['public']:0);
            $tutorial->setAuthor($this->getUser());
            $em->persist($tutorial);
            $em->flush();
            $this->addFlash('success', "Contenu créé avec succès");
            return $this->redirectToRoute('tutorial.index');
        }

        return $this->render('aide/tutorial/new.html.twig');
    }

    /**
     * @Route("/admin/tutorial/edit/{id}", name="tutorial.edit", methods="GET|POST")
     * @param Tutorial $tutorial
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(Tutorial $tutorial, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $datas = $request->request->all();
            $tutorial->setTitle($datas['title']);
            $tutorial->setContent($datas['content']);
            $tutorial->setPublic(isset($datas['public'])?$datas['public']:0);
            $tutorial->setAuthor($this->getUser());
            $em->persist($tutorial);
            $em->flush();
            $this->addFlash('success', "Contenu modifié avec succès");
            return $this->redirectToRoute('tutorial.index');
        }

        return $this->render('aide/tutorial/edit.html.twig', [
            'entity'  =>  $tutorial,
        ]);
    }

    /**
     * @Route("/admin/tutorial/{id}", name="tutorial.delete", methods="DELETE")
     * @param Tutorial $tutorial
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Tutorial $tutorial)
    {
        $em = $this->getDoctrine()->getManager();
        if($this->isCsrfTokenValid('delete_tutorial', $request->get('_token'))){
            $em->remove($tutorial);
            $em->flush();
            $this->addFlash('success', "Contenu supprimé avec succès");
        }
        return $this->redirectToRoute('tutorial.index');
    }

}