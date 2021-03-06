<?php

namespace Cinema\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="Cinema\CinemaBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="Auteurs", type="string", length=255)
     */
    private $auteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Resume", type="text", length=255)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="Sortie", type="date", length=255)
     */
    private $sortie;


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
     * Set auteurs
     *
     * @param string $auteurs
     *
     * @return Film
     */
    public function setAuteurs($auteurs)
    {
        $this->auteurs = $auteurs;

        return $this;
    }

    /**
     * Get auteurs
     *
     * @return string
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Film
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set sortie
     *
     * @param string $sortie
     *
     * @return Film
     */
    public function setSortie($sortie)
    {
        $this->sortie = $sortie;

        return $this;
    }

    /**
     * Get sortie
     *
     * @return string
     */
    public function getSortie()
    {
        return $this->sortie;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="Film")
     */
    private $genre;

    /**
     * Set genre
     *
     * @param \Cinema\CinemaBundle\Entity\Genre $genre
     *
     * @return Film
     */
    public function setGenre(\Cinema\CinemaBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Cinema\CinemaBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="Film")
     */
    private $personne;

    /**
     * Set personne
     *
     * @param \Cinema\CinemaBundle\Entity\Personne $personne
     *
     * @return Film
     */
    public function setPersonne(\Cinema\CinemaBundle\Entity\Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Cinema\CinemaBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;


    }
}
