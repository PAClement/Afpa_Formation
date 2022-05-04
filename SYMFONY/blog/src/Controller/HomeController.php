<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function __construct(ArticleRepository $ar)
    {
        $this->ar = $ar;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $data = $this->ar->findAll();
        dump($data);
        return $this->render('home/index.html.twig', [
            'data' => $data,
        ]);
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show(Article $article): Response
    {
        //$data = $this->ar->find($id);
        dump($article);
        if (!$article) {
            $this->redirectToRoute("app_home");
        }
        return $this->render('show/index.html.twig', [
            "data" => $article
        ]);
    }
}
