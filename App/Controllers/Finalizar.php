<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosEstilo;
use App\Models\Mailer;

class Finalizar extends \Core\Controller
{
    public function before()
    {

    }
    public function indexAction()
    {
        if(isset($_POST['altura'])){
            DadosEstilo::toTableEstilo();
            Mailer::sendMailToAgito($_SESSION['id@agitoai']);
            
            //YCEc2DioZ4uF
        }
        View::render('Finalizar/index.php');
    }
}
