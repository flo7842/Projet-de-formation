<?php
namespace F\Controller;

use F\Core\Controller;
use F\Repository\ArticlesRepository;

class HomeController extends Controller{

    function showArticles(ArticlesRepository $articlesRepo){

        $articles = $articlesRepo->findAllArticles();
        
        $this->render('home_view.php', [
            'articles' => $articles
        ]);

       
    }

    public function listArticlesForHome(ArticlesRepository $articlesRepo){

        $articlesList = $articlesRepo->findArticlesForHome();

        $this->render('home_view.php', [
            'articlesList' => $articlesList
        ]);

    }

}
