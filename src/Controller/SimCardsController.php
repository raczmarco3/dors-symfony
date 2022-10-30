<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SIMCardsRepository;
use App\Entity\SIMCards;
use App\Form\SimCardsFormType;
use App\Repository\CarriersRepository;
use App\Repository\PhonesRepository;
use App\Repository\TypesRepository;

class SimCardsController extends AbstractController
{
    /**
     * @Route("/sim/cards", name="app_sim_cards")
     */
    public function index(SIMCardsRepository $simCardsRepository): Response
    {
        $simCards = $simCardsRepository->findAll();
        return $this->render('sim_cards/index.html.twig', [
            "simCards" => $simCards
        ]);
    }

    public function addNewSim(Request $request, ManagerRegistry $doctrine): Response
    {
        $simCards = new SIMCards();
        
        $phonesRepository = new PhonesRepository($doctrine);
        $phones = $phonesRepository->findAll();
        $phonesOptions = [];
        foreach($phones as $phone)
        {
            $phonesOptions[$phone->getFirId()] = $phone->getId();
        }

        $carriersRepository = new CarriersRepository($doctrine);
        $carriers = $carriersRepository->findAll();
        $carriersOptions = [];
        foreach($carriers as $carrier)
        {
            $carriersOptions[$carrier->getName()] = $carrier->getId();
        }

        $typesRepository = new TypesRepository($doctrine);
        $types = $typesRepository->findAll();
        $typesOptions = [];
        foreach($types as $type)
        {
            $typesOptions[$type->getName()] = $type->getId();
        }

        $simForm = $this->createForm(SimCardsFormType::class, $simCards, ['phonesOptions' => $phonesOptions, 'carriersOptions' => $carriersOptions, 'typesOptions' => $typesOptions]);
        $simForm->handleRequest($request);

        if($simForm->isSubmitted()) {
            $simCards = $simForm->getData();  
            $simCards->setCreated(new \DateTime());
            $simCards->setUpdated(new \DateTime());
            $simCards->setCreator('1');
            $simCards->setUpdater('1');
            $entityManager = $doctrine->getManager();
            $entityManager->persist($simCards);
            $entityManager->flush();

            return $this->renderForm('sim_cards/index.html.twig', [
                'simForm' => $simForm,
                'save' => 'true'
            ]);
        }
        
        return $this->renderForm('sim_cards/index.html.twig', [
            'simForm' => $simForm,
        ]);
    }
}
