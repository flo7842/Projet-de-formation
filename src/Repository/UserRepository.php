<?php
namespace F\Repository;

class UserRepository{

    private $db;

    public function __construct(\F\Core\Database $db){

        $this->db = $db;

    }

    public function register($lastName, $firstName, $pseudo, $mail, $mailConfirm, $password, $passwordConfirm){





        if (strlen($password) > 6 && strlen($pseudo) > 4) {

            $registerUsers = $this->db->pdo->prepare('INSERT INTO users(last_name, first_name, pseudo, mail, user_password) VALUES(:boxLastName, :boxFirstName, :boxPseudo, :boxMail, :boxPassword)');

            $registerUsers->execute([
                ':boxLastName' => $lastName,
                ':boxFirstName' => $firstName,
                ':boxPseudo' => $pseudo,
                ':boxMail' => $mail,
                ':boxPassword' => password_hash($password, PASSWORD_DEFAULT)

            ]);
        }
    }

    public function login($mail, $password){



        $loginUsers = $this->db->pdo->prepare('SELECT * FROM users WHERE mail = :boxMail');

        $loginUsers->execute([
            ':boxMail' => $mail
        ]);

        $recupUser = $loginUsers->fetch();

        return $recupUser;


    }

    public function findById($id){

        $selectUser = $this->db->pdo->prepare('SELECT last_name, first_name, pseudo, mail, user_password FROM users WHERE id= :boxId');

        $selectUser->execute([ ':boxId' => $id ]);

        $recupUser = $selectUser->fetch();

        return $recupUser;
    }

    public function updateUserProfile($id, $lastName, $firstName, $pseudo, $mail, $password){

        $updateProfile = $this->db->pdo->prepare('UPDATE users SET last_name=:boxUserLastName, first_name=:boxUserFirstName, pseudo=:boxUserPseudo, mail=:boxUserMail, user_password=:boxUserPassword WHERE id =:boxUserId');

        $updateProfile->execute([
            ':boxUserId'        => $id,
            ':boxUserLastName'  => $lastName,
            ':boxUserFirstName' => $firstName,
            ':boxUserPseudo'    => $pseudo,
            ':boxUserMail'      => $mail,
            ':boxUserPassword'  => password_hash($password, PASSWORD_DEFAULT)
        ]);

    }

}