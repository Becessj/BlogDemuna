<!DOCTYPE html>
<html lang="en">
<head>
   <title>Demuna Ollantaytambo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/styleb.css" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

    function commentSubmit(){
      if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
        alert('Enter your message !');
        return;
      }
      var name = form1.name.value;
      var comments = form1.comments.value;
      var xmlhttp = new XMLHttpRequest(); //http request instance

      xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
        if(xmlhttp.readyState==4&&xmlhttp.status==200){
          document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
        }
      }
      xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
      xmlhttp.send();
    }

      $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
      });

  </script>

  <style>
    body{
      background-color: #ececec;
    }
  </style>
</head>

<body>

  <!--/ Nav Star /-->
  <?php
    include("secciones/nav.php");
   ?>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Dejanos tu comentario</h1>
            <span class="color-text-a">
              antes de comentar recuerde que el identificador de su dispositivo esta siendo almacenado por lo cual comentemos con respeto y responsabilidad...Demuna Ollantaytambo ayudamos el presente para un mejor futuro</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Buzon de Sugerencias
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
 <div id="container" class="container-fluid">
    <div class="page_content"><p><h2 style="height: 2rem; ">
        Escriba aca...
      </div>
      <div class="comment_input">
          <form name="form1">
            <input type="text" name="name" placeholder="Nombre..."/></br></br>
              <textarea class="tamaño" name="comments" placeholder="Escriba aca su comentario..."></textarea></br></br>
              <a href="#" onClick="commentSubmit()" class="button">Publicar</a></br>
          </form>
      </div>
      <div id="comment_logs">
        Espere cargando comentarios...
      </div>
  </div>
  <!--/ Contact End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Encuentranos</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Nos puedes ubicar en ...... de lunes a viernes de .....
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Telefono .</span>982-233-222</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contacto@example.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Entidades Locales Relacionadas</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Policia</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Bomberos</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Defensoria del Pueblo</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">serenazo</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Posta de salud</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Otras Demunas</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Cusco</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Pisac</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Urubamba</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Calca</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Chincheros</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/menahenhb">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://mobile.twitter.com/home">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>

            </ul>
          </div>

          <div class="credits">

            diseñado por <a href="https://www.guamanpoma.org">Guaman Poma de Ayala Cusco</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
