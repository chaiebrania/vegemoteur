<?php

namespace App\Controller;

use App\Entity\FicheVie;
use App\Form\FicheVieType;
use App\Repository\FicheVieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fiche/vie")
 */
class FicheVieController extends AbstractController
{
    /**
     * @Route("/", name="fiche_vie_index", methods={"GET"})
     */
    public function index(FicheVieRepository $ficheVieRepository): Response
    {
        return $this->render('fiche_vie/index.html.twig', [
            'fiche_vies' => $ficheVieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="fiche_vie_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ficheVie = new FicheVie();
        $form = $this->createForm(FicheVieType::class, $ficheVie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ficheVie);
            $entityManager->flush();

            return $this->redirectToRoute('fiche_vie_index');
        }

        return $this->render('fiche_vie/new.html.twig', [
            'fiche_vie' => $ficheVie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_vie_show", methods={"GET"})
     */
    public function show(FicheVie $ficheVie): Response
    {
        return $this->render('fiche_vie/show.html.twig', [
            'fiche_vie' => $ficheVie,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fiche_vie_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FicheVie $ficheVie): Response
    {
        $form = $this->createForm(FicheVieType::class, $ficheVie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_vie_index');
        }

        return $this->render('fiche_vie/edit.html.twig', [
            'fiche_vie' => $ficheVie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_vie_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FicheVie $ficheVie): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ficheVie->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ficheVie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fiche_vie_index');
    }
}
