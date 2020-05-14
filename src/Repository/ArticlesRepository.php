<?php
namespace F\Repository;


class ArticlesRepository{

    private $db;

    public function __construct(\F\Core\Database $db){

        $this->db = $db;

    }

    public function create($title, $content, $img, $alt, $author){



        $addArticles = $this->db->pdo->prepare('INSERT INTO articles(title, content, publish_date, img, alt, author) VALUES (:boxTitle, :boxContent, NOW(), :boxImg, :boxAlt, :boxAuthor)');



        $addArticles->execute([
                                ':boxTitle'    => $title,
                                ':boxContent'  => $content,
                                ':boxImg'      => $img,
                                ':boxAlt'      => $alt,
                                ':boxAuthor'   => $author
                              ]);

    }

    public function findArticlesForHome(){
        $getArticles = $this->db->pdo->prepare('SELECT * FROM articles ORDER BY publish_date DESC LIMIT 4');

        $getArticles->execute();

        $homeArticles = $getArticles->fetchAll();

        return $homeArticles;
    }

    public function findAllArticles(){

        $getArticles = $this->db->pdo->prepare('SELECT id, title, content, publish_date, img, alt, author FROM articles');

        

        $getArticles->execute();

        $articles = $getArticles->fetchAll();

        return $articles;

    }

    public function findById($id){

        $selectArticle = $this->db->pdo->prepare('SELECT title, content, publish_date, img, alt, author FROM articles WHERE id= :id');
        
        $selectArticle->execute([ ':id' => $id ]);

        $recupArticle = $selectArticle->fetch( \PDO::FETCH_ASSOC );

        return $recupArticle;


    }

    public function misAjour($id, $title, $content, $img, $alt, $author){
        

        
        $maj = $this->db->pdo->prepare('UPDATE articles SET title=:boxTitle, content=:boxContent, publish_date = NOW(), img=:boxImg, alt=:boxAlt, author=:boxAuthor WHERE id=:boxId');
        $maj->execute([
                        ':boxTitle'   => $title,
                        ':boxContent' => $content,
                        ':boxImg'     => $img,
                        ':boxAlt'     => $alt,
                        ':boxAuthor'  => $author,
                        ':boxId'      => $id
                     ]);

    }

    public function deleteArticles($id){

        $deleteArticle = $this->db->pdo->prepare("DELETE FROM articles WHERE id = :boxId");
        $deleteArticle->execute([ ':boxId' => $id ]);


    }

}