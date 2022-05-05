<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $ar;
    private $cr;

    public function __construct(ArticleRepository $ar, CategoryRepository $cr)
    {
        $this->ar = $ar;
        $this->cr = $cr;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $dataArticle = $this->ar->findAll();
        $dataCategory = $this->cr->findAll();

        dump($dataCategory);

        return $this->render('home/index.html.twig', [
            'data' => $dataArticle,
            'categories' => $dataCategory,
        ]);
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show(Article $article): Response
    {
        //$data = $this->ar->find($id);
        // dump($article);
        if (!$article) {
            $this->redirectToRoute("app_home");
        }
        return $this->render('show/index.html.twig', [
            "data" => $article
        ]);
    }

    /**
     * @Route("/showArticles/{id}", name="show_articles")
     */
    public function showArticles(?Category $category): Response //NB : ? dans le param de la fonction signifie que je peux accepter un param null (si l’id de la category n’existe pas).
    {

        if ($category) {

            $articles = $category->getArticles()->getValues();
            dump($articles);
        } else {

            return $this->redirectToRoute("app_home");
        }
        return $this->render('home/index.html.twig', [
            "data" => $articles,
            "categories" => $this->cr->findAll()
        ]);
    }
}
