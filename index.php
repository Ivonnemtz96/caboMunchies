<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'active';
include('includes/head.php');

if (isset($_GET)) {
    include("php/msg.php");
  }
?>

<body>
    <?
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        include('includes/preloader.php');
        include('includes/redes.php');
        include('includes/scripts.php');
    ?>
</body>

</html>