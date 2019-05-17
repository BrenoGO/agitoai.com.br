<?php

use App\Models\DadosUsuario;
use Core\Helper;

require '../App/Views/Admin/inithead.php';
echo '
<title>Adm Agito</title>
<script src="/javascript/Admin/Pedidos/Pedidos.js"></script>
';
require '../App/Views/Admin/endhead.php';
?>

<div id="header">
    <h1>Pedidos</h1>
</div>
<div id="content">
    <table>
        <thead>
            <td>Número do Pedido</td>
            <td>Cliente</td>
            <td>Data</td>
        </thead>
        <?php
        foreach($pedidos as $ped){
            $dataPed = Helper::DateToBrasil($ped['dataPed']);
            $cliente = DadosUsuario::getUsuarioById($ped['idUsuario']);
            echo '
                <tr>
                    <td class="tdPed"><a href="/Admin/Pedidos/'.$ped['idPed'].'">'.$ped['idPed'].'</a></td>
                    <td><a href="/Admin/Usuarios/'.$cliente['id'].'">'.$cliente['nomeCompleto'].'</a></td>
                    <td>'.$dataPed.'</td>
                </tr>
            ';
        }    
        ?>
    </table>
</div>

<?php
require '../App/Views/Admin/footer.php';
?>