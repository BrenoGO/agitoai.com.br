<?php

namespace App\Models;

use Core\Model;

class Auth extends Model
{
    public static function authUser()
    {
        $mail = $_POST['seuemail'];
        $pass = MD5($_POST['senha']);
        $db = static::getDB();
        $qr = 'select * from usuarios where email=? and senha=?';
        $values = [$mail, $pass];
        $stmt=$db->prepare($qr);
        $stmt->execute($values);
        if($stmt->rowCount($stmt) <= 0){
            return false;
        } else {
            return true;
        }
    }
    public static function cadastUser() {
        $mail = $_POST['seuemail'];
        $pass = MD5($_POST['senha']);
        $db = static::getDB();
        $qr = 'insert into usuarios (id, email, senha) values (default, ?, ?)';
        $values = [$mail, $pass];
        $stmt=$db->prepare($qr);
        $stmt->execute($values);
    }
}