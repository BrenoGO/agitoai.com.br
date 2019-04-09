<?php

include '../App/Views/inithead.php';
echo '
<title>Dados</title>
<script src="/agitoai.com.br/App/Views/DadosCadastrais/DadosCadastrais.js"></script>
';
include '../App/Views/endhead.php';
echo '
<div id="titulo">
<h1>Experiência Agito</h1>
<h2>Dados Cadastrais</h2>
<p>Nesta parte pedimos a você que preencha todos os seus dados pessoais para realizarmos seu cadastro no banco de dados da Agito. Pode ficar tranquilo(a) pois todos os dados são confidenciais!</p>
</div>
Nome Completo
<input type="text" name="nomeCompleto" id="nomeCompleto"/></br>
Gênero</br>
<input type="radio" name="genero" id="genFem" value="Feminino">
<label for="genFem">Feminino</label></br>
<input type="radio" name="genero" id="genMasc" value="Masculino">
<label for="genMasc">Masculino</label></br>
Data de Nascimento:</br>
<input type="date" name="dataNasc" id="dataNasc"/></br>
<label for="cpf">CPF: </label>
<input type="text" name="cpf" id="cpf"/></br>
<label for="endereco">Endereço Completo:</label></br>
<input type="text" name="endereco" id="endereco"/></br>
<label for="CEP">CEP: </label>
<input type="text" name="CEP" id="CEP"/></br>
<label for="tel">Telefone:</label>
<input type="text" name="tel" id="tel"/></br>
<label for="altura">Qual a sua altura?</label>
<input type="text" name="altura" id="altura"/></br>
<label for="peso">Quanto você pesa?</label>
<input type="text" name="peso" id="peso"/></br>
Qual tamanho de Blusa / Camisa você costuma usar?</br>
<input type="checkbox" name="TamBlusas" id="TamBlusas34" value="34"/><label for="34"> 34 / PP</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas36" value="36"/><label for="36"> 36 / P</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas38" value="38"/><label for="38"> 38 / P</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas40" value="40"/><label for="40"> 40 / M</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas42" value="42"/><label for="42"> 42 / M</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas44" value="44"/><label for="44"> 44 / G</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas46" value="46"/><label for="46"> 46 / G</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas48" value="48"/><label for="48"> 48 / GG</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas50" value="50"/><label for="50"> 50 / GG</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas52" value="52"/><label for="52"> 52 / EGG</label></br>
<input type="checkbox" name="TamBlusas" id="TamBlusas54" value="54"/><label for="54"> 54 / EGG</label></br>
<label for="outroTamsBlusas">Outro: </label><input type="text" name="outroTamsBlusas" id="outroTamsBlusas"/></br>
Qual Tamanho de Calça/Saia/Short você costuma usar?</br>
<input type="checkbox" name="TamCalcas" id="TamCalcas34" value="34"/><label for="34"> 34 / PP</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas36" value="36"/><label for="36"> 36 / P</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas38" value="38"/><label for="38"> 38 / P</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas40" value="40"/><label for="40"> 40 / M</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas42" value="42"/><label for="42"> 42 / M</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas44" value="44"/><label for="44"> 44 / G</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas46" value="46"/><label for="46"> 46 / G</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas48" value="48"/><label for="48"> 48 / GG</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas50" value="50"/><label for="50"> 50 / GG</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas52" value="52"/><label for="52"> 52 / EGG</label></br>
<input type="checkbox" name="TamCalcas" id="TamCalcas54" value="54"/><label for="54"> 54 / EGG</label></br>
<label for="outroTamsCalcas">Outro: </label><input type="text" name="outroTamsCalcas" id="outroTamsCalcas"/></br> 
<label for=""></label>
<input type="text" name="" id=""/>
<label for=""></label>
<input type="text" name="" id=""/>
</br></br>
<span class="button butAnt" name="butAnt2" id="butAnt2">ANTERIOR</span>
<span class="button butProx" name="butProx2" id="butProx2">PRÓXIMA</span>
';
include '../App/Views/footer.php';