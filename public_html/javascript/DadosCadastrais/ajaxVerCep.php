<?php

function CEP_curl($cep) {
	$cep=preg_replace('/[^0-9]/', '', (string) $cep);
	$url = "http://viacep.com.br/ws/".$cep."/json/";
            // CURL
    $ch = curl_init();
            // Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
    curl_setopt($ch, CURLOPT_URL, $url);
            // Execute
    $result = curl_exec($ch);
            // Closing
    curl_close($ch);
            
    $json=json_decode($result);
	//var_dump($json);
	if(!isset($json->erro)){
		$array['uf']=$json->uf;
		$array['cidade']=$json->localidade;
		$array['bairro']=$json->bairro;
		$array['logradouro']=$json->logradouro;
	}else{
		$array='Erro';
	}
	return $array;
}

$cep = $_POST['cep'];

$exp_CEP=CEP_curl($cep);

if(isset($exp_CEP['cidade'])){
	if(isset($exp_CEP['bairro'])){
		echo $exp_CEP['cidade'].','.$exp_CEP['uf'].','.$exp_CEP['bairro'].','.$exp_CEP['logradouro'];
	}else{
		echo $exp_CEP['cidade'].','.$exp_CEP['uf'];
	}	
}else{
	echo 'erro,';
}

