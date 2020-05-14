<?php
namespace F\Controller;

use F\Core\Controller;
use F\Service\ImageUploader;
use F\Repository\ArticlesRepository;
use F\Controller\FormController;
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;


class ArticlesController extends Controller{

    public function create(ArticlesRepository $articleRepo, ImageUploader $imgRepo){

        if(!isset($_SESSION['user'])){
            header("Location: /paricisainte/public/login");
            exit();
        }

        if($_SESSION['user']['role'] !== 'ROLE_ADMIN'){

            header("Location: /index.php");
            exit();
        }

        if(isset(
            $_POST['article_title'], 
            $_POST['article_content'],
            $_FILES['article_img'],
            $_POST['img_alt'], 
            $_POST['article_author']))
            {
            
            
            $addArticles = $articleRepo->create($_POST['article_title'], $_POST['article_content'], $_FILES['article_img']['name'], $_POST['img_alt'], $_POST['article_author']);

            $imgRepo->upload();

        }

        $this->render('admin_add_articles_view.php', [
            'form'=> new FormController()]);
    }

    public function listArticles(ArticlesRepository $articleRepo){

        if(!isset($_SESSION['user'])){
            header("Location: /paricisainte/public/login");
            exit();
        }

        if($_SESSION['user']['role'] !== 'ROLE_ADMIN'){

            header("Location: /index.php");
            exit();
        }
        $articles = $articleRepo->findAllArticles();

        $this->render('admin_articles_view.php', [
            'articles' => $articles
        ]);
    }


    public function editArticles(ArticlesRepository $articleRepo, ImageUploader $imgRepo){

        if(!isset($_SESSION['user'])){
            header("Location: /paricisainte/public/login");
            exit();
        }

        if($_SESSION['user']['role'] !== 'ROLE_ADMIN'){

            header("Location: /index.php");
            exit();
        }

        $findArticles = $articleRepo->findById($_GET['id']);

        if(isset($_POST['article_title'], $_POST['article_content'], $_POST['img_alt'], $_POST['article_author'])){

            if(!empty($_FILES['article_img']['name'])){

                $imgRepo->upload();

            }

            $majArticle = $articleRepo->misAjour($_GET['id'], $_POST['article_title'], $_POST['article_content'], $_POST['img_alt'],
                !empty($_FILES['article_img']['name']) ? $_FILES['article_img']['name'] : $findArticles['img'],  $_POST['article_author']);

            $findArticles = $articleRepo->findById($_GET['id']);

        }


        $this->render('admin_edit_articles_view.php', [
            'findArticles' => $findArticles]);
    }

    function deleteArticle(ArticlesRepository $articleRepo){

        if(!isset($_SESSION['user'])){
            header("Location: /paricisainte/public/login");
            exit();
        }

        if($_SESSION['user']['role'] !== 'ROLE_ADMIN'){

            header("Location: /index.php");
            exit();

        }

        if(isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']){
            
            $deleteArticle = $articleRepo->deleteArticles($_GET['id']);

        }

        $this->render('admin_delete_articles.php');

    }

    function showArticle(ArticlesRepository $articleRepo){

        $article = $articleRepo->findAllArticles();
        
        $this->render('article_view.php', [
            'article' => $article
        ]);
    }

    function membership(){
        $this->render('membership_view.php');
    }

    function handiVerts(){
        $this->render('handi_verts_view.php');
    }

    function presentation(){
        $this->render('presentation_view.php');
    }


}