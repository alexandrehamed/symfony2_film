<?php

namespace Cinema\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/film")
 */
class DefaultController extends Controller
{

    /**
     * @Route("/home", name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('CinemaCinemaBundle::layout.html.twig');
    }

    /**
     * @Route("/liste", name="page_liste")
     */
    public function filmliste()
    {
        $films= $this->getDoctrine()->getRepository('CinemaCinemaBundle:Film')->findAll();
        $titre_page= 'Liste des films ';



        return $this->render(
            'CinemaCinemaBundle:Cinema:film.html.twig',
            ['films'=>$films]
        );
    }
    /**
     * @Route("/realisateurs", name="page_realisateur")
     */
    public function realisateliste(){


        $realisateurs = $this->getDoctrine()->getRepository('CinemaCinemaBundle:Personne')->findAll();
        return $this->render(
            'CinemaCinemaBundle:Cinema:realisateur.html.twig',
            ['realisateurs' => $realisateurs]
        );
    }
    /**
     * @Route("/realisateur/{id}", requirements={"id": "\d+"}, name="page_film")
     */
    public function showAction($id){


        $films = $this->getDoctrine()->getRepository('CinemaCinemaBundle:Film')->findByPersonne($id);
        return $this->render(
            'CinemaCinemaBundle:Cinema:filmographie.html.twig',

            ['films' => $films]
        );
    }


    /**
     * @Route("/categorie/{id}", requirements={"id": "\d+"}, name="page_categorie")
     */
    public function categorie($id){


        $films = $this->getDoctrine()->getRepository('CinemaCinemaBundle:Film')->findByPersonne($id);
        return $this->render(
            'CinemaCinemaBundle:Cinema:filmographie.html.twig',

            ['films' => $films]
        );
    }
}
