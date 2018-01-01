<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $title = 'Mapa policejních radarů';

        /*$measurePlaceRepository = $this->getDoctrine()->getRepository('App:MeasurePlace');
        $applicationRepository   = $this->getDoctrine()->getRepository('App:Application');

        $measurePlaces = $measurePlaceRepository->findAll();
        $applications  = $applicationRepository->findAll();
        $application   = reset($applications);

        return $this->render('Default/index.html.twig', [
            'title'         => $title,
            'measurePlaces' => $measurePlaces,
            'keywords'      => $application->getKeywords(),
            'description'   => $application->getDescription(),
        ]);*/

        return $this->render('Lucky/number.html.twig', [
            'number' => $title
        ]);
    }

}
