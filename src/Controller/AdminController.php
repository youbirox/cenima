<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/Acteur", name="Acteur")
     */
    public function Acteur(): Response
    {
        return $this->render('admin/Acteur.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/film", name="film")
     */
    public function film(): Response
    {
        return $this->render('admin/film.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/genre", name="genre")
     */
    public function genre(): Response
    {
        return $this->render('admin/genre.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
