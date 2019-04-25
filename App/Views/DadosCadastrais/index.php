<?php

require '../App/Views/inithead.php';
echo '
<title>Agito Aí</title>
<script src="/javascript/DadosCadastrais/DadosCadastrais.js"></script>
';
require '../App/Views/endhead.php';

echo '
<h2>Dados Cadastrais</h2>
<p>Nesta parte pedimos a você que preencha todos os seus dados pessoais para realizarmos seu cadastro no banco de dados da Agito. Pode ficar tranquilo(a) pois todos os dados são confidenciais!</p>
</div>
<form method="post" action="/Estilo/Index" id="formDadosCadastrais"/>
<label for="nomeCompleto"><div class="tituloCurto">Nome Completo<span class="pointObrigatorio">*</span></div></label>
<input type="text" value="'.$dadosUsuario['nomeCompleto'].'" name="nomeCompleto" id="nomeCompleto" required/></br>
<div class="tituloCurto">Gênero<span class="pointObrigatorio">*</span></div>
<div class="divCheck">
    <label for="genFem">
        <input type="radio" name="genero" id="genFem" value="F"';
        if( ($dadosUsuario['genero'] == 'F') || (!isset($dadosUsuario['genero'])) ){echo ' checked';}
        echo '/>
        Feminino
    </label>
</div>
<div class="divCheck">
    <label for="genMasc">
        <input type="radio" name="genero" id="genMasc" value="M"';
        if($dadosUsuario['genero'] == 'M'){echo ' checked';}
        echo '/>
        Masculino
    </label>
</div>
<label for="dataNasc"><div class="tituloCurto">Data de Nascimento<span class="pointObrigatorio">*</span></div></label>
<input type="date" name="dataNasc" id="dataNasc" value="'.$dadosUsuario['dataNasc'].'"/></br>
<label for="cpf"><div class="tituloCurto">CPF<span class="pointObrigatorio">*</span></div></label>
<input type="text" name="cpf" id="cpf" value="'.$dadosUsuario['cpf'].'"/></br>
<label for="endereco"><div class="tituloCurto">Endereço Completo<span class="pointObrigatorio">*</span></div></label>
<input type="text" name="endereco" id="endereco" value="'.$dadosUsuario['endereco'].'"/></br>

<label for="cidade"><div class="tituloCurto">Cidade<span class="pointObrigatorio">*</span></div></label>
<select name="cidade" id="cidade">
<option';
if($dadosUsuario['cidade'] == 'Timóteo'){ echo ' selected = selected';}
echo '>Timóteo</option>
<option';
if($dadosUsuario['cidade'] == 'Cel. Fabriciano'){ echo ' selected = selected';}
echo '>Cel. Fabriciano</option>
<option';
if($dadosUsuario['cidade'] == 'Ipatinga'){ echo ' selected = selected';}
echo '>Ipatinga</option>
</select></br>
<label for="cep"><div class="tituloCurto">CEP</div></label>
<input type="text" name="cep" id="cep" value="'.$dadosUsuario['cep'].'"/></br>
<label for="telefone"><div class="tituloCurto">Telefone<span class="pointObrigatorio">*</span></div></label>
<input type="text" name="telefone" id="telefone" value="'.$dadosUsuario['telefone'].'"/></br> 
<label for="outrosContatos"><div class="tituloCurto">Outros Contatos</div></label>
<input type="text" name="outrosContatos" id="outrosContatos" value="'.$dadosUsuario['outrosContatos'].'"/></br> 
<label for="comoContactar"><div class="tituloCurto">Como prefere ser contactado(a)?</div></label>
<input type="text" name="comoContactar" id="comoContactar" value="'.$dadosUsuario['comoContactar'].'" placeholder="Telefone, WhatsApp ou outra forma"/></br> 
<label for="redesSociais">
<div class="tituloLongo">Favor preencher como está o seu nome no instagram e no facebook 
(ou o link direto para ele) para te encontrarmos e assim mandarmos peças mais a sua cara:
</label></div>
<input type="text" name="redeSocial" id="redeSocial" value="'.$dadosUsuario['redeSocial'].'"/>
</form>
</br></br>
<span class="button butAnt" name="butAnt2" id="butAnt2">ANTERIOR</span>
<span class="button butProx" name="butProx2" id="butProx2">PRÓXIMA</span>
';
include '../App/Views/footer.php';