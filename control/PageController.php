<?php
require_once 'view/View.php';
require_once 'lib/Validator.php';

class PageController
{

    function about() {
        $view = new View("view/about.php");
        $view->display();
    }

    function landing(){
        $view = new View("view/landingPage.php");
        $view->display();
    }

    function contact(){
        $view = new View("view/contact.php");
        $view->display();
    }
}