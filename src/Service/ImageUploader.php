<?php
namespace F\Service;

class ImageUploader {
    
    public function upload(){
        
        $fileExtension = pathinfo($_FILES['article_img']['name'], PATHINFO_EXTENSION);
            
        $fileExtension = strtolower($fileExtension);
        
        $extensionsAllowed = ['png', 'jpg', 'jpeg', 'gif'];
        
        if(in_array($fileExtension, $extensionsAllowed)){
            
            $dossier = PROJECT_DIR .'/public/img/';
            $image = $dossier . basename($_FILES['article_img']['name']);
    
            if(move_uploaded_file($_FILES['article_img']['tmp_name'], $image)){
        
                $message = 'Le fichier a bien été uploadé dans ';
            }else{
                $message = 'Suite à une erreur le fichier n\'a pas été uploadé';
            }
        }
    }
    
    
    
}