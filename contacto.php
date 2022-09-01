<!DOCTYPE html>
<html lang="en">

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
                        <li class="active"><a href="contacto.php">Contacto</a></li>
                    
                    </ul>
                    <div class="buton"><a  href="./dist/index.html"><button type="button" style="list-style: none;" class="boton" >Ingreso Monkey</button></a></div>
                </nav>

            </div>
        </header>

                <div class="col-md-8 forcontacto">
                <br>
                    <h2 class="m-b-6 font-weight-bold">Formulario de contacto</h2>
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
                            <div class="col-md-10 offset-md-4">
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


