<?php


//recebe $cliente, $pedido (que estava em pedido..)
$dadosEstilo = json_decode($pedido['estilo'], true);
$boolFem = $dadosEstilo['genero'] == 'F' ? true : false;

require '../App/Views/Admin/inithead.php';
echo '
<title>Adm Agito</title>
<link rel="stylesheet" type="text/css" href="../../css/Admin/Pedidos/showPed.css">
';
require '../App/Views/Admin/endhead.php';
?>
<header></header>
<div id="backPeds"><a href="/Admin/Pedidos/Index">Voltar para Pedidos</a></div>
<div id="headerPedido">
    <h1 id="h1Header">Verificando o pedido de <?php echo '<a href="/Admin/Usuarios/'.$cliente['id'].'">'.$cliente['nomeCompleto'].'</a>'?></h1>
</div>
<div id="content">
    <div id="quadro_central">
<?php
    echo '
    <div id="genero">
    <div class="tituloCurto">Gênero<span class="pointObrigatorio">*</span></div>
    <ul><li>';
    if($boolFem){
        echo 'Feminino';
    }else{
        echo 'Masculino';
    }
    echo '</li></ul>
    </div>

    <div id="divAltura">
        <div class="tituloCurto">Qual a sua altura?</div>
        <input type="text" readonly name="altura" id="altura" value="'.number_format($dadosEstilo['altura'],2,',','').'"/> 
    </div>
    
    <div id="divNumCalcado">
        <div class="tituloCurto">Qual numeração dos seus calçados?</div>
        <input type="text" readonly name="numCalcado" id="numCalcado" value="'.$dadosEstilo['numCalcado'].'"/>
    </div>
    
    <div id="divTamBlusa">
        <div class="tituloLongo">Qual tamanho de Blusa / Camisa você costuma usar?</div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas34" id="TamBlusas34" value="34"';
        if(strpos($dadosEstilo['tamBlusa'],'34') !== false){echo ' checked';}
        echo '/><label for="TamBlusas34"> 34 / PP</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas36" id="TamBlusas36" value="36"';
        if(strpos($dadosEstilo['tamBlusa'],'36') !== false){echo ' checked';}
        echo '/><label for="TamBlusas36"> 36 / P</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas38" id="TamBlusas38" value="38"';
        if(strpos($dadosEstilo['tamBlusa'],'38') !== false){echo ' checked';}
        echo '/><label for="TamBlusas38"> 38 / P</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas40" id="TamBlusas40" value="40"';
        if(strpos($dadosEstilo['tamBlusa'],'40') !== false){echo ' checked';}
        echo '/><label for="TamBlusas40"> 40 / M</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas42" id="TamBlusas42" value="42"';
        if(strpos($dadosEstilo['tamBlusa'],'42') !== false){echo ' checked';}
        echo '/><label for="TamBlusas42"> 42 / M</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas44" id="TamBlusas44" value="44"';
        if(strpos($dadosEstilo['tamBlusa'],'44') !== false){echo ' checked';}
        echo '/><label for="TamBlusas44"> 44 / G</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas46" id="TamBlusas46" value="46"';
        if(strpos($dadosEstilo['tamBlusa'],'46') !== false){echo ' checked';}
        echo '/><label for="TamBlusas46"> 46 / G</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas48" id="TamBlusas48" value="48"';
        if(strpos($dadosEstilo['tamBlusa'],'48') !== false){echo ' checked';}
        echo '/><label for="TamBlusas48"> 48 / GG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas50" id="TamBlusas50" value="50"';
        if(strpos($dadosEstilo['tamBlusa'],'50') !== false){echo ' checked';}
        echo '/><label for="TamBlusas50"> 50 / GG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas52" id="TamBlusas52" value="52"';
        if(strpos($dadosEstilo['tamBlusa'],'52') !== false){echo ' checked';}
        echo '/><label for="TamBlusas52"> 52 / EGG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamBlusas54" id="TamBlusas54" value="54"';
        if(strpos($dadosEstilo['tamBlusa'],'54') !== false){echo ' checked';}
        echo '/><label for="TamBlusas54"> 54 / EGG</label></div>
    </div>

    <div id="tamCalcas">
        <div class="tituloLongo">Qual Tamanho de Calça/Saia/Short você costuma usar?</div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas34" id="TamCalcas34" value="34"';
        if(strpos($dadosEstilo['tamCalca'],'34') !== false){echo ' checked';}
        echo '/><label for="TamCalcas34"> 34 / PP</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas36" id="TamCalcas36" value="36"';
        if(strpos($dadosEstilo['tamCalca'],'36') !== false){echo ' checked';}
        echo '/><label for="TamCalcas36"> 36 / P</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas38" id="TamCalcas38" value="38"';
        if(strpos($dadosEstilo['tamCalca'],'38') !== false){echo ' checked';}
        echo '/><label for="TamCalcas38"> 38 / P</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas40" id="TamCalcas40" value="40"';
        if(strpos($dadosEstilo['tamCalca'],'40') !== false){echo ' checked';}
        echo '/><label for="TamCalcas40"> 40 / M</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas42" id="TamCalcas42" value="42"';
        if(strpos($dadosEstilo['tamCalca'],'42') !== false){echo ' checked';}
        echo '/><label for="TamCalcas42"> 42 / M</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas44" id="TamCalcas44" value="44"';
        if(strpos($dadosEstilo['tamCalca'],'44') !== false){echo ' checked';}
        echo '/><label for="TamCalcas44"> 44 / G</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas46" id="TamCalcas46" value="46"';
        if(strpos($dadosEstilo['tamCalca'],'46') !== false){echo ' checked';}
        echo '/><label for="TamCalcas46"> 46 / G</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas46" id="TamCalcas48" value="48"';
        if(strpos($dadosEstilo['tamCalca'],'48') !== false){echo ' checked';}
        echo '/><label for="TamCalcas48"> 48 / GG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas50" id="TamCalcas50" value="50"';
        if(strpos($dadosEstilo['tamCalca'],'50') !== false){echo ' checked';}
        echo '/><label for="TamCalcas50"> 50 / GG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas52" id="TamCalcas52" value="52"';
        if(strpos($dadosEstilo['tamCalca'],'52') !== false){echo ' checked';}
        echo '/><label for="TamCalcas52"> 52 / EGG</label></div>
        <div class="divCheck"><input type="checkbox" name="TamCalcas54" id="TamCalcas54" value="54"';
        if(strpos($dadosEstilo['tamCalca'],'54') !== false){echo ' checked';}
        echo '/><label for="TamCalcas54"> 54 / EGG</label></div>
    </div>
    ';
    if($boolFem){
        echo '
        <div id="divFormaCorpo">
            <div class="tituloLongo">Com qual forma de corpo você mais se identifica?</div>
            <img class="imgInForm" src="/imgs/formatoCorpo.jpg"/>
            <div class="divCheck">
            <input type="radio" name="formaCorpo" id="corpoAmpulheta" value="corpoAmpulheta"';
            if($dadosEstilo['formaCorpo'] == 'corpoAmpulheta') {echo ' checked';}
            echo '/><label for="corpoAmpulheta">
            Ampulheta (ombros e quadril do mesmo tamanho e cintura mais fina)
            </label></div>

            <div class="divCheck">
            <input type="radio" name="formaCorpo" id="corpoTriangPera" value="corpoTriangPera"';
            if($dadosEstilo['formaCorpo'] == 'corpoTriangPera') {echo ' checked';}
            echo '/>
            <label for="corpoTriangPera">
            Triângulo ou Pera (quadris mais largos que a cintura e o ombro)
            </label></div>

            <div class="divCheck">
            <input type="radio" name="formaCorpo" id="corpoRetangulo" value="corpoRetangulo"';
            if($dadosEstilo['formaCorpo'] == 'corpoRetangulo') {echo ' checked';}
            echo '/>
            <label for="corpoRetangulo">
            Retângulo (ombros, quadril e cintura praticamente da mesma medida)
            </label></div>

            <div class="divCheck">
            <input type="radio" name="formaCorpo" id="corpoOval" value="corpoOval"';
            if($dadosEstilo['formaCorpo'] == 'corpoOval') {echo ' checked';}
            echo '/>
            <label for="corpoOval">
            Oval (região da cintura é maior ou mais alinhada com o quadril)
            </label></div>

            <div class="divCheck">
            <input type="radio" name="formaCorpo" id="corpoTriangInvert" value="corpoTriangInvert"';
            if($dadosEstilo['formaCorpo'] == 'corpoTriangInvert') {echo ' checked';}
            echo '/>
            <label for="corpoTriangInvert">
            Triângulo Invertido (ombros mais largos que a cintura e o quadril)
            </label></div>
        </div>';
    }
    echo '
    <div id="divNotaClassico">
        <div class="tituloCurto">Clássico / Tradicional</div>
        <img class="imgInForm" src="/imgs/LookClassicoTradicional.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Clássico / Tradicional): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Classico-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaClassico" id="Classico-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaClassico'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divNotaCriativo">
        <div class="tituloCurto">Criativo</div>
        <img class="imgInForm" src="/imgs/Look-Criativo.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Criativo): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Criativo-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaCriativo" id="Criativo-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaCriativo'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divNotaElegante">
        <div class="tituloCurto">Elegante</div>
        <img class="imgInForm" src="/imgs/Look-Elegante.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Elegante): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Elegante-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaElegante" id="Elegante-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaElegante'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divNotaModerno">
        <div class="tituloCurto">Moderno / Dramático</div>
        <img class="imgInForm" src="/imgs/Look-Moderno.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Moderno / Dramático): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Moderno-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaModerno" id="Moderno-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaModerno'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divNotaRomantico">
        <div class="tituloCurto">Romântico</div>
        <img class="imgInForm" src="/imgs/Look-Romantico.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Romântico): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Romantico-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaRomantico" id="Romantico-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaRomantico'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divNotaSexy">
        <div class="tituloCurto">Sexy</div>
        <img class="imgInForm" src="/imgs/Look-Sexy.png"/>
        Dê uma nota de 1 a 5 para esse estilo baseado no quanto você gosta dele (Sexy): <span class="pointObrigatorio">*</span>
        <div class="scaleInput">';
        for ($i=1; $i <= 5 ; $i++) { 
            echo '
            <div class="chooseNumber"><label for="Sexy-'.$i.'">
                <div class="scaleNumber">'.$i.'</div>
                <div><input type="radio" name="notaSexy" id="Sexy-'.$i.'" value="'.$i.'"';
                if($dadosEstilo['notaSexy'] == $i){echo ' checked';}
                echo '/></div>
            </label></div>
            ';
        }
        echo '
        </div>
    </div>

    <div id="divEstAgrada">
        <div class="tituloLongo">Quais os tipos de estampas que mais te agradam?</div>
        <div class="rowEstampas">
            <div class="divEstampa"><label for="EstFloralLiberty">
                <img class="imgEstampas" src="/imgs/Est-Floralliberty.png"/>
                <div><input type="checkbox" id="EstFloralLiberty" name="Est1" value="EstFloralLiberty"';
                if(strpos($dadosEstilo['estAgrada'],'EstFloralLiberty') !== false){echo ' checked';}
                echo '/>
                Floral Liberty (flores miúdas)</div></label>
            </div>
            <div class="divEstampa"><label for="EstMixFloral">
                <img class="imgEstampas" src="/imgs/Est-Mixfloral.png"/>
                <div><input type="checkbox" id="EstMixFloral" name="Est2" value="EstMixFloral"';
                if(strpos($dadosEstilo['estAgrada'],'EstMixFloral') !== false){echo ' checked';}
                echo '/>
                Mix Floral</div></label>
            </div>
        </div>
        <div class="rowEstampas">
            <div class="divEstampa"><label for="EstFloralClassico">
                <img class="imgEstampas" src="/imgs/Est-floralClassico.png"/>
                <div><input type="checkbox" id="EstFloralClassico" name="Est3" value="EstFloralClassico"';
                if(strpos($dadosEstilo['estAgrada'],'EstFloralClassico') !== false){echo ' checked';}
                echo '/>
                Floral Clássico</div></label>
            </div>
            <div class="divEstampa"><label for="EstGraficaPeB">
                <img class="imgEstampas" src="/imgs/Est-graficaPeB.png"/>
                <div><input type="checkbox" id="EstGraficaPeB" name="Est4" value="EstGraficaPeB"';
                if(strpos($dadosEstilo['estAgrada'],'EstGraficaPeB') !== false){echo ' checked';}
                echo '/>
                Gráfica Preto e Branco</div></label>
            </div>
        </div>
        <div class="rowEstampas">
            <div class="divEstampa"><label for="EstGraficaColorida">
                <img class="imgEstampas" src="/imgs/Est-GraficaColorido.png"/>
                <div><input type="checkbox" id="EstGraficaColorida" name="Est5" value="EstGraficaColorida"';
                if(strpos($dadosEstilo['estAgrada'],'EstGraficaColorida') !== false){echo ' checked';}
                echo '/>
                Gráfica Colorida</div></label>
            </div>
            <div class="divEstampa"><label for="EstAnimalPrint">
                <img class="imgEstampas" src="/imgs/Est-AnimalPrint.png"/>
                <div><input type="checkbox" id="EstAnimalPrint" name="Est6" value="EstAnimalPrint"';
                if(strpos($dadosEstilo['estAgrada'],'EstAnimalPrint') !== false){echo ' checked';}
                echo '/>
                Animal Print</div></label>
            </div>
        </div>
        <div class="rowEstampas">
            <div class="divEstampa"><label for="EstPoa">
                <img class="imgEstampas" src="/imgs/Est-poa.png"/>
                <div><input type="checkbox" id="EstPoa" name="Est7" value="EstPoa"';
                if(strpos($dadosEstilo['estAgrada'],'EstPoa') !== false){echo ' checked';}
                echo '/>
                Poás (bolas)</div></label>
            </div>
            <div class="divEstampa"><label for="EstXadrez">
                <img class="imgEstampas" src="/imgs/Est-xadrez.png"/>
                <div><input type="checkbox" id="EstXadrez" name="Est8" value="EstXadrez"';
                if(strpos($dadosEstilo['estAgrada'],'EstXadrez') !== false){echo ' checked';}
                echo '/>
                Xadrez</div></label>
            </div>
        </div>
    </div>    

    <div id="divEstAgradaOutra">
        <label for="estAgradaOutra">Outra:</label>
        <input type="text" name="estAgradaOutra" id="estAgradaOutra" value="'.$dadosEstilo['estAgradaOutra'].'"/>
    </div>

    <div id="divCorEvita">
        <div class="tituloLongo">Quais cores (ou estampas) que você prefere <span class="evitar">evitar</span> no seu guarda roupa?</div>
        <input type="text" name="corEvita" id="evitaCores" value="'.$dadosEstilo['corEvita'].'"/>
    </div>
    ';    
    if($boolFem){
    echo '
    <div id="divModelagemEvita">
        <div class="tituloLongo">Quais modelagens você <span class="evitar">evita</span> no seu guarda roupa? (pode marcar mais de uma opção)</div>
        <div class="divCheck"><input type="checkbox" name="evitaMod1" id="evitaModelagem-Decotes" value="Decote"';
        if(strpos($dadosEstilo['modelagemEvita'],'Decote') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-Decotes">Decotes</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod2" id="evitaModelagem-coladasCorpo" value="ColadaCorpo"';
        if(strpos($dadosEstilo['modelagemEvita'],'ColadaCorpo') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-coladasCorpo">Peças coladas no Corpo</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod3" id="evitaModelagem-curtas" value="Curtas"';
        if(strpos($dadosEstilo['modelagemEvita'],'Curtas') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-curtas">Peças curtas</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod4" id="evitaModelagem-mostramBarriga" value="MostraBarriga"';
        if(strpos($dadosEstilo['modelagemEvita'],'MostraBarriga') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-mostramBarriga">Peças que mostre barriga</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod5" id="evitaModelagem-cosBaixo" value="CosBaixo"';
        if(strpos($dadosEstilo['modelagemEvita'],'CosBaixo') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-cosBaixo">Peças que tenham cós baixo</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod6" id="evitaModelagem-alcasFinas" value="AlcasFinas"';
        if(strpos($dadosEstilo['modelagemEvita'],'AlcasFinas') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-alcasFinas">Alças Finas</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod7" id="evitaModelagem-amplas" value="Amplas"';
        if(strpos($dadosEstilo['modelagemEvita'],'Amplas') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-amplas">Peças muito amplas</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod8" id="evitaModelagem-costasNua" value="CostasNuas"';
        if(strpos($dadosEstilo['modelagemEvita'],'CostasNuas') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-costasNua">Costas Nuas</label></div>
        <div class="divCheck"><input type="checkbox" name="evitaMod9" id="evitaModelagem-regata" value="Regata"';
        if(strpos($dadosEstilo['modelagemEvita'],'Regata') !== false){echo ' checked';}
        echo '/>
        <label for="evitaModelagem-regata">Regata</label></div>
    </div>

    <div id="divModelagemEvitaOutra">
        <label for="modelagemEvitaOutra">Outra:</label>
        <input type="text" name="modelagemEvitaOutra" id="modelagemEvitaOutra" value="'.$dadosEstilo['modelagemEvitaOutra'].'"/>
    </div>';
    }
    echo '
    <div id="pecasReceber">
        <div class="tituloLongo">Quais tipos de peças você gostaria de receber? (marque quantas quiser)</div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca1" id="tipoPeca-Blusas" value="Blusas"';
            if(strpos($dadosEstilo['pecasReceber'],'Blusas') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Blusas">Blusas / Camisetas</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca2" id="tipoPeca-Camisas" value="Camisas"';
            if(strpos($dadosEstilo['pecasReceber'],'Camisas') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Camisas">Camisas</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca3" id="tipoPeca-Calcas" value="Calcas"';
            if(strpos($dadosEstilo['pecasReceber'],'Calcas') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Calcas">Calças</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca4" id="tipoPeca-Shorts" value="Shorts"';
            if(strpos($dadosEstilo['pecasReceber'],'Shorts') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Shorts">Shorts / Bermudas</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca8" id="tipoPeca-Casacos" value="Casacos"';
            if(strpos($dadosEstilo['pecasReceber'],'Casacos') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Casacos">Casacos</label>
        </div>';
        if($boolFem){
        echo '
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca5" id="tipoPeca-Saias" value="Saias"';
            if(strpos($dadosEstilo['pecasReceber'],'Saias') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Saias">Saias</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca6" id="tipoPeca-Vestidos" value="Vestidos"';
            if(strpos($dadosEstilo['pecasReceber'],'Vestidos') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Vestidos">Vestidos</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca7" id="tipoPeca-Macacoes" value="Macacoes"';
            if(strpos($dadosEstilo['pecasReceber'],'Macacoes') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Macacoes">Macacões</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca9" id="tipoPeca-Acessorios" value="Acessorios"';
            if(strpos($dadosEstilo['pecasReceber'],'Acessorios') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Acessorios">Acessórios</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca10" id="tipoPeca-Bolsas" value="Bolsas"';
            if(strpos($dadosEstilo['pecasReceber'],'Bolsas') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Bolsas">Bolsas</label>
        </div>
        ';
        }else{
        echo '
        
        
        ';
        }
    echo '
        <div class="divCheck">
            <input type="checkbox" name="tipoPeca11" id="tipoPeca-Calcados" value="Calcados"';
            if(strpos($dadosEstilo['pecasReceber'],'Calcados') !== false){echo ' checked';}
            echo '/>
            <label for="tipoPeca-Calcados">Calçados</label>
        </div>
    </div> 

    <div id="divoutraPeca">
        <label for="outroTipoPeca">Outra:</label>
        <input type="text" name="pecasReceberOutra" id="outroTipoPeca" value="'.$dadosEstilo['pecasReceberOutra'].'"/>
    </div>

    <div id="divOcasiao">
        <div class="tituloLongo">Para qual ocasião você gostaria de receber peças? (marque quantas quiser)</div>
        <div class="divCheck">
            <input type="checkbox" name="ocasiao1" id="ocasiao-Festa" value="Festa"';
            if(strpos($dadosEstilo['ocasiao'],'Festa') !== false){echo ' checked';}
            echo '/>
            <label for="ocasiao-Festa">Festa / Balada</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="ocasiao2" id="ocasiao-TrabNormal" value="TrabNormal"';
            if(strpos($dadosEstilo['ocasiao'],'TrabNormal') !== false){echo ' checked';}
            echo '/>
            <label for="ocasiao-TrabNormal">Trabalho Normal</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="ocasiao3" id="ocasiao-TrabCasual" value="TrabCasual"';
            if(strpos($dadosEstilo['ocasiao'],'TrabCasual') !== false){echo ' checked';}
            echo '/>
            <label for="ocasiao-TrabCasual">Trabalho Casual</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="ocasiao4" id="ocasiao-Especiais" value="Especiais"';
            if(strpos($dadosEstilo['ocasiao'],'Especiais') !== false){echo ' checked';}
            echo '/>
            <label for="ocasiao-Especiais">Ocasiões Especiais</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="ocasiao5" id="ocasiao-Casual" value="Casual"';
            if(strpos($dadosEstilo['ocasiao'],'Casual') !== false){echo ' checked';}
            echo '/>
            <label for="ocasiao-Casual">Casual / Dia a dia</label>
        </div>
    </div>
    <div id="divOcasiaoOutra">
        <label for="ocasiaoOutra">Outra:</label>
        <input type="text" name="ocasiaoOutra" id="ocasiaoOutra" value="'.$dadosEstilo['ocasiaoOutra'].'"/>
    </div>
    <div id="divMarcas">
        <div class="tituloLongo">Quais as marcas com as quais você mais se identifica? (marque quantas quiser)</div>';
    if($boolFem){
        echo '
        <div class="divCheck">
        <input type="checkbox" name="marca1" id="marca-Farm" value="Farm"';
        if(strpos($dadosEstilo['marcas'],'Farm') !== false){echo ' checked';}
        echo '/>
        <label for="marca-Farm">Farm</label>
        </div>
        <div class="divCheck">
        <input type="checkbox" name="marca2" id="marca-Cantao" value="Cantao"';
        if(strpos($dadosEstilo['marcas'],'Cantao') !== false){echo ' checked';}
        echo '/>
        <label for="marca-Cantao">Cantão</label>
        </div>
        <div class="divCheck">
        <input type="checkbox" name="marca3" id="marca-Scalon" value="Scalon"';
        if(strpos($dadosEstilo['marcas'],'Scalon') !== false){echo ' checked';}
        echo '/>
        <label for="marca-Scalon">Scalon</label>
        </div>
        <div class="divCheck">
        <input type="checkbox" name="marca4" id="marca-MariaFilo" value="MariaFilo"';
        if(strpos($dadosEstilo['marcas'],'MariaFilo') !== false){echo ' checked';}
        echo '/>
        <label for="marca-MariaFilo">Maria Filó</label>
        </div>
        <div class="divCheck">
        <input type="checkbox" name="marca5" id="marca-VivianeFurrier" value="VivianeFurrier"';
        if(strpos($dadosEstilo['marcas'],'VivianeFurrier') !== false){echo ' checked';}
        echo '/>
        <label for="marca-VivianeFurrier">Viviane Furrier</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca6" id="marca-Amore" value="Amore"';
            if(strpos($dadosEstilo['marcas'],'Amore') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Amore">Amore - Nice Club</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca7" id="marca-Lucidez" value="Lucidez"';
            if(strpos($dadosEstilo['marcas'],'Lucidez') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Lucidez">Lucidez</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca8" id="marca-MissBella" value="MissBella"';
            if(strpos($dadosEstilo['marcas'],'MissBella') !== false){echo ' checked';}
            echo '/>
            <label for="marca-MissBella">Miss Bella</label>
        </div>
        ';
    }else{
        echo '
        <div class="divCheck">
            <input type="checkbox" name="marca9" id="marca-Reserva" value="Reserva"';
            if(strpos($dadosEstilo['marcas'],'Reserva') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Reserva">Reserva</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca10" id="marca-Ogochi" value="Ogochi"';
            if(strpos($dadosEstilo['marcas'],'Ogochi') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Ogochi">Ogochi</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca11" id="marca-Foxton" value="Foxton"';
            if(strpos($dadosEstilo['marcas'],'Foxton') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Foxton">Foxton</label>
        </div>
        ';
    }
    echo 
    '
        <div class="divCheck">
            <input type="checkbox" name="marca12" id="marca-Ellus" value="Ellus"';
            if(strpos($dadosEstilo['marcas'],'Ellus') !== false){echo ' checked';}
            echo '/>
            <label for="marca-Ellus">Ellus</label>
        </div>
        <div class="divCheck">
            <input type="checkbox" name="marca13" id="marca-VideBula" value="VideBula"';
            if(strpos($dadosEstilo['marcas'],'VideBula') !== false){echo ' checked';}
            echo '/>
            <label for="marca-VideBula">Vide Bula</label>
        </div>
    </div>

    <div id="divMarcasOutra">
        <label for="marcasOutra">Outra:</label>
        <input type="text" name="marcasOutra" id="marcasOutra" value="'.$dadosEstilo['marcasOutra'].'"/>
    </div>
    ';


?>
    </div><!--do quadro central-->
</div><!--do conteudo-->

<?php
require '../App/Views/Admin/footer.php';
?>
