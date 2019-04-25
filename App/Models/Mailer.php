<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PDO;
use Core\Model;

class Mailer extends Model
{
    public static function sendMailToAgito($id)
    {
        $db=static::getDB();
        $qr='SELECT * FROM usuarios WHERE id=?';
        $value=[$id];
        $stmt=$db->prepare($qr);
        $stmt->execute($value);
        $lnDados = $stmt->fetch(PDO::FETCH_ASSOC);
        $qr='SELECT * FROM estilo WHERE idUsuario=?';
        $stmt=$db->prepare($qr);
        $stmt->execute($value);
        $lnEstilo = $stmt->fetch(PDO::FETCH_ASSOC);

        $mail = new PHPMailer(false);
        //$mail->SMTPDebug = 2;                          // Enable verbose debug output
        $mail->isSMTP();                               // Set mailer to use SMTP
        $mail->Host       = 'smtp.hostinger.com.br';   // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                      // Enable SMTP authentication
        $mail->Username   = 'agito@agitoai.com.br';    // SMTP username
        $mail->Password   = 'YCEc2DioZ4uF';            // SMTP password
        //$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                       // TCP port to connect to

        $mail->setFrom('agito@agitoai.com.br', 'Agito Aí');
        $mail->addAddress('agito@lojaagito.com.br');
        $mail->addAddress('breno.oliveira.ufv@gmail.com');
        $mail->addAddress('contatoagitoloja@gmail.com');
        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = htmlspecialchars('Agito Aí: ').$lnDados['nomeCompleto'];
        $body = '<!DOCTYPE html><html><head><style>
        h3 {
            display: inline;
        }
        p { 
            display:inline;
        }
        </style></head><body>';
        $body .= '<h1>Segue cadastro</h1>';
        $body .= '<h3>Nome Completo: </h3>';
        $body .= '<p>'.$lnDados['nomeCompleto'].'</p></br>';
        $body .= '<h3>E-mail: </h3>';
        $body .= '<p>'.$lnDados['email'].'</p></br>';
        $body .= '<h3>CPF: </h3>';
        $body .= '<p>'.$lnDados['cpf'].'</p></br>';
        $body .= '<h3>Data de Nascimento: </h3>';
        $body .= '<p>'.$lnDados['dataNasc'].'</p></br>';
        $body .= '<h3>Endereço: </h3>';
        $body .= '<p>'.$lnDados['endereco'].'</p></br>';
        $body .= '<h3>Cidade: </h3>';
        $body .= '<p>'.$lnDados['cidade'].'</p></br>';
        $body .= '<h3>Gênero: </h3>';
        $body .= '<p>'.$lnDados['genero'].'</p></br>';
        $body .= '<h3>Telefone: </h3>';
        $body .= '<p>'.$lnDados['telefone'].'</p></br>';
        $body .= '<h3>Outros Contatos: </h3>';
        $body .= '<p>'.$lnDados['outrosContatos'].'</p></br>';
        $body .= '<h3>Como Contactar: </h3>';
        $body .= '<p>'.$lnDados['comoContactar'].'</p></br>';
        $body .= '<h3>Rede Social: </h3>';
        $body .= '<p>'.$lnDados['redeSocial'].'</p></br>';
        $body .= '<h3>Altura: </h3>';
        $body .= '<p>'.number_format($lnEstilo['altura'],2,',','.').'</p></br>';
        $body .= '<h3>Tamanho de Blusa: </h3>';
        $body .= '<p>'.$lnEstilo['tamBlusa'].'</p></br>';
        $body .= '<h3>Tamanho de Calça: </h3>';
        $body .= '<p>'.$lnEstilo['tamCalca'].'</p></br>';
        $body .= '<h3>Nota para estilo Clássico / Tradicional: </h3>';
        $body .= '<p>'.$lnEstilo['notaClassico'].'</p></br>';
        $body .= '<h3>Nota para estilo Criativo: </h3>';
        $body .= '<p>'.$lnEstilo['notaCriativo'].'</p></br>';
        $body .= '<h3>Nota para estilo Elegante: </h3>';
        $body .= '<p>'.$lnEstilo['notaElegante'].'</p></br>';
        $body .= '<h3>Nota para estilo Esporte / Natural: </h3>';
        $body .= '<p>'.$lnEstilo['notaNatural'].'</p></br>';
        $body .= '<h3>Nota para estilo Moderno: </h3>';
        $body .= '<p>'.$lnEstilo['notaModerno'].'</p></br>';
        $body .= '<h3>Nota para estilo Romântico: </h3>';
        $body .= '<p>'.$lnEstilo['notaRomantico'].'</p></br>';
        $body .= '<h3>Nota para estilo Sexy: </h3>';
        $body .= '<p>'.$lnEstilo['notaSexy'].'</p></br>';
        $body .= '<h3>Estampas que agradam: </h3>';
        $body .= '<p>';
        $estampas = [
            'EstFloralLiberty' => 'Floral Liberty',
            'EstMixFloral' => 'Mix Floral',
            'EstFloralClassico' => 'Floral Clássico',
            'EstGraficaPeB' => 'Gráfica Preto e Branco',
            'EstGraficaColorida' => 'Gráfica Colorida',
            'EstAnimalPrint' => 'Animal Print',
            'EstPoa' => 'Poás (bolas)',
            'EstXadrez' => 'Xadrez'
        ];
        $estsAr = explode('/', $lnEstilo['estAgrada']);
        $i = 1;
        foreach($estsAr as $estAgrada){
            if($estAgrada != ''){
                if($i != 1){
                    $body .= ', ';
                }
                $body .= $estampas[$estAgrada];
            }else{
                $body .= '.';
            }
            $i++;
        }
        $body .= '</p></br>';
        $body .= '<h3>Outra estampa que agrada: </h3>';
        $body .= '<p>'.$lnEstilo['estAgradaOutra'].'</p></br>';
        $body .= '<h3>Cores ou estampas que evita: </h3>';
        $body .= '<p>'.$lnEstilo['corEvita'].'</p></br>';
        $body .= '<h3>Modelagens que Evita: </h3>';
        $body .= '<p>';
        $modelagens = [
            'Decote' => 'Decotes',
            'ColadaCorpo' => 'Peças coladas no Corpo',
            'Curtas' => 'Peças curtas',
            'MostraBarriga' => 'Peças que mostre barriga',
            'CosBaixo' => 'Peças que tenham cós baixo',
            'AlcasFinas' => 'Alças Finas',
            'Amplas' => 'Peças muito amplas',
            'CostasNuas' => 'Costas Nuas',
            'Regata' => 'Regata'
        ];
        $modelEvitaAr = explode('/', $lnEstilo['modelagemEvita']);
        $i = 1;
        foreach($modelEvitaAr as $modelagemEvita){
            if($modelagemEvita != ''){
                if($i != 1){
                    $body .= ',';
                }
                $body .= $modelagens[$modelagemEvita];
            }else{
                $body .= '.';
            }
            $i++;
        }
        $body .= '</p></br>';
        $body .= '<h3>Outra Modelagem que Evita: </h3>';
        $body .= '<p>'.$lnEstilo['modelagemEvitaOutra'].'</p></br>';
        $body .= '<h3>Peças que deseja receber: </h3>';
        $body .= '<p>';
        $pecas = [
            'Blusas' => 'Blusas / Camisetas',
            'Camisas' => 'Camisas',
            'Calcas' => 'Calças',
            'Shorts' => 'Shorts / Bermudas',
            'Casacos' => 'Casacos',
            'Saias' => 'Saias',
            'Vestidos' => 'Vestidos',
            'Macacoes' => 'Macacões',
            'Acessorios' => 'Acessórios',
            'Bolsas' => 'Bolsas'
        ];
        $pecasReceberAr = explode('/', $lnEstilo['pecasReceber']);
        $i = 1;
        foreach($pecasReceberAr as $pecasReceber){
            if($pecasReceber != ''){
                if($i != 1){
                    $body .= ',';
                }
                $body .= $pecas[$pecasReceber];
            }else{
                $body .= '.';
            }
            $i++;
        }
        $body .= '</p></br>';
        $body .= '<h3>Outras peças que deseja receber:</h3>';
        $body .= '<p>'.$lnEstilo['pecasReceberOutra'].'</p></br>';
        $body .= '<h3>Peças para Ocasião: </h3>';
        $body .= '<p>';
        $ocasioes = [
            'Festa' => 'Festa / Balada',
            'TrabNormal' => 'Trabalho Normal',
            'TrabCasual' => 'Trabalho Casual',
            'Especiais' => 'Ocasiões Especiais',
            'Casual' => 'Casual / Dia a dia'
        ];
        $ocasiaoAr = explode('/', $lnEstilo['ocasiao']);
        $i = 1;
        foreach($ocasiaoAr as $ocasiao){
            if($ocasiao != ''){
                if($i != 1){
                    $body .= ',';
                }
                $body .= $ocasioes[$ocasiao];
            }else{
                $body .= '.';
            }
            $i++;
        }
        $body .= '</p></br>';
        $body .= '<h3>Outra ocasião:</h3>';
        $body .= '<p>'.$lnEstilo['ocasiaoOutra'].'</p></br>';
        $body .= '<h3>Marcas de preferência: </h3>';
        $body .= '<p>';
        $marcas = [
            'Farm' => 'Farm',
            'Cantao' => 'Cantão',
            'Scalon' => 'Scalon',
            'MariaFilo' => 'Maria Filó',
            'VivianeFurrier' => 'Viviane Furrier',
            'Amore' => 'Amore - Nice Club',
            'Lucidez' => 'Lucidez',
            'MissBella' => 'Miss Bella',
            'Reserva' => 'Reserva',
            'Ogochi' => 'Ogochi',
            'Foxton' => 'Foxton',
            'Ellus' => 'Ellus',
            'VideBula' => 'Vide Bula'
        ];
        $marcasAr = explode('/', $lnEstilo['marcas']);
        $i = 1;
        foreach($marcasAr as $marca){
            if($marca != ''){
                if($i != 1){
                    $body .= ',';
                }
                $body .= $marcas[$marca];
            }else{
                $body .= '.';
            }
            $i++;
        }
        $body .= '</p></br>';
        $body .= '<h3>Outras marcas:</h3>';
        $body .= '<p>'.$lnEstilo['marcasOutra'].'</p></br>';
        $body .= '</body></html>';
        $mail->Body = $body; 

        $mail->send();
    }
}
