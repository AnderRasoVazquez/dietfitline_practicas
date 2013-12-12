<!DOCTYPE html>
<html lang="es">
<head>
    <title>Horario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
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
    $selected = "horario";
    $current_class = ' class="current"';
    include ("includes/header.php");
?>
<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-1">
                    	<h2 class="p3"><span class="color-1">Nuestro</span> horario</h2>
                        <div class="wrap box-2 border-1">
                            <div>
                            	<p><strong>Lun y Mie</strong></p>
                                <p class="color-1">4:30 - 8:30</p>
                                <p>De momento tenemos la posibilidad de aceptar gente sin cita previa.</p>
                            </div>
                            <div>
                            	<p><strong>Martes</strong></p>
                                <p class="color-1">9:30 - 13:30</p>
                                <p>De momento tenemos la posibilidad de aceptar gente sin cita previa.</p>
                            </div>
                            <div class="last">
                            	<p><strong>Jue y vie</strong></p>
                                <p class="color-1">9:30 - 13:30</p>
                                <p>De momento tenemos la posibilidad de aceptar gente sin cita previa.</p>
                            </div>
                        </div>
                        <!--
                        <div class="wrap box-2 border-1">
                            <div>
                                <p class="color-1">12:00</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                            <div>
                                <p class="color-1">12:30</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                            <div class="last">
                                <p class="color-1">11:00</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                        </div>
                        <div class="wrap box-2">
                            <div>
                                <p class="color-1">18:00</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                            <div>
                                <p class="color-1">17:30</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                            <div class="last">
                                <p class="color-1">17:00</p>
                                <p>Información sobre nuestras actividades.</p>
                            </div>
                        </div>
                    -->
                    </div>
                    <div class="col-2">
                        <h2 class="p3"><span class="color-1">Hasta</span> Cuando?</h2>
                        <p class="p2"><strong>Desde marzo hasta mayo</strong></p>
                        <p>Es el tiempo que durarán nuestras prácticas, así que aprobecha:</p>
                        <img src="images/page1-img1.jpg" alt="" class="img-border pad-1">
                        <ul class="list-2">
                        	<li><a href="nutricion.php">Consulta Gratuita</a></li>
                            <li><a href="nutricion.php">Servicio de seguimiento</a></li>
                            <li><a href="charlas.php">Charlas de nutrición</a></li>
                            <li><a href="horario.php">Consulta nuestro horario</a></li>
                            <li><a href="contacto.php">Contáctanos o pide cita</a></li>
                        </ul>
                        <a href="index.php" class="button top-5">Ultimas noticias</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
<?php include("includes/footer.php");?>