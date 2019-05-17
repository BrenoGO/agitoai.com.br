<?php

namespace Core;
use PDO;
use App\Config;

abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if($db === null) {
            try{
                $db = new PDO('mysql:host='.Config::DB_HOST.';dbname='.Config::DB_NAME.';charset=utf8', Config::DB_USER, Config::DB_PASS);
                //Throw an Exception if an error occurs
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
    protected static function executeSQL($qr, $values){
        $db = static::getDB();
        $stmt = $db->prepare($qr);
        if(!$stmt->execute($values)){
            $error=$stmt->errorInfo();
            return('Erro no MySQL: '.$error[2]);
        }else{
            return($stmt);
        }
        /*Pode usar na forma:
        $stmt=static::executeSQL($qr,$values);
        if(is_string($stmt)){//deu erro no mysql..
            echo $stmt;
        }else{
            echo 'Executado com sucesso..';
        }
        */
    }
    protected static function ifQrExists($qr,$values){
        $stmt = static::executeSQL($qr,$values);
        if(is_string($stmt)){//deu erro no mysql..
            return $stmt;
        }else{
            if($stmt->rowCount()<=0){
                return false;
            }else{
                return true;
            }	
        }
    }
    protected static function fetchAssoc($qr,$values){
        $stmt = static::executeSQL($qr, $values);
        if(!is_string($stmt)){
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return($row);
        }else{
            return($stmt);
        }	
    }
    protected static function fetchToArray($qr,$values){
        $stmt= static::executeSQL($qr, $values);
        if(!is_string($stmt)){
            $array=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                $array[]=$row;
            }
            return($array);
        }else{
            return($stmt);
        }
    }
}