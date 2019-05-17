<?php

namespace App\Controllers\Admin;

use App\Models\DadosUsuario;
use Core\View;

class Usuarios extends \Core\Controller
{
    protected function before()
    {
        if(!isset($_COOKIE['idAdmin@agitoai'])){
            echo '
            <script>
                alert("Você precisa estar logado como Admin pra acessar essa página");
                window.location.href="/admin"
            </script>';
        }
    }
    public function indexAction()
    {
        $cliente = DadosUsuario::getUsuarioById($this->route_params['usuario']);
        View::render('Admin/Pedidos/index.php', [
            'pedidos' => $pedidos
        ]);
    }
    public function showUserAction()
    {
        //echo '<pre>'.var_dump($this).'</pre>';
        $idUsuario = $this->route_params['usuario'];
        if(DadosUsuario::ifExistsById($idUsuario)){
            $dadosUsuario = DadosUsuario::getUsuarioById($idUsuario);
            View::render('Admin/Usuarios/showUser.php', [
                'dadosUsuario' => $dadosUsuario
            ]);
        }else{
            View::render('Admin/Usuarios/errorUserDontExists.php', [
                'idUsuario' => $idUsuario
            ]);
        }
        /*
        echo '<p>Route Parameters: <pre>'.
        htmlspecialchars(print_r($this->route_params, true)).'</pre></p>';
        echo '<p>Query string Params: <pre>'.
        htmlspecialchars(print_r($_GET, true)).'</pre></p>';
        */
        /*View::render('Admin/Pedidos/index.php', [
            'pedidos' => $pedidos
        ]);*/
    }
}