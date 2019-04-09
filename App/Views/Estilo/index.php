<?php

include '../App/Views/inithead.php';
echo '
<title>Dados</title>
<script src="/agitoai.com.br/App/Views/Estilo/Estilo.js"></script>
';
include '../App/Views/endhead.php';
echo '
<div id="titulo">
<h1>Experiência Agito</h1>
<h2>Estilo!</h2>
<p>Nesta parte iremos aprender um pouco sobre o seu estilo e seus gostos pessoais, para que assim possamos acertar mais nas escolhas que enviaremos para você!</p>
</div>
Com qual forma de corpo você mais se identifica?
<img class="imgInForm" src="/agitoai.com.br/public/imgs/formatoCorpo.jpg"/>

<input type="radio" name="tipoCorpo" id="corpoAmpulheta" value="corpoAmpulheta"/>
<label for="corpoAmpulheta">
Ampulheta (ombros e quadril do mesmo tamanho e cintura mais fina)
</label></br>

<input type="radio" name="tipoCorpo" id="corpoRetangulo" value=id="corpoRetangulo"/>
<label for="corpoRetangulo">
Retângulo (ombros, quadril e cintura praticamente da mesma medida)
</label></br>

<input type="radio" name="tipoCorpo" id="corpoTriangInvert" value=id="corpoTriangInvert"/>
<label for="corpoTriangInvert">
Triângulo Invertido (ombros mais largos que a cintura e o quadril)
</label></br>

<input type="radio" name="tipoCorpo" id="corpoOval" value=id="corpoOval"/>
<label for="corpoOval">
Oval (região da cintura é maior ou mais alinhada com o quadril)
</label></br>

<input type="radio" name="tipoCorpo" id="corpoTriangPera" value="corpoTriangPera"/>
<label for="corpoTriangPera">
Triângulo ou Pera (quadris mais largos que a cintura e o ombro)
</label></br>

Clássico / Tradicional
<img class="imgInForm" src="/agitoai.com.br/public/imgs/LookClassicoTradicional.png"/>
Dê uma nota de 1 a 10 para esse estilo baseado no quanto você gosta dele (Clássico / Tradicional): *
<div class="scaleInput">
<label for=""><div class="chooseNumber">
    <div>1</div>
    <div><input type="radio" name="" id=""/></div>
</div></label>
<label for=""><div class="chooseNumber">
    <div>2</div>
    <div><input type="radio" name="" id=""/></div>
</div></label>
<div>
<label for="outroTipoCorpo">
Outro:
</label>
<input type="text" name="outroTipoCorpo" id="outroTipoCorpo"/>

</br></br>
<span class="button butAnt" name="butAnt3" id="butAnt3">ANTERIOR</span>
<span class="button butProx" name="butProx3" id="butProx3">PRÓXIMA</span>
';
include '../App/Views/footer.php';