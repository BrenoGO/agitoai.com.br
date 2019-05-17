<?php

namespace App\Models;
use PDO;

class PedidosControl extends \Core\Model
{
    protected static function myJsonEstilo($id){
        $qr='SELECT * FROM estilo WHERE idUsuario = ?';
        $values = [$id];
        $lnEstilo = static::fetchAssoc($qr, $values);
        return json_encode($lnEstilo);
    }
    public static function setPed($idUsuario)
    {
        try{
            $jsonEstilo = static::myJsonEstilo($idUsuario);
            $qr = 'insert into Pedidos (
                idPed,
                idUsuario, estilo, dataPed
            ) values (
                default,
                ?, ?, ?
            )';
            $values = [
                $idUsuario, $jsonEstilo, date('Y-m-d')
            ];
            static::executeSQL($qr, $values);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function getPed($idPed)
    {
        $qr = 'SELECT * FROM Pedidos where idPed = ?';
        $values = [$idPed];
        return static::fetchAssoc($qr, $values);
    }
    public static function getAllPedidos(){
        $qr = 'SELECT * FROM Pedidos';
        $values = [];
        return static::fetchToArray($qr, $values);
    }
    public static function ifExists($ped){
        $qr = 'SELECT * FROM Pedidos where idPed = ?';
        $values = [$ped];
        if(static::ifQrExists($qr, $values)){
            return true;
        }
        return false;
    }
}
