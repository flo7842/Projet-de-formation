<?php
session_start();

define('PROJECT_DIR', dirname(__DIR__));

require_once '../vendor/autoload.php';


$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(PROJECT_DIR .'/.env');

if(!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['csrf_token']) || !hash_equals($_POST['csrf_token'], $_SESSION['csrf_token'])){
        header("Location: /home");
        exit();
    }
}

spl_autoload_register(function($className){
    
    if(strpos($className, 'F\\Core\\') === 0){
        
        $className = str_replace('F\\Core', '../core/', $className);
        
    }else if(strpos($className, 'F\\') === 0){
        $className = str_replace('F\\', '../src/', $className);
    }
    
    $className = str_replace('\\','/', $className);
        
    $filepath = $className . '.php';
    
    if(file_exists($filepath)){
            require $filepath;
    }
    
});

$path =  isset($_GET['path']) ? $_GET['path'] : 'home';

if($path === 'home'){
    
    $container = new DI\Container();
    $container->call(['F\Controller\HomeController', 'listArticlesForHome']);

}else if($path === 'register'){
    
    $container = new DI\Container();
    $container->call(['F\Controller\UserController', 'register']);
    
}else if($path === 'login'){

    $container = new DI\Container();
    $container->call(['F\Controller\UserController', 'login']);

}else if($path === 'logout'){

    $container = new DI\Container();
    $container->call(['F\Controller\UserController', 'logout']);

}else if($path === 'edit/profile'){

    $container = new DI\Container();
    $container->call(['F\Controller\UserController', 'editProfile']);

}else if($path === 'admin/addarticles'){
    
    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'create']);

}else if($path === 'admin/delete'){

    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'deleteArticle']);    

}else if($path === 'admin/articles'){

    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'listArticles']);

}else if($path === 'admin/edit/articles'){
    
    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'editArticles']);

}else if($path === 'article'){

    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'showArticle']);

}else if($path === 'membership'){
    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'membership']);
    
}else if($path === 'contact'){

    $container = new DI\Container();
    $container->call(['F\Controller\MailController', 'sendMail']);

}else if($path === 'handiverts'){

    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'handiVerts']);  


}else if($path === 'mention') {

    $container = new DI\Container();
    $container->call(['F\Controller\MentionController', 'mention']);

}else if($path === 'presentation') {

    $container = new DI\Container();
    $container->call(['F\Controller\ArticlesController', 'presentation']);

}else{
    
    echo "Cette page n'existe pas";
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");   
    
}

?>