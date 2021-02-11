<!DOCTYPE html>
<html lang="en">
<?php
  include("secciones/head.php");
 ?>

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
            <br>
            <br>
            <br>
            <h1 class="title-single">Contactate con Nosotros</h1>
            <span class="color-text-a">Nuestra oficina está ubicada en:<br>
              Municipalidad de Quispicanchi - Urcos, Plaza de Armas S/N. <br>
              Telefono: 084-307050  <br>
              Horario de atención: De Lunes a Viernes  <br>
              Mañana:  08:00 a.m. a 13:00 p.m.  <br>
              Tarde:   14:00 p.m. a  17:00 p.m. <br></span>

          </div>

        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contactanos
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12" style="text-align: center;">
          <span class="citas">“LOS DERECHOS son los caminos hacia una vida digna”. <br>
          “LOS DEBERES son la manera que debemos tramitar ese camino”.</span>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4609.980532299713!2d-71.62486634513348!3d-13.687162325636727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cd3a9e2f7bad14e!2sMunicipalidad+Provincial+de+Quispicanchi+-+Urcos!5e0!3m2!1ses!2spe!4v1562866088803!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-sm-12 pt-5 mt-5 section-t8">
          <div class="row">
            <div class="col-md-7">

              <form class="form-a contactForm" action="emailsend.php" method="post" role="form">
                <div id="sendmessage">gracias por enviar su mensaje!..le estaremos respondiendo en cualquier momento</div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="ingrese su nombre" data-rule="minlen:4" data-msg="por favor ingrese al menos 4 caracteres">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="ingrese su email" data-rule="email" data-msg="por favor ingrese un correo valido">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="ingrese un motivo" data-rule="minlen:4" data-msg="por favor ingrese minimo 8 caracteres">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Escriba aca su mensaje"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Enviar Mensaje</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Encuentranos en:</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Facebook.
                      <span class="color-a">Demuna Andahuaylillas - Quispicanchi - Cusco</span>
                    </p>
                    <p class="mb-1">Telefono.
                      <span class="color-a">084-307050</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Nuestras redes Sociales</h4>
                  </div>
                  <div class="icon-box-content"> 
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://www.facebook.com/Demuna-Andahuaylillas-Quispicanchi-Cusco-907146636034970/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->

  <!--/ footer Star /-->
  <?php include("secciones/footer.php"); ?>
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
