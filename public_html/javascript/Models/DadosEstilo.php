<?php

namespace App\Models;

use PDO;

class DadosEstilo extends \Core\Model
{
    public static function toTableEstilo(){
        try{
            $altura = str_replace(',', '.', $_POST['altura']);
            $tamBlusa = '';
            for($i = 34; $i <= 54; $i += 2) {
                if(isset($_POST['TamBlusas'.$i])){
                    $tamBlusa .= $i.'/';
                }
            }
            $tamCalca = '';
            for($i = 34; $i <= 54; $i += 2) {
                if(isset($_POST['TamCalcas'.$i])){
                    $tamCalca .= $i.'/';
                }
            }
            $estAgrada = '';
            for ($i=1; $i <= 8 ; $i++) { 
                if(isset($_POST['Est'.$i])){
                    $estAgrada .= $_POST['Est'.$i].'/';
                }
            }
            $modelagemEvita = '';
            for ($i=1; $i <= 9 ; $i++) { 
                if(isset($_POST['evitaMod'.$i])){
                    $modelagemEvita .= $_POST['evitaMod'.$i].'/';
                }
            }
            $pecasReceber = '';
            for ($i=1; $i <= 10 ; $i++) { 
                if(isset($_POST['tipoPeca'.$i])){
                    $pecasReceber .= $_POST['tipoPeca'.$i].'/';
                }
            }
            $ocasiao = '';
            for ($i=1; $i <= 5 ; $i++) { 
                if(isset($_POST['ocasiao'.$i])){
                    $ocasiao .= $_POST['ocasiao'.$i].'/';
                }
            }
            $totMarcas = $_POST['totMarcas'];
            $marcas = '';
            for ($i=1; $i <= $totMarcas ; $i++) { 
                if(isset($_POST['marca'.$i])){
                    $marcas .= $_POST['marca'.$i].'/';
                }
            }
            $modelagemEvitaOutra = isset($_POST['modelagemEvitaOutra']) ? $_POST['modelagemEvitaOutra'] : '';
            $db = static::getDB();
            $qr = 'SELECT * FROM estilo WHERE idUsuario = ?';
            $value = [ $_SESSION['id@agitoai'] ];
            $stmt=$db->prepare($qr);
            $stmt->execute($value);        
            if($stmt->rowCount(PDO::FETCH_ASSOC) <=0){
                //não existe a linha
                $qr = 'INSERT INTO estilo (
                    idUsuario, altura, tamBlusa, tamCalca, formaCorpo,
                    notaClassico, notaCriativo, notaElegante, notaNatural, notaModerno,
                    notaRomantico, notaSexy, estAgrada, estAgradaOutra, corEvita,
                    modelagemEvita, modelagemEvitaOutra, pecasReceber, pecasReceberOutra, ocasiao,
                    ocasiaoOutra, marcas, marcasOutra
                ) VALUES (
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?
                )';
                $values = [
                    $_SESSION['id@agitoai'], $_POST['altura'], $tamBlusa, $tamCalca, $_POST['formaCorpo'],
                    $_POST['notaClassico'], $_POST['notaCriativo'], $_POST['notaElegante'], $_POST['notaNatural'], $_POST['notaModerno'], 
                    $_POST['notaRomantico'], $_POST['notaSexy'], $estAgrada, $_POST['estAgradaOutra'], $_POST['corEvita'],
                    $modelagemEvita, $modelagemEvitaOutra, $pecasReceber, $_POST['pecasReceberOutra'], $ocasiao,
                    $_POST['ocasiaoOutra'], $marcas, $_POST['marcasOutra']
                ];
                $stmt=$db->prepare($qr);
                $stmt->execute($values);
            } else{
                //existe a linha
                $qr = 'UPDATE estilo SET 
                altura=?, tamBlusa=?, tamCalca=?, formaCorpo=?,
                notaClassico=?, notaCriativo=?, notaElegante=?, notaNatural=?, notaModerno=?,
                notaRomantico=?, notaSexy=?, estAgrada=?, estAgradaOutra=?, corEvita=?,
                modelagemEvita=?, modelagemEvitaOutra=?, pecasReceber=?, pecasReceberOutra=?, ocasiao=?,
                ocasiaoOutra=?, marcas=?, marcasOutra=?
                WHERE idUsuario = ?';
                $values = [
                    $altura, $tamBlusa, $tamCalca, $_POST['formaCorpo'],
                    $_POST['notaClassico'], $_POST['notaCriativo'], $_POST['notaElegante'], $_POST['notaNatural'], $_POST['notaModerno'], 
                    $_POST['notaRomantico'], $_POST['notaSexy'], $estAgrada, $_POST['estAgradaOutra'], $_POST['corEvita'],
                    $modelagemEvita, $modelagemEvitaOutra, $pecasReceber, $_POST['pecasReceberOutra'], $ocasiao,
                    $_POST['ocasiaoOutra'], $marcas, $_POST['marcasOutra'],
                    $_SESSION['id@agitoai']
                ];
                $stmt=$db->prepare($qr);
                $stmt->execute($values);
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}