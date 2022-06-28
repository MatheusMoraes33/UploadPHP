<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
*{
    margin: 10px;
}

body{
    background-image:url(./imagens/DadosImagem.PNG);

}
.contatos > div {

    font-family:arial;
    font-size: 18px;
    border: solid 3px black;
    max-width: 370px;
    max-height:230;
  
    color: green;
    background-color: orange;
    float:left;
    text-align:center;
overflow:hidden;
}
 
img{
    height:280px;
    width:240px;
    margin:-8px 10px;
    border: solid 3px white;
}
.titulo{
    text-align:center;
    color:orange;
    font-family:arial;
    border: solid 3px black;
    box-shadow:black -3px 8px  7px ;
    background-color: white;

}
 </style>

</head>
<body>

<script>

  function conf_excluir(cod){
      conf = confirm ("Deseja excluir o registro "+cod+"?");
      if(conf == true){
          window.location = "excluir.php?codigo="+cod;

      }
  }


</script>

<h1 class="titulo">Registro de Contatos</h1>  

    <?php

    require('connect.php');
    $contatos = mysqli_query($con,"Select * from `tb_contatos`");
   // $fotos = mysqli_query($con,"Select * from `tb_contatos`");
   // while($foto = mysqli_fetch_array($fotos)){
   // }
        echo "<div class= contatos>";
     
   while ($contato = mysqli_fetch_array($contatos)){
    
        echo "<div>";
        echo "<p>Código:$contato[codigo]</p>";
        echo "<p>Nome:$contato[nome]</p>";
        echo "<p>Telefone:$contato[telefone]</p>";
        echo "<p>Email: $contato[email]</p>";
        echo "<p>Idade: $contato[telefone]</p>";
        echo"<img src=$contato[url]>";
        echo "<p><a href=alterar.php?codigo=$contato[codigo]>Alterar</a>
                <a href = javascript:conf_excluir($contato[codigo])>Excluir</a>
        
        </p>";
        
       
        echo "</div>";
    }
echo "</div>";    

/*
require('connect.php');
    $fotos = mysqli_query($con,"Select * from `tb_fotos`");
    while($foto = mysqli_fetch_array($fotos)){
    echo"<p>Nome:$foto[nome]</p>";
    echo"<img src=$foto[url]";


*/


?> 

</body>
</html>