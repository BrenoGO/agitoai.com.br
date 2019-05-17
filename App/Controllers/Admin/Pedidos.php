<?php

namespace App\Controllers\Admin;

use App\Models\PedidosControl;
use App\Models\DadosUsuario;
use Core\View;

class Pedidos extends \Core\Controller
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
        $pedidos = PedidosControl::getAllPedidos();
        View::render('Admin/Pedidos/index.php', [
            'pedidos' => $pedidos
        ]);
    }
    public function showPedAction()
    {
        //echo '<pre>'.var_dump($this).'</pre>';
        $idPed = $this->route_params['ped'];
        if(PedidosControl::ifExists($idPed)){
            $pedido = PedidosControl::getPed($idPed);
            $cliente = DadosUsuario::getUsuarioById($pedido['idUsuario']);
            View::render('Admin/Pedidos/showPed.php', [
                'pedido' => $pedido,
                'cliente' => $cliente
            ]);
        }else{
            View::render('Admin/Pedidos/errorPedDontExists.php', [
                'pedido' => $idPed
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