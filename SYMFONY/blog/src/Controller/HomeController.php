<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $dataArticle = $this->ar->findAll();
        $dataCategory = $this->cr->findAll();

        $articlesPag = $paginator->paginate(
            $dataArticle, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            7 // Nombre de résultats par page
        );

        return $this->render('home/index.html.twig', [
            'data' => $articlesPag,
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
    public function showArticles(?Category $category, PaginatorInterface $paginator, Request $request): Response //NB : ? dans le param de la fonction signifie que je peux accepter un param null (si l’id de la category n’existe pas).
    {

        if ($category) {

            $articles = $category->getArticles()->getValues();

            $articlesPag = $paginator->paginate(
                $articles, // Requête contenant les données à paginer (ici nos articles)
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                6 // Nombre de résultats par page
            );
        } else {

            return $this->redirectToRoute("app_home");
        }
        return $this->render('home/index.html.twig', [
            "data" => $articlesPag,
            "categories" => $this->cr->findAll()
        ]);
    }
}
