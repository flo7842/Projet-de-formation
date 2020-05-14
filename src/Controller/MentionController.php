<?php
namespace F\Controller;

use F\Core\Controller;

class MentionController extends Controller{

    function mention(){

        $this->render('mentions_legales_view.php');
    }

}