<?php
require_once 'view/View.php';
require_once 'lib/SessionManager.php';

class DefaultController
{

    private function setSessionVarsToView($view) {
        $session = new SessionManager();
        $session->sessionLoad();
        $view->isLogdin = $session->getIsLogdin();
        $view->userName = $session->username;
    }

    function show() {
        $contentView = new View("view/landingPage.php");
        $this->setSessionVarsToView($contentView);
        $contentView->display();
    }

}