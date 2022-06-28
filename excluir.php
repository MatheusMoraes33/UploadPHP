<?php
require('connect.php');
$codigo = $_GET['codigo'];
if(mysqli_query($con,"DELETE FROM `tb_contatos` WHERE `codigo` ='$codigo'")){


?>