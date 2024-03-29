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
            $totPecas = $_POST['totTipoPecas'];
            for ($i=1; $i <= $totPecas ; $i++) { 
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
            $formaCorpo = isset($_POST['formaCorpo']) ? $_POST['formaCorpo'] : '';
            $modelagemEvitaOutra = isset($_POST['modelagemEvitaOutra']) ? $_POST['modelagemEvitaOutra'] : '';
            
            $notaClassico = isset($_POST['notaClassico']) ? $_POST['notaClassico'] : 0;
            $notaCriativo = isset($_POST['notaCriativo']) ? $_POST['notaCriativo'] : 0;
            $notaElegante = isset($_POST['notaElegante']) ? $_POST['notaElegante'] : 0;
            $notaNatural = isset($_POST['notaNatural']) ? $_POST['notaNatural'] : 0;
            $notaModerno = isset($_POST['notaModerno']) ? $_POST['notaModerno'] : 0;
            $notaRomantico = isset($_POST['notaRomantico']) ? $_POST['notaRomantico'] : 0;
            $notaSexy = isset($_POST['notaSexy']) ? $_POST['notaSexy'] : 0;

            $db = static::getDB();
            $qr = 'SELECT * FROM estilo WHERE idUsuario = ?';
            $value = [ $_SESSION['id@agitoai'] ];
            $stmt=$db->prepare($qr);
            $stmt->execute($value);        
            if($stmt->rowCount(PDO::FETCH_ASSOC) <=0){
                //não existe a linha
                $qr = 'INSERT INTO estilo (
                    idUsuario, genero, altura, numCalcado, tamBlusa, tamCalca, formaCorpo,
                    notaClassico, notaCriativo, notaElegante, notaNatural, notaModerno,
                    notaRomantico, notaSexy, estAgrada, estAgradaOutra, corEvita,
                    modelagemEvita, modelagemEvitaOutra, pecasReceber, pecasReceberOutra, ocasiao,
                    ocasiaoOutra, marcas, marcasOutra
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?, ?, ?,
                    ?, ?, ?
                )';
                $values = [
                    $_SESSION['id@agitoai'], $_POST['genero'], $altura, $_POST['numCalcado'], $tamBlusa, $tamCalca, $formaCorpo,
                    $notaClassico, $notaCriativo, $notaElegante, $notaNatural, $notaModerno, 
                    $notaRomantico, $notaSexy, $estAgrada, $_POST['estAgradaOutra'], $_POST['corEvita'],
                    $modelagemEvita, $modelagemEvitaOutra, $pecasReceber, $_POST['pecasReceberOutra'], $ocasiao,
                    $_POST['ocasiaoOutra'], $marcas, $_POST['marcasOutra']
                ];
                $stmt=$db->prepare($qr);
                $stmt->execute($values);
            } else{
                //existe a linha
                $qr = 'UPDATE estilo SET 
                genero=?, altura=?, numCalcado=?, tamBlusa=?, tamCalca=?, formaCorpo=?,
                notaClassico=?, notaCriativo=?, notaElegante=?, notaNatural=?, notaModerno=?,
                notaRomantico=?, notaSexy=?, estAgrada=?, estAgradaOutra=?, corEvita=?,
                modelagemEvita=?, modelagemEvitaOutra=?, pecasReceber=?, pecasReceberOutra=?, ocasiao=?,
                ocasiaoOutra=?, marcas=?, marcasOutra=?
                WHERE idUsuario = ?';
                $values = [
                    $_POST['genero'], $altura, $_POST['numCalcado'], $tamBlusa, $tamCalca, $formaCorpo,
                    $notaClassico, $notaCriativo, $notaElegante, $notaNatural, $notaModerno, 
                    $notaRomantico, $notaSexy, $estAgrada, $_POST['estAgradaOutra'], $_POST['corEvita'],
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