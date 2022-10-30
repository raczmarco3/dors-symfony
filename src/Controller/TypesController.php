<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TypesFormType;
use App\Entity\Types;
use App\Repository\TypesRepository;

class TypesController extends AbstractController
{
    public function index(TypesRepository $typesRepository): Response
    {        
        $types = $typesRepository->findAll();
        return $this->render('types/index.html.twig', [
            "types" => $types
        ]);
    }

    public function addNewType(Request $request, ManagerRegistry $doctrine): Response
    {
        $types = new Types();
        $typeForm = $this->createForm(TypesFormType::class, $types);
        $typeForm->handleRequest($request);

        if($typeForm->isSubmitted()) {
            $types = $typeForm->getData();  
            $types->setCreated(new \DateTime());
            $types->setUpdated(new \DateTime());
            $entityManager = $doctrine->getManager();
            $entityManager->persist($types);
            $entityManager->flush();

            return $this->renderForm('types/index.html.twig', [
                'typeForm' => $typeForm,
                'save' => 'true'
            ]);
        }
        
        return $this->renderForm('types/index.html.twig', [
            'typeForm' => $typeForm,
        ]);
    }
}
