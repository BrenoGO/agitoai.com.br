<?php
require '../App/Views/Admin/inithead.php';
echo '
<title>Adm Agito</title>
';
require '../App/Views/Admin/endhead.php';
?>

<div id="header">
    <h1>Clientes</h1>
</div>
<div id="content">
    <p>O usuário de id <?php $idUsuario ?> não existe!';</p>
</div>

<?php
require '../App/Views/Admin/footer.php';
?>
