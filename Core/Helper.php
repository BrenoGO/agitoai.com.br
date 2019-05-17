<?php

namespace Core;

class Helper{
    static function DateToBrasil($date){
        if(preg_match('/^([0-9]{4})\-([0-9]{2})\-([0-9]{2})$/D', $date, $matches)){
            return $matches[3].'/'.$matches[2].'/'.$matches[1];
        }elseif(preg_match('/^([0-9]{4})\/([0-9]{2})\/([0-9]{2})$/D', $date, $matches)){
            return $matches[3].'/'.$matches[2].'/'.$matches[1];
        }elseif(preg_match('/^([0-9]{2})\-([0-9]{2})\-([0-9]{4})$/D', $date, $matches)){
            return $matches[1].'/'.$matches[2].'/'.$matches[3];
        }elseif(preg_match('/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/D', $date, $matches)){
            return $date;
        }else{
            return 'Não é padrão de data confiável.';
        }
    }
}
