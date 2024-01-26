<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Se cambia las confirmaciones que se tenían en modules/completado.php y se ponen en este archivo de completado para que se ejecute la condición,mailCompletado se posiciona en la carpeta raíz
if (((isset($_REQUEST['idTran']))and(isset($_REQUEST['idCheckOut'])))and($_REQUEST['idTran']!='')and(($_REQUEST['idCheckOut']!=''))) {
    extract($_REQUEST);
    include('archivo-contacto.php');
  } else {
    header('location: /munchies/index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
include('includes/head.php');
?>

<body>
    <?
        include('includes/header.php');
        include('modules/completado.php');
        include('includes/footer.php');
        include('includes/preloader.php');
        include('includes/redes.php');
        include('includes/scripts.php');
    ?>
</body>

</html>