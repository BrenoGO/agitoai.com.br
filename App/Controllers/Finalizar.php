<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosUsuario;
use App\Models\Mailer;
use App\Models\PedidosControl;

class Finalizar extends \Core\Controller
{
    public function before()
    {
        if(isset($_POST['nomeCompleto'])){
            if(DadosUsuario::seUsuarioExiste($_SESSION['email@agitoai'])) {
                DadosUsuario::alterarUsuario($_SESSION['email@agitoai']);
            } else {
                echo '<script>alert("Para sua segurança, favor cadastrar primeiro um e-mail e senha");window.location.href="/";</script>';
                die();
            }
        }
        if(!isset($_SESSION['email@agitoai'])){
            echo '<script>window.location.href="/"</script>';
            die();
        }
    }
    public function indexAction()
    {
        if(isset($_POST['nomeCompleto'])){
            Mailer::sendMailToAgito($_SESSION['id@agitoai']);
            PedidosControl::setPed($_SESSION['id@agitoai']);
            View::render('Finalizar/index.php');  
            unset($_SESSION['email@agitoai']);
            unset($_SESSION['id@agitoai']);  
        } else {
            echo '<script>window.location.href="/";</script>';
            die();
        }

    }
    public function after()
    {
        
    }
}
