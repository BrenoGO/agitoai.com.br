<?php

namespace App\Controllers\Admin;
use App\Models\Auth;
use App\Models\DadosUsuario;

use Core\View; 

class Home extends \Core\Controller
{
    protected function before()
    {
        if(isset($_COOKIE['idAdmin@agitoai'])) {
            //echo '<script>console.log("cookie setado!")</script>';
            echo '<script>window.location.href="/admin/Pedidos/Index"</script>';
        }
    }
    public function indexAction()
    {
        View::render('Admin/Home/index.php');
    }
    public function authAction()
    {
        if(Auth::authUser()){
            $id = DadosUsuario::getIdFromEmail($_POST['seuemail']);
            setcookie('idAdmin@agitoai',$id,time()+(5*12*30*24*3600),'/');
            echo '<script>window.location.href="/admin/Pedidos/Index"</script>';
        }else{
            //echo '<script>console.log("aqui no else")</script>';
            echo '<script>alert("Erro ao acessar");window.location.href="/admin";</script>';
            die();
        }
    }
}