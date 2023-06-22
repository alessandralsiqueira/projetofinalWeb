<!doctype html>

<html lang="pt-br">

<head>
    <title> pagina de exemplo de DOM </title>
    <meta charset="utf-8">
    <meta name="author" content="Jonathan">
    <meta name="description" content="descrição bacanuda">
    <meta name="keywords" content="html5, tecnologia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div id="principal">
        <header class="hero" >

           <!-- <div class="top-bar">
                <p>olá, </p>
            </div>-->

            <!--<div class="div-content">
                <h1>Um título qualquer!</h1>
            </div>-->

           <div class="hero-content" >
                <h1>Curso programador WEB</h1> 
                <h2>Cadastre-se em nossa newsletter</h2>
                <div id="newsletterForm" name="f1">
                    <label for="txtEmail">Email:</label>
                    <input type="email" name="email"id="txtEmail" autocomplete="off">
                    <button id="btn" onblur="validacaoEmail(f1.email)">Enviar</button>
                </div>
                <div id="newsletterFeedback">

                </div>
            </div>
        </header>

        <main>

            <section class="content-section">
                <div class="card card-1">
                    <img src="imagens/card_01.png" alt="">
                    <p>Seletores</p>
                </div>

                <div class="card card-2">
                    <img src="imagens/card_02.jpg" alt="">
                    <p>Posicionamento</p>
                </div>

                <div class="card card-3">
                    <img src="imagens/card_03.jpg" alt="">
                    <p>Fontes</p>
                </div>
            </section>

            <section class="content-section">
                <article>
                    <header class="content-header">
                        <h2>Titulo do article</h2>
                    </header>
                    <p>Paragrafo 1</p>
                    <p>Paragrafo 2</p>
                </article>
            </section>

        </main>

        <footer class="rodape">

            <p>Copyright &copy; 2023</p>

        </footer>
    </div>

    <script src="objetos.js"></script>
   
    <!--<script src="newsletter.js"></script>
    <script src="criarElemento.js"></script>
    
    <script src="remover.js"></script>-->

</body>

</html>