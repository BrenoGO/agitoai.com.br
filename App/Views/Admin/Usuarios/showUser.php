<?php

use Core\Helper;

require '../App/Views/Admin/inithead.php';
echo '
<title>Adm Agito</title>
<link rel="stylesheet" type="text/css" href="../../css/Admin/Usuarios/showUser.css">
';
require '../App/Views/Admin/endhead.php';
?>
<header></header>
<div id="backPeds"><a href="/Admin/Pedidos/Index">Voltar para Pedidos</a></div>
<div id="headerPedido">
    <h1 id="h1Header">Verificando dados de  <?php echo $dadosUsuario['nomeCompleto']?></h1>
</div>
<div id="content">
    
<?php
    echo '
    <h2>Dados Cadastrais</h2>
    <label for="nomeCompleto"><div class="tituloCurto">Nome Completo<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" value="'.$dadosUsuario['nomeCompleto'].'" name="nomeCompleto" id="nomeCompleto" required/></br>
    <label for="dataNasc"><div class="tituloCurto">Data de Nascimento<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="date" name="dataNasc" id="dataNasc" value="'.Helper::DateToBrasil($dadosUsuario['dataNasc']).'"/></br>
    <label for="cpf"><div class="tituloCurto">CPF<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" name="cpf" id="cpf" value="'.$dadosUsuario['cpf'].'"/></br>
    <label for="cep"><div class="tituloCurto">CEP</div></label>
    <input readonly type="text" name="cep" id="cep" value="'.$dadosUsuario['cep'].'"/></br>
    <label for="endereco"><div class="tituloCurto">Endereço<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" name="endereco" id="endereco" value="'.$dadosUsuario['endereco'].'"/></br>
    <label for="num"><div class="tituloCurto">Número/Complemento<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" name="num" id="num" value="'.$dadosUsuario['num'].'"/></br>
    <label for="bairro"><div class="tituloCurto">Bairro<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" id="bairro" name="bairro" value="'.$dadosUsuario['bairro'].'"/></br>
    <label for="cidade"><div class="tituloCurto">Cidade<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" id="cidade" name="cidade" value="'.$dadosUsuario['cidade'].'"/></br>
    <label for="telefone"><div class="tituloCurto">Telefone<span class="pointObrigatorio">*</span></div></label>
    <input readonly type="text" name="telefone" id="telefone" value="'.$dadosUsuario['telefone'].'"/></br> 
    <label for="outrosContatos"><div class="tituloCurto">Outros Contatos</div></label>
    <input readonly type="text" name="outrosContatos" id="outrosContatos" value="'.$dadosUsuario['outrosContatos'].'"/></br> 
    <label for="comoContactar"><div class="tituloCurto">Como prefere ser contactado(a)?</div></label>
    <input readonly type="text" name="comoContactar" id="comoContactar" value="'.$dadosUsuario['comoContactar'].'" placeholder="Telefone, WhatsApp ou outra forma"/></br> 
    <label for="redesSociais"><div class="tituloCurto">Instagram e/ou facebook </label></div>
    <input readonly type="text" name="redeSocial" id="redeSocial" value="'.$dadosUsuario['redeSocial'].'"/>
    ';
?>
</div><!--do conteudo-->

<?php
require '../App/Views/Admin/footer.php';
?>
