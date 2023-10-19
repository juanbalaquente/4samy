<!DOCTYPE html>
<?php
include_once("conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>mara</title>
    </head>
    <body>
        <?php
        include_once ('conexao.php');
   
   if ($conexao -> connect_error){
           die ("falha na conexao com o DB!");
   }
   $data= $_POST['data'];
   $avaliacao= $_POST['avaliacao'];
   $hoje= $_POST['hoje'];
   $semana= $_POST['semana'];


           
   $inserir = mysqli_query($conexao, "INSERT INTO mara( data, avaliacao, hoje, semana)
   VALUES('$data','$avaliacao','$hoje','$semana')");
   
   echo"Cadastro realizado com sucesso <p>Para realizar mais cadastros atualize a página!";
            
        ?>
    </body> 
</html>