<?php
require_once 'model/Logic.php';


class Controller {
    public function __construct() {
        $this->Logic = new Logic();
    }

    public function __destruct() {
    }

    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'contact':
                    $this->collectContact();
                    break;
                case 'home':
                    $this->collectHome();
                    break;
                default:
                    $this->collectHome();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();

        }

    }

    public function collectHome() {
        include './view/home.php';
    }

    public function collectContact() {
        include './view/contact.php';
    }
}

