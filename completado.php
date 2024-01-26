<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
extract($_SESSION);

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