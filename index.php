<?php
  $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if(isset($_GET['lang']) && $_GET['lang'] == 'en' || $browserLang == 'en') {
    require_once('./lang/en.php');
  } else {
    require_once('./lang/es.php');
  }
?><!DOCTYPE html>
<html lang="es" class="no-js">
<head>
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WN62B39');</script>
    <!-- End Google Tag Manager -->



  <!-- Verificamos que somos los dueños del dominio en facebook -->
  <meta name="facebook-domain-verification" content="tfrtv2a9fv8z3hmlilwb0ziyqzszaa" />
  <!-- Etiqueta de verificacion de search console -->
  <meta name="google-site-verification" content="fDjWLOXUBnHPEI2EpD1aH4T3YyiMoYQere6sSBnATnQ" />
  <!-- enlace a version AMP -->
  <link rel="amphtml" href="https://arqly.co/amp.html">
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.webp">
  <!-- Author Meta -->
  <meta name="author" content="Stevens Armando Sánchez Delgadillo">
  <!-- Meta Description -->
  <meta name="description" content="Servicio de diujo en Revit, Modelado 3d, dibujo estructural en Revit, Servicio de dibujo en climatización, servicio de dibujo eléctrico en Revit.">
  <!-- Meta Keyword -->
  <meta name="keywords" content="Delineante en revit, Dibujo estructural en Revit, Nube de puntos en revit, Servicio de dibujo MEP en Revit, Servicio de render Profesional, Diseño de familias personalizadas en revit, Modelado de nube de puntos en Revit">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title><?php echo lang('html_title'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.5/lazysizes.min.js"></script>
  <!-- PINTEREST -->
    <meta name="p:domain_verify" content="c92bbe54ab548b380edca643851ab4cb"/>

    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN62B39"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<!-- header -->
      <header id="header" id="home">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/"><img src="img/logo2.png" alt="logo de arquidis" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a style="color: yellowgreen;"  href="/">Servicios</a></li>
                <li><a href="somos.html"><?php echo lang('quienes_somos'); ?></a></li>
                <li><a href="contacto.html"><?php echo lang('contact'); ?></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
<!-- #header -->


    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
          <div class="banner-content col-lg-9 col-md-12">
            <img src="img/revit.png" alt="logo de revit">
            <h1 class="text-white">Servicio de dibujo en Revit</h1>
            <h6 style="margin-top: 10px;">ESTRUCTURA - ARQUITECTURA - MODELADO 3D - MEP</h6>
            <p class="text-white h3">REVIT - NAVISWORKS</p>
            <p style="font-size: 1.3em;   line-height: 1.5em;" class="text-white m-3">
            <strong class="h3 text-white">¿No tienes tiempo y te urge entregar tus proyectos? </strong> <br>llámanos, lo haremos más rápido, mejor y mucho más económico de lo que te imaginas.</p>
            <a href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit" class="btn btn-outline-light btn-lg" role="button">Llamar / Whatsapp: +57 3146688920</a><br>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->



    <!-- arquitectura 11-->
    <section class="home-video-area">
      <div class="container-fluid">
        <div class="row justify-content-end align-items-center">
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Dibujo arquitectónico</p>
            <h1>Arquitectura</h1>
            <p><span>Modelado 3d - Anotación - planimetria</span></p>
            <p><?php echo lang('modelado_3d_description'); ?></p>
            <a class="callaction-btn" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
          <section class="video-area col-lg-6 no-padding">
            <div class="overlay overlay-bg"></div>
            <div class="containers">
              <div class="video-content">
                <img class="img-fluid lazyload" data-src="img/index/1.webp" alt="images custom family revit">
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- arquitecura 11-->

    <!-- Estructura 22-->
    <section class="home-aboutus-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8 no-padding about-left">
            <img class="img-fluid lazyload" data-src="img/index/2.webp" alt="team revit draftmen">
          </div>
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Dibujo estructural</p>
            <h1 class="text-white">Estructura</h1>
            <p><span>Estructura metálica - Madera - Hormigón</span></p>
            <p>Dedicate al diseño estructural que nosotros nos encargamos de los planos. Generación de detalles, modelado 3D, cantidades, despieces, anotación.</p>
            <a class="callaction-btn" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20estructural">WhatsApp clic aquí</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Estructura 22 -->

    <!-- Electricidad 33-->
    <section class="home-video-area">
      <div class="container-fluid">
        <div class="row justify-content-end align-items-center">
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Dibujo Eléctrico MEP</p>
            <h1>Electricidad</h1>
            <p><span>Modelado 3d - Anotación - planimetria</span></p>
            <p>Te ayudamos con los planos de tu proyecto de arquitectura, modelando en 3d y creación de planos. Te ayudaremos con las cantidades de obra y, si lo requiere, podemos ayudarle con el diseño.  Te enviaremos los planos en CAD, RVT y PDF.</p>
            <a class="callaction-btn" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
          <section class="video-area col-lg-6 no-padding">
            <div class="overlay overlay-bg"></div>
            <div class="containers">
              <div class="video-content">
                <img class="img-fluid lazyload" data-src="img/index/1.jpg" alt="Revit electricidad">
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- Electricidad 33-->




    <!-- ización 44-->
    <section class="home-aboutus-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8 no-padding about-left">
            <img class="img-fluid lazyload" data-src="img/index/8.webp" alt="autocad drafting service">
          </div>
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Dibujante MEP</p>
            <h1 class="text-white">Climatización</h1>
            <p><span>Dibujantes calificados</span></p>
            <p>Dibujo y modelado del sistema de climatización en Revit. Cantidades, planos, análisis y modelado. Contrata el servicio de dibujo.</p>
            <a class="btn btn-info"    href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Climatización 44 -->

    <!-- Animamación 55-->
    <section class="home-video-area">
      <div class="container-fluid">
        <div class="row justify-content-end align-items-center">
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Informes</p>
            <h1>Informe de interferencias</h1>
            <p><span>Interferencias - Simulación - Programación 4D</span></p>
            <p>Asegúrate de construir sin errores en el diseño. Te entregaremos un informe detallado de: errores en los planos, interferencias entre elementos e interferencias entre redes. </p>
            <a class="callaction-btn" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
          <section class="video-area col-lg-6 no-padding">
            <div class="overlay overlay-bg"></div>
            <div class="containers">
              <div class="video-content">
                <img class="img-fluid lazyload" data-src="img/index/navis.webp" alt="images custom family revit">
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- Animamación 55 -->

    <!-- Nube de puntos 66-->
    <section class="home-aboutus-area">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8 no-padding about-left">
            <img class="img-fluid lazyload" data-src="img/index/7.webp" alt="autocad drafting service">
          </div>
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Modelado de Nube de puntos</p>
            <h1 class="text-white">Topografía</h1>
            <p><span>RCS - RCP - OBJ - DXF   AND MORE</span></p>
            <p>
              Realizamos modelado en Revit o CAD desde una nube de puntos. Generación de planos para levantamientos topográficos.
            </p>
            <a class="btn btn-light"    href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Nube de puntos 66 -->

    <!-- Animamación 55-->
    <section class="home-video-area">
      <div class="container-fluid">
        <div class="row justify-content-end align-items-center">
          <div class="col-lg-4 no-padding about-right">
            <p class="top-title">Instalaciones</p>
            <h1>Redes MEP</h1>
            <p><span>Agua fria - Sanitaria - Incendio - Voz y datos</span></p>
            <p>Servicio de dibujo de instalaciones: red de incendio, agua fría y caliente, sanitaria, aguas lluvias, voz y datos. Modelado y emisión de planos.</p>
            <a class="callaction-btn" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
          <section class="video-area col-lg-6 no-padding">
            <div class="overlay overlay-bg"></div>
            <div class="containers">
              <div class="video-content">
                <img class="img-fluid lazyload" data-src="img/index/x3.jpg" alt="images custom family revit">
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- Animamación 55 -->

    <!-- Start so what are you waiting for -->
    <section class=" relative section-gap">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="m-4">¿Entonces, Qué esperas?</h1>
            <p class="m-4 ">
              Escríbenos y cuéntanos en qué proyecto podemos ayudarte
            </p>
            <a class="callaction-btn m-4" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit">WhatsApp clic aquí</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End callaction Area what are you waiting for -->




    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row text-center d-flex justify-content-between">
          <!-- 1 -->
          <div class="col-sm">

            <div class="single-footer-widget ">
              <a class="h4 text-white" href="https://api.whatsapp.com/send?phone=573146688920&text=Buen%20d%C3%ADa%2C%20quiero%20saber%20m%C3%A1s%20sobre%20el%20dibujante%20en%20Revit"><img src="img/whatsapp.webp" alt="icono de localización">&nbsp;&nbsp;</a>
            </div>

          </div>
          <!-- 2 -->
          <div class="col-sm">

            <div class="single-footer-widget ">
              <a class="h4 text-white" href="tel:+573146688920"><img src="img/icons/2.png" alt="icono de localización">&nbsp;&nbsp;+57 3146688920</a>
            </div>

          </div>
          <!-- 3 -->
          <div class="col-sm ">

            <div class="single-footer-widget">
              <a class="h4 text-white" href="tel:+57 3146688920"><img src="img/icons/2.png" alt="icono de localización">&nbsp;&nbsp;+57 3146688920</a>
            </div>
          </div>
          <!-- fin row -->
        </div>
        <div>
          <p class="h3 text-center text-white">Llámanos desde cualquier lugar del mundo</p>
          <p class="h5 text-center text-white">Calle 3D - 19 - 20 Villavicencio - Colombia</p>
        </div>
        <!-- fin container -->
      </div>
      <!-- fin footer -->
    </footer>
    <!-- End footer Area -->



    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>


    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Dibujante MEP",
      "image": "https://tuhatch.arquidis.com.co/img/index/6.webp",
      "description": "Te ayudamos con los planos de tu proyecto, modelado 3d y creación de planos. Así mismo, con cantidades de obra y, si lo requiere, podemos ayudarle con el diseño. Te enviaremos los planos en CAD, RVT y PDF.",
      "brand": "revit",
      "sku": "1",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "bestRating": "5",
        "worstRating": "5",
        "ratingCount": "2",
        "reviewCount": "2"
      },
      "review": [{
        "@type": "Review",
        "name": "Comentario 1",
        "reviewBody": "100% recomendados!",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5",
          "worstRating": "5"
        },
        "datePublished": "2020-10-08",
        "author": {"@type": "Person", "name": "Laura Camila sánchez"},
        "publisher": {"@type": "Organization", "name": "Gran equipo profesional, rápidos y buenos."}
      },{
        "@type": "Review",
        "name": "Comentario 2",
        "reviewBody": "Me salvaron!",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5",
          "worstRating": "5"
        },
        "datePublished": "2020-07-08",
        "author": {"@type": "Person", "name": "Fernanda Carolina"},
        "publisher": {"@type": "Organization", "name": "Que bueno una empresa así, que se dedique exclusivamente al dibujo."}
      }]
    }
    </script>

  </body>
</html>
