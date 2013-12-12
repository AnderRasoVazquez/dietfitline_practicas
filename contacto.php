<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contacto</title>
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
    $selected = "contacto";
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
                    	<h2><span class="color-1">Donde</span> estamos</h2>
                        <div class="map img-border">
						  <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Instituto+Municipal+de+Deportes+de+Santurtzi,+Santurce&amp;aq=1&amp;oq=instituto+m+santurce&amp;sll=43.336122,-2.982052&amp;sspn=0.283173,0.676346&amp;t=h&amp;ie=UTF8&amp;hq=Instituto+Municipal+de+Deportes&amp;hnear=Santurce,+Vizcaya,+Pa%C3%ADs+Vasco&amp;ll=43.327605,-3.026834&amp;spn=0.017701,0.042272&amp;z=14&amp;iwloc=A&amp;cid=16496639290675585150&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Instituto+Municipal+de+Deportes+de+Santurtzi,+Santurce&amp;aq=1&amp;oq=instituto+m+santurce&amp;sll=43.336122,-2.982052&amp;sspn=0.283173,0.676346&amp;t=h&amp;ie=UTF8&amp;hq=Instituto+Municipal+de+Deportes&amp;hnear=Santurce,+Vizcaya,+Pa%C3%ADs+Vasco&amp;ll=43.327605,-3.026834&amp;spn=0.017701,0.042272&amp;z=14&amp;iwloc=A&amp;cid=16496639290675585150" style="color:#0000FF;text-align:left">Ver mapa entero</a></small>
                        </div>
                        <dl>
                            <dt class="color-1"><strong>Estamos en enfermería, junto a los vestuarios<br>En el gabinete del fisio</strong></dt>
                            <!--<dd><span>Telefono:</span>944 999 999</dd>-->
                            <dd><span>E-mail:</span><a href="mailto:dietfitline@gmail.com" class="link">dietfitline@gmail.com</a></dd>
                        </dl>
                    </div>
                    <div class="col-4">
                    	<h2><span class="color-1">Formulario</span> de contacto</h2>
                    <?php
if (!isset($_POST['email'])) {
?>    
                        <form id="form" method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <fieldset>
                              <label><input name="nombre" type="text" value="Nombre" onBlur="if(this.value=='') this.value='Nombre'" onFocus="if(this.value =='Nombre' ) this.value=''"></label>
                              <label><input name="email" type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''"></label>
                              <label><input name="telefono" type="text" value="Telefono" onBlur="if(this.value=='') this.value='Telefono'" onFocus="if(this.value =='Telefono' ) this.value=''"></label>
                              <label><input name="asunto" type="text" value="Asunto" onBlur="if(this.value=='') this.value='Asunto'" onFocus="if(this.value =='Asunto' ) this.value=''"></label>
                              <label><textarea name="mensaje" onBlur="if(this.value==''){this.value='Mensaje'}" onFocus="if(this.value=='Mensaje'){this.value=''}">Mensaje</textarea></label>
                              <div class="btns"><a href="#" class="button" onClick="document.getElementById('form').reset()">Borrar</a><a href="#" class="button" onClick="document.getElementById('form').submit()">Enviar</a></div>
                            </fieldset>  
                          </form> 
                          <?php
}else{
  $mensaje="Mensaje del formulario de contacto de DietFitLine";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTeléfono: ". $_POST['telefono'];
  $mensaje.= "\nAsunto: ". $_POST['asunto'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "dietfitline@gmail.com";
  $remitente = $_POST['email'];
  $asunto = "DietFitLine cliente: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <br/ >
  <p><strong>¡Felicidades! Su mensaje se ha enviado correctamente, responderemos lo antes posible.</strong></p>
  <img src="images/smile.jpg" width="200" style="margin-left:150px; margin-top:80px">
<?php
}
?>
                    </div>
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
<?php include("includes/footer.php");?>