<?php

require_once '../../../vendor/autoload.php';

use App\Models\DadosUsuario;

$email = $_POST['email'];
$row = DadosUsuario::getUsuario($email);
if(!$row){
    echo false;
} else {
    echo true;
}