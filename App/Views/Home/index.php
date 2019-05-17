<?php

require '../App/Views/inithead.php';
echo '
<title>Agito Aí</title>
<script src="/javascript/Home/home.js"></script>
<link rel="stylesheet" type="text/css" href="/css/Home/home.css">
';
require '../App/Views/endhead.php';
echo '
<p>O serviço funciona da seguinte maneira: </p>
<p>- Você preenche o cadastro com seus dados;</p>
<p>- Nosso time de consultoras analisará o seu perfil;</p>
<p>- Com peças selecionadas, entraremos em contato com você;</p>
<p>E você não paga nada pelo serviço de entrega no Vale do Aço.</p>
<p>É só dar o clique para acessar nossos formulários e solicitar este novíssimo serviço! </p>
<p id="obrigatorio">*Obrigatório</p>
</div>
<div id="boxEmail">
<h2>Endereço de e-mail<span class="pointObrigatorio">*</span></h2>
<form id="homeForm" method="post" action="/Estilo/Index">
<input type="email" id="seuemail" name="seuemail" placeholder="Seu E-mail"/>
<div>
<h2 id="senhaH2">Senha<span class="pointObrigatorio">*</span></h2>
<input type="password" name="senha" id="senha"/>
</div>
<input type="hidden" name="isNew" id="isNew" value="false"/>
<div id="divConfirmaNovaSenha" style="display: none">
<h2> Confirmar nova senha<span class="pointObrigatorio">*</span></h2>
<input type="password" name="confirmaSenha" id="confirmaSenha"/>
</div>
</form>
</div>
<span class="button butProx" name="butProx1" id="butProx1">PRÓXIMA</span>
';
require '../App/Views/footer.php';