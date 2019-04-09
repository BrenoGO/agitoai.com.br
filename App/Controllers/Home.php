<?php

namespace App\Controllers;
use Core\View;

class Home extends \Core\Controller
{
    protected function before()
    {
        //echo '(Before) ';
    }
    public function indexAction()
    {
        // View::render('Home/index.php', [
        //     'name' => 'Breno',
        //     'colours' => ['red', 'blue', 'black']
        // ]);
        View::renderTemplate('Home/index.html', [
                'name' => 'Breno',
                'colours' => ['red', 'blue', 'black']
            ]);
    }
    protected function after()
    {
        //echo ' (After)';
    }
}