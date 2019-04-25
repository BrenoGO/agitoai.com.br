<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosUsuario;
/**
 * Posts Controller
 * 
 */
class Estilo extends \Core\Controller
{
    public function before() {
        if(isset($_POST['nomeCompleto'])){
            if(DadosUsuario::seUsuarioExiste($_SESSION['email@agitoai'])) {
                DadosUsuario::alterarUsuario($_SESSION['email@agitoai']);
            } else {
                echo '<script>alert("Para sua segurança, favor cadastrar primeiro um e-mail e senha");window.location.href="/";</script>';
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
