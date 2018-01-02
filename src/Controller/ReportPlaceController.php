<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ReportPlaceController extends Controller
{
    /**
     * @Route("/nahlasit-misto", name="reportPlace")
     */
    public function reportPlace()
    {
        return $this->render('reportPlace.html.twig', [
        ]);
    }
}