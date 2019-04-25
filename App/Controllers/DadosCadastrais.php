<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosUsuario;
use App\Models\Auth;
/**
 * Posts Controller
 * 
 */
class DadosCadastrais extends \Core\Controller
{
    public function before()
    {
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
            } else {
                echo '<script>alert("E-mail ou senha incorreto");window.location.href="/";</script>';
                die();
            }
        }
    }
    public function indexAction()
    {
        $dadosUsuario = DadosUsuario::getUsuario($_SESSION['email@agitoai']);
        if(isset($dadosUsuario['id'])) {
            $_SESSION['id@agitoai'] = $dadosUsuario['id'];    
        } 
        View::render('DadosCadastrais/index.php', [
            'dadosUsuario' => $dadosUsuario
        ]);
    }
}
