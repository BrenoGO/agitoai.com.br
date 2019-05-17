<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosUsuario;
use App\Models\Auth;
/**
 * Posts Controller
 * 
 */
class Estilo extends \Core\Controller
{
    public function before() {
        if(!isset($_SESSION['email@agitoai'])) {
            if(!isset($_POST['seuemail'])){
                echo '<script>alert("Favor fazer login..");window.location.href="/";</script>';
                die();
            }
            if($_POST['isNew'] == 'true') {
                Auth::cadastUser();
            }
            if(Auth::authUser()){
                $_SESSION['email@agitoai'] = $_POST['seuemail'];
                $_SESSION['id@agitoai'] = DadosUsuario::getIdFromEmail($_SESSION['email@agitoai']);
            } else {
                echo '<script>alert("E-mail ou senha incorreto");window.location.href="/";</script>';
                die();
            }
        }
    }
    public function indexAction()
    {
        $dadosEstilo = DadosUsuario::getEstiloUsuario($_SESSION['email@agitoai']);
        View::render('Estilo/index.php', [
            "dadosEstilo" => $dadosEstilo,
        ]);
    }
    
}
