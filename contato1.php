<?php 
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "fseletro";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn) {
    die("A conexão ao BD falhou:" . mysqli_connect_error());
}
if(isset($_POST['nome'])&& isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
echo $nome, $msg;
$sql = "insert  into comentarios (nome, msg) values ('$nome','$msg')";
      $result = $conn->query($sql);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css" media="screen" />
    <meta charset="UTF-8">
    <title>Contato-Full Stack Eletro</title>
    <script src="index.js"></script>
</head>

<body>
<?php include_once ('menu.html');
    ?>

    <br>
    <h1>Entre em contato conosco</h1><br>
    <hr>
    <!-- parte email -->
    <section class="contato">
        <div class="contatoEmail">
            <img class="imge" src="img/email-logo.png" width="120px" alt="email">

            <br>
            <input class="demoemail" type="text" oncopy="myFunction()" value="contato@fullstackeletro.com">
            <p id="demo"></p>
            <script>
                function myFunction() {
                  document.getElementById("demo").innerHTML = "E-mail copiado com sucesso!"
                }
            </script>
            <br>
        </div>
    </section>
    <!-- parte whatsapp -->
    <section class="contato">
        <div class="contatoZap">
            <img class="imge" src="./img/whats-logo.jpg" width="120px" alt="whatsapp contato">

            <br>
            <input class="demonum" type="text" oncopy="myFunction1()" value="(11)99999-9999">
            <p id="demowhats"></p>
            <script>
                function myFunction1() {
                  document.getElementById("demowhats").innerHTML = "Número de whatsApp copiado!"
                }
                </script>

            <br>
        </div>
    </section>
    <!-- parte do formulario -->

    <form method="post" action="">
        <h4> Nome: </h4>
        <input type="text" name="nome" style="width: 350px" placeholder="Insira seu nome"> 
        <h4> Mensagem: </h4>
        <input type="text" name="msg" style="width: 350px" placeholder="Insira sua mensagem"> 
        <br> <br> 
         <!-- <textarea style="width: 400px;"></textarea> -->
        <input  type="submit" name="submit" value="Enviar">
       <!-- <p id="enviarid"></p> -->
         <!-- <input class="enviar1" type="button" onclick="funcao1()" value="Enviar">
             <p id="enviarid"></p>-->
            <!-- <script>
                  function funcao1() {
                   document.getElementById("enviarid").innerHTML = "mensagem enviada com sucesso!"
                 } 
                 </script> -->
    </form>
    <center>
    <?php
                $sql = "select * from comentarios";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0){
                  while($rows = $result->fetch_assoc()){
              
                echo "Data:", $rows['data'], "<br>";
                echo "Nome:",  $rows['nome'], "<br>";
                echo "Mensagem:",  $rows['msg'], "<br>","<br>";
     ?>
     </center>
     <center>
    <?php }
            }else{
              echo "Nenhum comentário ainda!!!";
            }?>  
            </center>    
        
    <!--  -->
    <br><br><br>

    <footer id="rodape">
        <p id="formasPagamento">
            <b>Formas de pagamento:</b>
        </p>
        <img src="./img/Cartao.jpeg" alt="Formas de pagamento" height="70">
        <p>&copy; Recode Pro </p>
    </footer>
</body>
</html>