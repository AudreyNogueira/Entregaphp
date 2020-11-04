<?php 
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "fseletro";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn) {
    die("A conexão ao BD falhou:" . mysqli_connect_error());
}

// if(isset($_POST['nome'])&& isset($_POST['msg'])){
//     $nome = $_POST['nome'];
//     $msg = $_POST['msg'];
// echo $nome, $msg;
// $sql = "insert  into produto (nome, msg) values ('$nome','$msg')";
//       $result = $conn->query($sql);
// }
?>
 <!-- $sql = "select * from produto";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
 while($rows = $result->fetch_assoc()){
 echo $rows["categoria"];
 }} else{
     echo "nenhum produto foi encontrado";
 } -->


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css" media="screen" />
    <meta charset="UTF-8">
    <title>Produtos-Full Stack Eletro</title>
    <script src="index.js"></script>

    <script type="text/javascript">
    	
        function aumentaImagem(nome){
       nome.width = nome.width+50;
       nome.height = nome.height+50;
        }
        function tamanhoNormal(nome){
            if (nome.width+50 &&  nome.height+50){
       nome.width = 150;
       nome.height = 220;	
      alert("clique duas vezes para redimencionar e diminuir a imagem ampliada.");
        }
    }
    
        </script>
</head>

<body>

    <!-- novo -->
    <!-- <nav id="menu">
        <a href="index1.html"><img src="./img/logoo.png" width="122px" alt="Full Stack Eletro">
            <a href="produto1.html">Produtos</a>
            <a href="loja1.html">Lojas</a>
            <a href="contato1.html">Contato</a>


    </nav> -->
    <?php include_once ('menu.html');
    ?>
    <header>
        <br>
        <h1>Os melhores produtos você encontra aqui!</h1>
        <br>
    </header>
    <hr>


    <!-- lista -->
    <section class="categoria">
        <h2>Categorias </h2>
        <ul>

            <li onclick="exibirTodos()">
                Exibir todos (12)
            </li>
            <li onclick="exibirCat('geladeira')">
                Geladeiras (3)
            </li>
            <li onclick="exibirCat('fogão')">
                Fogões (2)
            </li>
            <li onclick="exibirCat('microondas')">
                Micro-ondas (3)
            </li>
            <li onclick="exibirCat('maquina')">
                Lavadora de roupas (2)
            </li>
            <li onclick="exibirCat('lavalouca')">
                Lava-louças (2)
            </li>

        </ul>
    </section> <br><br>

    <!-- fim da lista -->
    <!-- produto1 -->

    <section class="boxProduto">
        <?php 
        $sql = "select * from produto";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
        // echo $rows["categoria"];
        ?>
            <!-- onclick='aumentaImagem();'   
           ondblclick='tamanhoNormal();'  -->
         <div class="produto" id="<?php echo $rows["categoria"]; ?>">
            <img class="imge" src="<?php echo $rows["imagem"]; ?>" width="120px" height="170" 
            onclick="aumentaImagem(this);"  
           ondblclick="tamanhoNormal(this);"
            style="cursor:pointer" />
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                <path
                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                <path fill-rule="evenodd"
                    d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
            </svg>

            <br>
            <p class="descricao"><?php echo $rows["descricao"]; ?></p>
            <br>
            <hr>
            <p class="descricao"><strike>R$  <?php echo $rows["preco"]; ?></strike></p>
            <p class="preco">R$ <?php echo $rows["precofinal"]; ?></p>

        </div>
   

        <?php
        }} else{
            echo "nenhum produto foi encontrado";
        }
        
        ?>
         </section>
            <!-- <input class="enviari" type="image" onclick="funcaoimg()" value="image">
            <p id="enviarimg"></p>
            <script>
                function funcaoimg() {
                  document.getElementById("enviarid").innerHTML = "clique duas vezes para retirar o zoom"
                }
                </script> -->

<!-- <input class="enviar1" type="button" onclick="funcao1()" value="Enviar">
<p id="enviarid"></p>
<script>
    function funcao1() {
      document.getElementById("enviarid").innerHTML = "mensagem enviada com sucesso!"
    }
    </script> -->

            <!-- onclick="destaque(this)-->

            


    <!-- 2 item -->
    <!-- <section class="produtos" id="geladeira">
        <div class="boxProdutos" style="display: block">
            <img class="imge" src="img/produtos/geladeira3.jpeg" width="120px" alt="Geladeira" 
            
            name="logo1" 
            width="130" height="230" 
            onclick="aumentaImagem(logo1);" 
            ondblclick="tamanhoNormal(logo1);"
            style="cursor:pointer" />

            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                <path
                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                <path fill-rule="evenodd"
                    d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
            
                </svg>

            <br>
            <p class="descricao">Geladeira Frost free Brastemp branca 370 litros</p>
            <br>
            <hr>
            <p class="descricao"><strike>R$ 2.069,60</strike></p>
            <p class="preco">R$1.910,00</p>

        </div>
    </section> -->


    <!-- 3 item -->

    <!-- <section class="produtos" id="geladeira">
        <div class="boxProdutos" style="display: block">
            <img class="imge" src="img/produtos/geladeira1.jpeg" width="120px" alt="Geladeira" 
            
       name="logo2" 
       width="130" height="230" 
       onclick="aumentaImagem(logo2);" 
       ondblclick="tamanhoNormal(logo2);"
       style="cursor:pointer" />

            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                <path
                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                <path fill-rule="evenodd"
                    d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
            </svg>

            <br>
            <p class="descricao">Geladeira Frost free Consul prata 340 litros</p>
            <br>
            <hr>
            <p class="descricao"><strike>R$ 2.199,60</strike></p>
            <p class="preco">R$2.069,00</p>

        </div>
    </section> -->


    <!-- 4 item -->
    <!-- <section class="produtos" id="fogao">
        <div class="boxProdutos" style="display: block">
            <img class="imge" src="img/produtos/fogao2.jpeg" alt="fogao" width="120px"
            name="fogao0" 
       width="130" height="230" 
       onclick="aumentaImagem(fogao0);" 
       ondblclick="tamanhoNormal(fogao0);"
       style="cursor:pointer" />
       

            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                <path
                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                <path fill-rule="evenodd"
                    d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
            </svg>

            <br>
            <p class="descricao">Fogão 4 bocas Consul inox com mesa de vidro</p>
            <br>
            <hr>
            <p class="descricao"><strike>R$ 1.209,00</strike></p>
            <p class="preco">R$1.129,00</p>

        </div>
    </section> -->


    <!-- 5 item -->

    <!-- <tr>

        <section class="produtos" id="fogao">
            <div class="boxProdutos" style="display: block">

                <img class="imge" src="img/produtos/fogao1.jpeg"  alt="fogão" width="130" height="230" 
                name="fogao" 
       width="130" height="230" 
       onclick="aumentaImagem(fogao);" 
       ondblclick="tamanhoNormal(fogao);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Fogão 4 bocas atlas monaco com acendimento automático</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 609,80</strike></p>
                <p class="preco">R$519,00</p>

            </div>
        </section> -->


        <!-- 6 item -->
        <!-- <section class="produtos" id="microondas">
            <div class="boxProdutos" style="display: block">
                <img class="imge" src="img/produtos/microondas1.jpeg" width="120px" alt="fogão" 
        name="fog" 
       width="100" height="130" 
       onclick="aumentaImagem(fog);" 
       ondblclick="tamanhoNormal(fog);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Micro-ondas 32 litros Consul Inox 220V</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 580,00</strike></p>
                <p class="preco">R$409,00</p>

            </div>
        </section> -->

        <!-- 7 item -->
        <!-- <section class="produtos" id="microondas">
            <div class="boxProdutos" style="display: block">
                <img class="imge" src="img/produtos/microondas2.jpeg" width="120px" alt="fogão" 
                name="micro0" 
       width="100" height="130" 
       onclick="aumentaImagem(micro0);" 
       ondblclick="tamanhoNormal(micro0);"
       style="cursor:pointer"/>
        

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Micro-ondas espelhado 220V Philco 25 litros</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 6.399,00</strike></p>
                <p class="preco">R$5.019,00</p>

            </div>
        </section> -->


        <!-- 8 item -->
        <!-- <section class="produtos" id="microondas">
            <div class="boxProdutos" style="display:block">
                <img class="imge" src="img/produtos/microondas3.jpeg" width="120px" alt="forno" 
                name="micro" 
       width="150" height="140" 
       onclick="aumentaImagem(micro);" 
       ondblclick="tamanhoNormal(micro);"
       style="cursor:pointer" />
      
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Forno de Micro-ondas Eletrolux 20 litros branco</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 459,00</strike></p>
                <p class="preco">R$436,00</p>
                </li>
            </div>
        </section> -->


<!-- 9 item -->
        <!-- <section class="produtos" id="maquina">
            <div class="boxProdutos" style="display:block">
                <img class="imge" src="img/produtos/maquina de lavar1.jpeg" width="120px" alt="maquina" 
                name="maquina0" 
       width="130" height="230" 
       onclick="aumentaImagem(maquina0);" 
       ondblclick="tamanhoNormal(maquina0);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Máquina de lavar roupas Philco 11kg branca</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 2.759,00</strike></p>
                <p class="preco">R$2.510,00</p>
            </div>
        </section> -->
<!-- 10 item -->
        <!-- <section class="produtos" id="maquina">
            <div class="boxProdutos" style="display:block">
                <img class="imge" src="img/produtos/maquina de lavar2.jpeg" width="120px" alt="máquina" 
                name="maquina" 
       width="130" height="230" 
       onclick="aumentaImagem(maquina);" 
       ondblclick="tamanhoNormal(maquina);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Máquina Turbo Performance Brastemp 11kg branca</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 1.699,0</strike></p>
                <p class="preco">R$1.214,10</p>
            </div>
        </section> -->

<!-- 11 item -->
        <!-- <section class="produtos" id="lavalouca">
            <div class="boxProdutos" style="display:block">
                <img class="imge" src="img/produtos/lava louças1.jpeg" width="120px" alt="máquina"
                name="lava" 
       width="130" height="230" 
       onclick="aumentaImagem(lava);" 
       ondblclick="tamanhoNormal(lava);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Lava-louça Eletrolux inox
                </p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 3.599,90</strike></p>
                <p class="preco">R$2.799,90</p>
            </div>
        </section> -->
<!-- 12 item -->

        <!-- <section class="produtos" id="lavalouca">
            <div class="boxProdutos" style="display:block">
                <img class="imge" src="img/produtos/lava louças2.jpeg" width="120px" alt="máquina" 
                name="lava1" 
       width="130" height="230" 
       onclick="aumentaImagem(lava1);" 
       ondblclick="tamanhoNormal(lava1);"
       style="cursor:pointer" />

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    <path
                        d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                    <path fill-rule="evenodd"
                        d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                </svg>

                <br>
                <p class="descricao">Lava-louça Compacta e serviços branca 127V Brastemp</p>
                <br>
                <hr>
                <p class="descricao"><strike>R$ 1.979,50</strike></p>
                <p class="preco">R$1.730,61</p>

            </div>
        </section> -->
        

        <footer id="rodape">
            <p id="formasPagamento">
                <b>Formas de pagamento:</b>
            </p>
            <img src="./img/Cartao.jpeg" alt="Formas de pagamento" height="70">
            <p>&copy; Recode Pro </p>
        </footer>
        
</body>

</html>