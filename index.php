<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.3.js"></script>
	  <script src="js/tms_presets.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	  <script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
    <script>
		$(window).load(function(){
			$('.slider')._TMS({
			prevBu:'.prev',
			nextBu:'.next',
			pauseOnHover:true,
			pagNums:false,
			duration:800,
			easing:'easeOutQuad',
			preset:'Fade',
			slideshow:7000,
			pagination:'.pagination',
			waitBannerAnimation:false,
			banners:'fade'
			})
		}) 	
    </script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
<?php
    $selected = "inicio";
    $current_class = ' class="current"';
    include ("includes/header.php");
?>
<!--==============================content================================-->
    <section id="content"><div class="ic">Div sin mas</div>
        <div class="container_12">
          <div class="grid_12">
            <div class="slider">
              <ul class="items">
                 <li><img src="images/slider-1.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Asistencia<span>Nutricional</span></p>
                        <p class="font-2">Nuestra consulta ofrece un servicio de valoracion nutricional y seguimiento. Te mostraremos como se lleva una alimentacion saludable.</p>
                        <a href="nutricion.php">Como lo hacemos</a>
                    </div>
                </li>
                <li><img src="images/slider-2.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Charlas<span>de Nutricion</span></p>
                        <p class="font-2">Conoces los macronutrientes? Crees que la dieta Dukan funciona? Apuntate a nuestras charlas y conoce los mitos y verdades de la nutricion.</p>
                        <a href="charlas.php">Charlas preparadas</a>
                    </div>
                </li>
                <li><img src="images/slider-3.jpg" alt="">
                    <div class="banner">
                        <p class="font-1">Contacto<span></span></p>
                        <p class="font-2">Puedes pedir cita directamente en nuestra consulta o hacerlo desde cualquier lugar mediante el siguiente formulario de contacto. Enseguida te responderemos.</p>
                        <a href="contacto.php">Contactar</a>
                    </div>
                </li>
              </ul>
              <div class="pagination">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
              </div>  
            </div>
          </div>	
          <div class="grid_12 top-1">
          	<div class="block-1 box-shadow">
            	<p class="font-3">DietFitLine es un equipo de tecnicos superiores en dietetica en su periodo de practicas formado por Aitor y Ander que en un periodo de 3 meses (desde marzo a mayo) ofreceran <a href="nutricion.php" class="color-1">ASISTENCIA NUTRICIONAL GRATUITA</a>, MEDICIONES ANTROPOMETRICAS asi como el estudio de habitos fisiologicos a toda persona interesada en estos temas. Los encontrareis en el <a href="contacto.php" class="color-1">polideportivo de Santurce</a>.</p>
</div>
          </div>
          <div class="grid_12 top-1">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Proximos</span> eventos</h2>
                        <div class="wrap box-1">
                            <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>Disponemos de charlas sobre nutrición</strong></p>
                                <p>Disponemos de charlas de dietas cetogénicas (Dukan, Atkins...etc) y de desayuno equilibrado. Si estás interesado en alguna de estas o en otra diferente háznoslo saber a través del chat o del <a href="contacto.php">formulario de contacto</a>.</p>
                            </div>
                        </div>
                        <div class="wrap box-1 top-2">
                            <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p calss="p2"><strong>Abrimos el servicio de seguimiento alimentario del 4 de marzo hasta mayo</strong></p>
                                <p>Si estás interesado en llevar un control de tu alimentación comunícanoslo en la consulta, por el chat o por el <a href="contacto.php">formulario de contacto</a>.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Servicios</span> disponibles</h2>
                        <ul class="list-1">
                            <li><a href="nutricion.php">Consulta Gratuita</a></li>
                            <li><a href="nutricion.php">Servicio de seguimiento</a></li>
                            <li><a href="charlas.php">Charlas de nutrición</a></li>
                            <li><a href="horario.php">Consulta nuestro horario</a></li>
                            <li><a href="contacto.php">Contáctanos o pide cita</a></li>
                        </ul>
                      <div class="form-search">
                        	<h2><span class="color-1">Suscribete a</span> nuestro boletin</h2>
                            <?php
if (!isset($_POST['email'])) {
?>    
                        <form id="form-search" method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <fieldset>
                              
                              <label><input name="email" type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                              <a href="#" onClick="document.getElementById('form-search').submit()" class="search_button">Enviar</a>
                            </fieldset>  
                        </form> 
                          <?php
}else{
  $mensaje="Peticion de suscripcion al boletin de DietFitLine";
  $mensaje.= "\nEmail: ".$_POST['email'];
  $destino= "dietfitline@gmail.com";
  $remitente = $_POST['email'];
  $asunto = "DietFitLine suscripcion: ".$_POST['email'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <br/ >
  <p style="color: green;">Felicidades! Su petición se ha enviado correctamente, recibirá los siguientes boletines desde ahora hasta junio.</p>
<?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
<?php include("includes/footer.php");?>		