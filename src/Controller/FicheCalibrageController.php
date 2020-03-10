<?php

namespace App\Controller;

use App\Entity\FicheCalibrage;
use App\Form\FicheCalibrageType;
use App\Repository\FicheCalibrageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fiche/calibrage")
 */
class FicheCalibrageController extends AbstractController
{
    /**
     * @Route("/", name="fiche_calibrage_index", methods={"GET"})
     */
    public function index(FicheCalibrageRepository $ficheCalibrageRepository): Response
    {
        return $this->render('fiche_calibrage/index.html.twig', [
            'fiche_calibrages' => $ficheCalibrageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="fiche_calibrage_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ficheCalibrage = new FicheCalibrage();
        $form = $this->createForm(FicheCalibrageType::class, $ficheCalibrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ficheCalibrage);
            $entityManager->flush();

            return $this->redirectToRoute('fiche_calibrage_index');
        }

        return $this->render('fiche_calibrage/new.html.twig', [
            'fiche_calibrage' => $ficheCalibrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_calibrage_show", methods={"GET"})
     */
    public function show(FicheCalibrage $ficheCalibrage): Response
    {
        return $this->render('fiche_calibrage/show.html.twig', [
            'fiche_calibrage' => $ficheCalibrage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fiche_calibrage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FicheCalibrage $ficheCalibrage): Response
    {
        $form = $this->createForm(FicheCalibrageType::class, $ficheCalibrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche_calibrage_index');
        }

        return $this->render('fiche_calibrage/edit.html.twig', [
            'fiche_calibrage' => $ficheCalibrage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fiche_calibrage_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FicheCalibrage $ficheCalibrage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ficheCalibrage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ficheCalibrage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fiche_calibrage_index');
    }
}
