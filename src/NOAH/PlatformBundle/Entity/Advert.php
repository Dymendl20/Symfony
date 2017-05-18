<?php

namespace NOAH\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Advert
 *
 * @ORM\Table(name="noah_advert")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Entity\AdvertRepository")
 */
class Advert
{
    // ...

    public function __construct()
    {
        // Par défaut, la date de l'annonce est la date d'aujourd'hui
        $this->date = new \Datetime();
    }

    // ...
}
