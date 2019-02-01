<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href=../Assets/css/bootstrap.min.css>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />

        <title>Job&Carajo</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col-12 col-md-6 ai-center" style="text-align: center;">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h1 class="text-white">Job&Carajo</h1>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <?php if(estaDentro()){?>
                                <div class="col-4">
                                    <a href='logout.php' class="btn btn-primary" >CERRAR SESION</a>
                                </div>
                                <div class="col-8">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['usuario'] . " " . $_SESSION['tipo'] . "<br> " . $_SESSION['hora']?></button>
                                        <ul class="dropdown-menu">
                                            <?php if(esAdmin()){?>
                                            <li class="dropdown-header">Elije una opcion</li>
                                            <li><a href="nuevousuario.php">Crear usuario</a></li>
                                            <li><a href="listarusuario.php">Listar usuario</a></li>
                                            <?php }?>
                                            <li><a href=<?php echo "modificarusuario.php?id=".$_SESSION['id']?>>Modificar usuario</a></li>
                                        </ul>
                                        <?php }?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(estaDentro()){?>
                <div class="col-12 col-md-6 ai-center" style="text-align: center;">
                    <div class="row">
                        <div class="col-3 font-weight-bold btn"><a class="text-white" href='inicio.php'>Inicio</a></div>
                        <?php if(esAdmin()){?>
                        <div class="col-3 font-weight-bold btn"><a class="text-white" href='formulario.php'>Formulario</a></div>
                        <?php }?>
                        <?php if(!esAdmin()){?>
                        <div class="col-3 font-weight-bold btn"><a class="text-white" href='accesodenegado.php'>Formulario</a></div>
                        <?php }?>
                        <div class="col-3 font-weight-bold btn"><a class="text-white" href='listar.php'>Lista ofertas</a></div>
                        <div class="col-3 font-weight-bold btn"><a class="text-white" href='buscador.php'>Buscador</a></div>
                    </div>
                </div>
                <?php }?>
            </div>