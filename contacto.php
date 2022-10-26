<?php
require_once("header.php");

?>

<body class ="conta" >
    

                <div class="col-md-8 forcontacto">
                <br>
                    <h2 class="m-b-6 font-weight-bold">Formulario de contacto</h2>
                <br>

                    <form action="mensaje.php" method="POST">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-2 col-form-label font-weight-bold ">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label font-weight-bold">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label font-weight-bold">Teléfono</label>

                            <div class="col-md-8">
                                <input class="form-control" type="number" id="telephone" name="telephone" placeholder="Ingrese su teléfono" data-toggle="tooltip" data-placement="top" title="Ingrese su teléfono" required>
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

    <br>
    <br>
    <?php
require_once("footer.php");

?>



