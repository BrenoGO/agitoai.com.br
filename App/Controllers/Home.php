<?php

namespace App\Controllers;
use Core\View;

class Home extends \Core\Controller
{
    protected function before()
    {
        unset($_SESSION['email@agitoai']);
        unset($_SESSION['id@agitoai']);
    }
    public function indexAction()
    {
        View::render('Home/index.php');
    }
    protected function after()
    {
        //echo ' (After)';
    }
}