<?php
// src/NOAH/PlatformBundle/Controller/AdvertController.php

namespace NOAH\PlatformBundle\Controller;

use NOAH\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function viewAction()
    {
        $advert = new Advert;
        $advert->setContent("Recherche développeur Symfony3 URGENT.");

        return $this->render('NOAHPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
    }
}