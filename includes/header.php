	<head>
    <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?12TuUYbWfp7zliiGqE9QwKJncF8ZSlmm';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
    </head>
    <header>
        <h1><a href="index.php">DietFitLine<strong>Consulta Dietetica</strong></a></h1>
        <nav>
        	<div class="social-icons">
                <a href="https://plus.google.com/117789069712565233757/posts?hl=es&tab=XX" class="icon-3"></a>
            	<a href="http://www.facebook.com/dietfitline.consultadietetica" class="icon-2"></a>
            	<a href="https://twitter.com/#!/DietFitLine" class="icon-1"></a>
            </div>
            <ul class="menu">
                <li <?php if ($selected == "inicio") echo $current_class; ?>><a href="index.php">Inicio</a></li>
				<li <?php if ($selected == "nutricion") echo $current_class; ?>><a href="nutricion.php">Nutricion</a></li>
                <li <?php if ($selected == "entrenamiento") echo $current_class; ?>><a href="charlas.php">Charlas preparadas</a></li>
				<li <?php if ($selected == "horario") echo $current_class; ?>><a href="horario.php">Horarios</a></li>
                <li <?php if ($selected == "contacto") echo $current_class; ?>><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- class="current" para que se vea en azul, como sera en php???-->