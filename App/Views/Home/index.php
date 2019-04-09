<?php

include '../App/Views/inithead.php';
echo '
<title>Home</title>
<script src="/agitoai.com.br/App/Views/Home/home.js"></script>
';
include '../App/Views/endhead.php';
echo '
<div id="titulo">
<h1>Experiência Agito</h1>
<p>O serviço funciona da seguinte maneira: </p>
<p>- Você preenche o cadastro com seus dados;</p>
<p>- Nosso time de consultoras analisará o seu perfil;</p>
<p>- Com peças selecionadas, entraremos em contato com você;</p>
<p>E você não paga nada pelo serviço de entrega no Vale do Aço.</p>
<p>É só dar o clique para acessar nossos formulários e solicitar este novíssimo serviço! </p>
<p id="obrigatorio">*Obrigatório</p>
</div>
<div id="boxEmail">
<h2>Endereço de E-mail<span class="pointObrigatorio">*</span></h2>
<input type="email" id="seuemail" name="seuemail" placeholder="Seu E-mail"/>
<p id="txtPergObri">Esta pergunta é obrigatória</p>
</div>
<span class="button butProx" name="butProx1" id="butProx1">PRÓXIMA</span>
';
include '../App/Views/footer.php';