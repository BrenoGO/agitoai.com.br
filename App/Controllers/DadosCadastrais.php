<?php

namespace App\Controllers;

use Core\View; 
use App\Models\DadosUsuario;
use App\Models\DadosEstilo;
/**
 * Posts Controller
 * 
 */
class DadosCadastrais extends \Core\Controller
{
    public function before()
    {
        if(isset($_POST['altura'])){
            DadosEstilo::toTableEstilo();
        }
    }
    public function indexAction()
    {
        $dadosUsuario = DadosUsuario::getUsuario($_SESSION['email@agitoai']); 
        View::render('DadosCadastrais/index.php', [
            'dadosUsuario' => $dadosUsuario
        ]);
    }
}
