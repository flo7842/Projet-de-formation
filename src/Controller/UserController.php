<?php

namespace F\Controller;

use F\Core\Controller;
use F\Repository\UserRepository;
use F\Controller\FormController;

Class UserController extends Controller{

    function register(UserRepository $userRepo){

        if(isset($_SESSION['user'])){
            header("Location: index.php");
            exit();
        }

        $errors = [];



        if(isset($_POST['formValid'])) {


            if (isset($_POST['lastName'], $_POST['firstName'], $_POST['pseudo'], $_POST['mail'], $_POST['mail-confirm'], $_POST['password'])) {

                $pseudo = $_POST['pseudo'];
                $mail = $_POST['mail'];
                $mailConfirm = $_POST['mail-confirm'];
                $mdp = $_POST['password'];
                $mdp2 = $_POST['password-confirm'];


                if(!empty($pseudo)) {

                    if ($mail === $mailConfirm) {
                        if($mdp === $mdp2) {

                            $users = $userRepo->register($_POST['lastName'], $_POST['firstName'], $_POST['pseudo'], $_POST['mail'], $_POST['mail-confirm'], $_POST['password'], $_POST['password-confirm']);

                            header('Location: login');
                            exit();
                        }else{
                            $errors[] = 'Les mots de passes ne sont pas identiques !';
                        }

                    } else {
                        $errors[] = 'Les deux mails ne correspondent pas !';
                    }

                }else{
                    $errors[] = 'Le Pseudo est obligatoire';
                }
                   
                

            }

                
        }

        $this->render('register_view.php', [
            'form'=> new FormController(),
            'errors' => $errors
        ]);

    }

    function login(UserRepository $userRepo){
        $errors = [];
        if(isset($_POST['formValid'])){

            $mail = $_POST['mail'];
            $password = $_POST['password'];

            if(!empty($mail) && !empty($password)) {
                $userLog = $userRepo->login($_POST['mail'], $_POST['password']);

                if ($userLog) {
                    if (password_verify($_POST['password'], $userLog['user_password'])) {

                        $_SESSION['user'] = $userLog;
                        header("Location: index.php");
                        exit();
                    }else{
                        $errors[] = 'Adresse email ou mot de passe incorrect !';
                    }
                }else{
                    $errors[] = 'Adresse email ou mot de passe incorrect !';
                }

            }else{
                $errors[] = 'Veuillez remplir tous les champs !';
            }

        }


        if(isset($_SESSION['users'])){
            header("Location: index.php");
            exit();
        }

        $this->render('login_view.php',[
            'form'=> new FormController(),
            'errors' => $errors
        ]);

    }

    function logout(){
        
        
        unset($_SESSION['user']);
        header("Location: index.php ");
        exit();
    }
    

    function editProfile(UserRepository $userRepo){

            if(!isset($_SESSION['user'])){
                header("Location: /paricisainte/public/login");
                exit();
            }



        if(isset($_POST['lastName'], $_POST['firstName'], $_POST['pseudo'], $_POST['mail'], $_POST['password'])){

            $updateProfile = $userRepo->updateUserProfile($_SESSION['user']['id'], $_POST['lastName'], $_POST['firstName'], $_POST['pseudo'], $_POST['mail'], $_POST['password']);
            
        }
        
        $recupUser = $userRepo->findById($_SESSION['user']['id']);

        $this->render('edit_profile_view.php', [
            'recupUser' => $recupUser,
            'form'=> new FormController()
        ]);

    }

}