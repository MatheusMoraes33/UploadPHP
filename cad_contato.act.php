
<?php

extract($_POST);
extract($_FILES);
echo $url = "Galeria/".md5(time().$foto['name']).".jpg";
if(move_uploaded_file($foto['tmp_name'],$url)){  
}
require('connect.php');

if(mysqli_query($con,"INSERT INTO `tb_contatos`
(`codigo`,`nome`,`email`,`telefone`,`idade`,`url`) VALUES
(NULL,'$nome','$email','$telefone','$idade','$url');")){

    $msg ="<div class =Alertasucesso>Contato cadastrado com sucesso</div>";
}else{
    $msg ="<div class=AlertaErro Erro ao Cadastrar contato</div>";
}




@session_start();
$_SESSION['msg']=$msg;
header("location:cad_contato.php"); 

?>