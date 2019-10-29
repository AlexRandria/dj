<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Formulaire;
use App\Entity\FormEntreprise;
use App\Entity\CodePostal;
use App\Entity\Formulaire_base;
use App\Form\Type\FormulaireType;
use App\Form\Type\FormEntrepriseType;

class AccueilController extends AbstractController {

    /**
     * @Route("/mariage/{code_postal}", name="mariage", defaults={"code_postal"=null})
     */
    public function formulaire(Request $request) {
        $formulaire = new Formulaire();
        $form = $this->createForm(FormulaireType::class,$formulaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $id = $formulaire->getCodePostal();
            $number = '';
            $mot = '';
            for ($i=0; $i < strlen($id); $i++) { 
                for ($j=0; $j < 10; $j++) { 
                    if(is_numeric($id{$i})) {
                        $number .= $id{$i};
                        break;
                    }
                    elseif(!is_numeric($id{$i}) && $j == 9 ) {
                        $mot .= $id{$i};
                    }
                }
            }
            $code_postal =  $this->getDoctrine()
                            ->getRepository(CodePostal::class)
                            ->findByCode2($number, trim($mot));
            $formulaire->setCodePostal($code_postal[0]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulaire->getFormulaireBase());
            $em->persist($formulaire);
            $em->flush();
            return $this->redirectToRoute('one');
        }
        return $this->render('accueil.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @Route("/soiree-d-entreprise/{code_postal}", name="soiree-d-entreprise", defaults={"code_postal"=null})
     */
    public function formEntreprise(Request $request, $code_postal) {
        $formulaire = new FormEntreprise();
        $form = $this->createForm(FormEntrepriseType::class,$formulaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formulaire->getFormulaireBase());
            $em->persist($formulaire);
            $em->flush();
            return $this->redirectToRoute('one');
        }
        return $this->render('accueilEntreprise.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @Route("/{soiree}", name="base", defaults={"soiree"=null})
     */
    public function base() {
        return $this->render('baseAccueil.html.twig');
    }

    /**
     * @Route("/ajax/{id}", name="ajax", defaults={"id"=null})
     */
    public function ajax($id) {
        $number = '';
        $mot = '';
        for ($i=0; $i < strlen($id); $i++) { 
            for ($j=0; $j < 10; $j++) { 
                if(is_numeric($id{$i})) {
                    $number .= $id{$i};
                    break;
                }
                elseif(!is_numeric($id{$i}) && $j == 9 ) {
                    $mot .= $id{$i};
                }
            }
        }
        $tabCode = $this->getDoctrine()
                        ->getRepository(CodePostal::class)
                        ->findByCode($number, trim($mot));
        return $this->json(['tabCode' => $tabCode]);
    }
    /**
     * @Route("/one/click", name="one")
     */
    public function one(){
        return $this->render('one.html.twig');
    }
}