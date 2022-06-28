<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Contatos</title>
<link rel="stylesheet" href="cad.css">
</head>
<body>
 <h1 class="titulo">Cadastro de Contatos</h1>
 <?php

require('connect.php');

  //  $fotos = mysqli_query($con, "Select * from `tb_contatos`");
  //  while($foto = mysqli_fetch_array($fotos)){
   // echo"<img src=$foto[url]>";
//}

session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
unset($_SESSION['msg']);
}

?>
 <form action="cad_contato.act.php" method ="post" enctype= "multipart/form-data">
<div class ="form">
<p class="paragrafo"> Nome: <input type="text" name="nome" placeholder ="Digite seu nome " id="nome"> </p>
<p class="email"> Email: <input type="email" name="email" placeholder="Digite seu E-mail" id="">
<p> Telefone: <input type="text" name="telefone" placeholder ="Digite seu telefone" id=""></p>
<p>Idade: <input type="number" name="idade" placeholder ="Digite sua idade" ></p>
<p>foto:<input type="file" name="foto"></p>
<button class="btn">Enviar</button>
</div>
</form>

</body>
</html>