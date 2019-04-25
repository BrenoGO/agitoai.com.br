<?php

namespace App\Models;

use PDO;

class DadosUsuario extends \Core\Model
{
    public static function getAll()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT * FROM usuarios ORDER BY id');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getUsuario($email)
    {
        try{
            $db = static::getDB();
            $qr = 'SELECT * FROM usuarios WHERE email = ?';
            $value = [$email];
            $stmt=$db->prepare($qr);
            $stmt->execute($value);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getEstiloUsuario($email)
    {
        try {
            $id = static::getIdFromEmail($email);
            $db = static::getDB();
            $qr = 'SELECT * FROM estilo WHERE idUsuario = ?';
            $value = [$id];
            $stmt=$db->prepare($qr);
            $stmt->execute($value);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getIdFromEmail($email)
    {
        $db = static::getDB();
        $qr = 'SELECT id from usuarios where email = ?';
        $value = [$email];
        $stmt=$db->prepare($qr);
        $stmt->execute($value);
        $ln=$stmt->fetch(PDO::FETCH_ASSOC);
        return $ln['id'];
    }
    public static function seUsuarioExiste($email)
    {
        try {
            $db = static::getDB();
            $qr = 'SELECT * FROM usuarios WHERE email = ?';
            $value = [$email];
            $stmt=$db->prepare($qr);
            $stmt->execute($value);
            if($stmt->rowCount()<=0){
                return false;
            }else{
                return true;
            }	
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function alterarUsuario($email){
        try {
            $db = static::getDB();
            $qr = 'UPDATE usuarios SET 
                nomeCompleto = ?, cpf = ?, dataNasc = ?, endereco = ?, 
                cidade = ?, cep = ?, telefone = ?, genero = ?, 
                outrosContatos = ?, comoContactar=?, redeSocial = ?, dataCadast = ? 
                WHERE email = ?';
            $values = [
                $_POST['nomeCompleto'], $_POST['cpf'], $_POST['dataNasc'], $_POST['endereco'],
                $_POST['cidade'], $_POST['cep'], $_POST['telefone'], $_POST['genero'], 
                $_POST['outrosContatos'], $_POST['comoContactar'], $_POST['redeSocial'], date('Y-m-d'),
                $_SESSION['email@agitoai']
            ];
            $stmt=$db->prepare($qr);
            $stmt->execute($values);
            $qr = 'select id from usuarios where email=? and cpf=?';
            $values = [$_SESSION['email@agitoai'], $_POST['cpf']];
            $stmt=$db->prepare($qr);
            $stmt->execute($values);
            $ln = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id@agitoai'] = $ln['id'];
            $_SESSION['genero@agitoai'] = $_POST['genero'];
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
