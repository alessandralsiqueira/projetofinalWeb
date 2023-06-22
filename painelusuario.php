<?php 
session_start();

if(!isset($_SESSION['id_usuario'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_land.css">

    <title>Crescer Online</title>
  </head>
  <body style="background-color: #051c38;">

<!-- MENU MOBILE -->
  <input type="checkbox" id="hamburger-input" class="burger-shower" />
  <label id="hamburger-menu" for="hamburger-input">
    <nav id="sidebar-menu">
      <h2>X</h2>
      <ul id="menu-mobile">
        <li>
            <a href="logoff.php"><b>SAIR</a></b>
        </li>
          <li>
            <a href="#"><b>QUEM SOMOS</b></a>
          </li>
          <li>
              <a href="#sobre"><b>SOBRE</b></a>
          </li>
          <li>
            <a href="#contato"><b>CONTATO</b></a>
          </li>
          <li><a href="#"><img src="images/fb.png"></a></li>
          <li><a href="#"><img src="images/insta.png"></a></li>
          <li><a href="#"><img src="images/tt.png"></a></li>
          <li><ahref="#"><img src="images/carrinho.png"></a></li>
      </ul>
    </nav>
  </label>
<div class="overlay"></div>

<!-- MENU DESKTOP -->
<div class="container-fluid" id="menutopo">
  <div class="row">
  <div class="col" id="col2">
      <div id="divimgtopo" style ="margin-top: 20px; margin-left: 20px">
        <img src="images/display.svg" width="70" height="80">
      </div>
    </div>

    <div class="col" id="col1">
      <ul id="itenstopo">
        <li><a href="logoff.php"><b>SAIR</a></b></li>
        <li><a href="#">QUEM SOMOS</a></li>
        <li><a href="#sobre">SOBRE</a></li>
        <li><a href="#contato">CONTATO</a></li>
      </ul>
    </div>
   
    <div class="col" id="col3">
      <ul id="itenstopoleft">
        <li><a href="#"><img src="images/fb.png"></a></li>
        <li><a href="#"><img src="images/insta.png"></a></li>
        <li><a href="#"><img src="images/tt.png"></a></li>
        <li><a href="#"><img src="images/carrinho.png"></a></li>
      </ul>
    </div>
  </div>
</div>
 
<div id="divbanner">
  <div class="container divfontbanner">
    <font id="fonttextbanner">
      Cursos perfeitos para você, <br>
      <?php echo $_SESSION['nome'];?>  
    </font>
  </div>
  <div class="container" id="divbotaobanner">
    <button id="botaobanner"><a style="text-decoration: none; color: white;" href="#produtos">NOSSOS CURSOS</a></button>
  </div>
</div>    

<div class="container">
  <div id="divtopo">
      <div class="row">
        <div class="col">
            <img id="imgdivtopo" src="images/box_cursos_online.png">
        </div>
        <div class="col">
          <div id="fonttopodiv" class="container">
            <font id="fonttopo">
              <a name="sobre">História da Crescer Online</a>
            </font>
            <br>
            <font id="fonttopo2">
              _____________
            </font>
          </div>
          <br><br>
          <div class="container">
            <font id="fonttopo3">
              Lorem ipsum dolor sit amet, consectetur adipiscing<br>
              elit, sed do eiusmod tempor incididunt ut labore et<br>
              dolore magna aliqua. Ut enim ad minim veniam, quis<br>
              nostrud exercitation ullamco laboris nisi ut aliquip ex<br>
              ea commodo consequat. Lorem ipsum dolor sit<br>
              amet, consectetur adipiscing elit, sed do eiusmod<br>
              tempor incididunt ut labore et dolore magna.
            </font>
          </div>
      </div>
  </div>
</div>

  <div id="divprodutos" class="container">
    <font id="fontprodutos">
      <a name="produtos">Cursos</a>
    </font>
    <br>
    <font style="color: #d6613e;">
      _____________
    </font><br>
    <br><br>
  </div>


<div class="container">
  <div class="row">
    <div class="col">
      <a href="#abrirModal"><img src="images/arte-01.png" width="306" height="300"></a>
      <div class="divprodbottom">
        <font class="produtotitle">
          <br>
          <a class="linkmodal" href="#abrirModal">Empreendedorismo</a>
          <div id="abrirModal" class="modal1">
            <a href="#fechar" title="Fechar" class="fechar1">x</a>
            <div style="justify-content: left; right: 50px;" class="container"><img src="images/modalfoto.png"></div>
            
          </div>
          <br><br>
        </font>
        <font class="produtodesc">
          
           Carga Horária: 360 horas
        </font>
      </div>
    </div>
    <div class="col">
      <a href="#abrirModal"><img src="images/best.png" width="306" height="300"></a>
      <div class="divprodbottom">
        <font class="produtotitle">
          <br>
          <a class="linkmodal" href="#abrirModal">Edição de Vídeo</a>
          <div id="abrirModal" class="modal1">

          </div>
          <br><br>
        </font>
        <font class="produtodesc">
        Carga Horária: 180 horas
        </font>
      </div>
    </div>
    <div class="col">
      <a href="#abrirModal"><img src="images/imagem_curso_372.png" width="306" height="300"></a>
      <div class="divprodbottom">
        <font class="produtotitle">
          <br>
          <a class="linkmodal" href="#abrirModal">Gestão e Liderança</a>
          <div id="abrirModal" class="modal1">
          </div>
          <br><br>
        </font>
        <font class="produtodesc">
        Carga Horária: 250 horas
        </font>
      </div>
    </div>
  </div>
</div>

  <div class="container botao">
    <button id="botao">VER MAIS</button>
  </div>

  <div class="container">
  <div class="row">
    <div class="col">
      <div class="container">
      <font id="fonttitlebottom">
        <a name="contato">Se interessou pelos nossos<br>
        serviços? Manda uma<br>
        mensagem pra gente. :)</a><br>
      </font>
      </div>

      <div class="divform" id="divlabel">
        <div class="form-group col-md-4"><label class="label">NOME</label></div>
        <div class="form-group col-md-4"><label class="label">TELEFONE</label></div>
        <div class="form-group col-md-4"><label class="label">EMAIL</label></div>
        <div class="form-group col-md-4"><label class="label">MENSAGEM</label></div>
      </div>
      <div class="divform" id="divinput">
        <div class="form-group col-md-4"><input class="input" type="text" placeholder="Ex.: Renata Lopes"></div>
        <div class="form-group col-md-4"><input class="input" type="text" placeholder="(xx) x xxxx.xxxx"></div>
        <div class="form-group col-md-4"><input class="input" type="text" placeholder="exemplo@exemplo.com.br"></div>
        <div class="form-group col-md-4"><input class="input" type="text" placeholder="Digite aqui a sua mensagem"></div>
      </div>
      <div class="container botao2">
        <button id="botao2">ENVIAR</button>
      </div>
    </div>
    
    <div class="col" id="grid2bottom">
      <div class="container" id="div2grid">
        <font id="fontdiv2grid">
          Você também pode<br>
          nos fazer uma visita.
          <div id="imgdiv2grid">
            <img id="imgdiv2grids" src="images/imgdiv2grid.png">
          </div>
          <div id="locationpin">
            <img src="images/locationpin.png">
            <font id="fontlocationpin">
              R. Hermílio Arantes, 1040 - Vila dos Coqueiros, Linhares - ES.
            </font>
            <div id="divbotaodiv2grid">
                <button id="botaodiv2grid">TRAÇAR ROTA</button>
            </div>
          </div>
        </font>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div id="divbla"><img src="images/iconizer-display.svg" width="100" height="100"></div>
      </div>
      <div class="col">
        <div id="divrodapegrid">
          <ul>
            <li class="bold"><img src="images/tel.png"> +55 (27) 3312.4057</li>
            <li class="bold"><img src="images/mail.png"> contato@cresceronline.com.br</li>
            <li class="normal">____</li>
            <li class="normal"><img src="images/locationgrey.png"> R. Hermílio Arantes, 1040 - Vila dos<br>
            Coqueiros, Linhares - ES.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="container" id="hrrodape">
    <hr style="border: 1px solid #C8C8C8;">
    <font style="text-align: center; font: normal normal 300 12px/20px Noto Sans; letter-spacing: 0px; color: #5B5B5B;">
      <center>Crescer Online - Copyright 2020 © Todos os direitos reservados.</center>
    </font>
  </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>