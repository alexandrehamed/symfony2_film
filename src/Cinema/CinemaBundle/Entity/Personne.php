<?php

namespace Cinema\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Repository\PersonneRepository")
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Gens", type="string", length=255)
     */
    private $gens;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gens
     *
     * @param string $gens
     *
     * @return Personne
     */
    public function setGens($gens)
    {
        $this->gens = $gens;

        return $this;
    }

    /**
     * Get gens
     *
     * @return string
     */
    public function getGens()
    {
        return $this->gens;
    }
}

