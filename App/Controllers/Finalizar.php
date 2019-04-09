<?php

namespace App\Controllers;

use Core\View; 

/**
 * Posts Controller
 * 
 */
class Finalizar extends \Core\Controller
{
    /**
     * Show in the index page
     * @return void
     */
    public function indexAction()
    {
        View::render('Finalizar/index.php');
    }
}
