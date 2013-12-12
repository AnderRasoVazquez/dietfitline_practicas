<!DOCTYPE html>
<html lang="es">
<head>
    <title>Charlas preparadas</title>
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
    $selected = "entrenamiento";
    $current_class = ' class="current"';
    include ("includes/header.php");
?>
<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="container_12">
          <div class="grid_12">
          	<div class="box-shadow">
            	<div class="wrap block-2">
                    <div class="col-3">
                    	<h2 class="p3"><span class="color-1">Charlas</span> programadas</h2>
                        <p class="p2"><strong>Descubre la verdad y rechaza a los farsantes</strong></p>
                        <p class="p4">En principio hemos pensado en ofrecer las siguientes charlas:</p>
                        <ul class="list-2 p5">
                        	<li><a href="#">Macronutrientes</a></li>
                            <li><a href="#">Desayuno equilibrado</a></li>
                            <li><a href="#">Alimentación en el deporte</a></li>
                            <li><a href="#">Dietas cetogénicas (Dukan)</a></li>
                           
                        </ul>
                        <p>¿Has pensado que sería interesante una charla sobre un tema en concreto?</p>
                        <a href="contacto.php" class="button top-3">Aceptamos Sugerencias</a>
                    </div>
                    <div class="col-4">
                    	<h2 class="p3"><span class="color-1">Charlas</span> preparadas</h2>
                        <p class="p2"><strong>Estamos para informar</strong></p>
                        <p>Vista la inmensa cantidad de información que podemos encontrar y sabiendo que no toda es cierta nosotros desmentiremos los mitos y expondremos las verdades de la nutrición.</p>
                        <div class="wrap box-1 top-4">
                            <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>FECHA - Los macronutrientes</strong></p>
                                <p>Breve resumen de los temas que trataremos.</p>
                            </div>
                        </div>
                        <div class="wrap box-1 top-2">
                            <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                            <div class="extra-wrap">
                                <p class="p2"><strong>FECHA - La importancia de un desayuno equilibrado</strong></p>
                                <p>Breve resumen de los temas que trataremos.</p>
                            </div>
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