<!DOCTYPE html>
<html lang="en">
<?php 
$servicio=null;
if(isset($_GET['servicio'])){
        
    $servicio=$_GET['servicio'];

}

?>

<head>
    <title>Contacto Monkey</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>


    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class ="conta" >
    

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                  
                </a>
                <br>
               <h3 class="logo">Blue Monkey</h3>
                
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li ><a href="index.php">Inicio</a></li>
                        <li class="nosotros.php"><a href="nosotros.php">Nosotros</a></li>
                        <li class="contacto.php"><a href="contacto.php">Contacto</a></li>
                    
                    </ul>
                    <div class="buton"><a  href="./dist/index.html"><button type="button" style="list-style: none;" class="boton" >Ingreso Monkey</button></a></div>
                </nav>

            </div>
        </header>


    

    <main class="py-1">
        <div class="container">
            <div class="row">
<?php 
if($servicio==1){
?>
		<div class="texto">
        <h1 class="font-weight-bold">DESARROLLO DE PAGINAS WEB</h1>
        <br>
        <p>Hola, ¿necesitas que tu contenido web se exhiba en múltiples dispositivos y que sea de carga rápida?, déjanos mostrarte un mundo de posibilidades con nuestro equipo de ingenieros altamente capacitados en las más recientes tecnologías, con nosotros tendrás tus proyectos web en un corto tiempo, tendrás estilos personalizados y únicos de la forma que lo requieras, recuerda que manejamos el modelo Scrum y contamos con área de Quality Assurance que permite testear los productos antes de salir a producción disminuyendo los riesgos de fallo y aumentando la calidad y por supuesto tu satisfacción.</p>
        </div>	
<?php 
}if($servicio==2){
?>
        <div class="texto">
        <h1>TIENDA ONLINE PERSONALIZABLE</h1>
        <p>Hola, bienvenido a nuestra tienda online Gorilla Store, con nuestro producto tienes la posibilidad de personalización de tu sitio de ventas online hasta en un 70% ya que nuestra plataforma esta hecha a la medida de tus necesidades, de una forma ágil y rápida podrás crear tu tienda electrónica en menos de 15 minutos, hemos invertido un gran esfuerzo tecnológico para lograr esto así que te invitamos a probarlo, si deseas obtener una licencia Freemium conoce nuestros términos y condiciones dando clic aquí.</p>
        <h3>Características</h3>
        <li>Diseño personalizable en estilo y color</li>
        <li>Logotipos</li>
        <li>Imágenes</li>
        <li>Reportes de ventas</li>
        <li>Inventarios</li>
        <li>Facturación</li>
        <li>Seguimiento de envíos</li>
        <li>Integración a plataformas de pago incluido pagos PSE</li>
        <li>Soporte técnico y más</li>
        
    
    </div>	
<?php 
}if($servicio==3){
?>
<p>llego 3<p>
<?php 
}
?>
               <div class="col-md-4 moke">
                    </div>
	
                <div class="col-md-8 form">
                <br>
                    <h2 class="m-b-2 font-weight-bold">Formulario de contacto</h2>
                <br>

                    <form action="#">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-2 col-form-label font-weight-bold ">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label font-weight-bold">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="mensaje" class="col-md-2 col-form-label font-weight-bold">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>

                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </main>







    <footer class="piedepagina py-1" role="contentinfo">
        <div class="container">
            <p>2022 © Blue Monkey Technologies</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>

</body>

</html>
