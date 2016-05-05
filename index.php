<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Principal</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Propios -->
        <link href="css/admin.css" rel="stylesheet">
        <link href="css/table.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                        MENU
                    </button>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        Administrador
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Bienvenido! <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Opciones</li>
                                <li class=""><a href="#"><i class="fa fa-user"></i> Datos De Usuario</a></li>
                                <li class=""><a href="#"><i class="fa fa-asterisk"></i> Cambiar Contraseña</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i>  Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>  	

        <div class="container-fluid main-container">
            <div class="col-md-2 sidebar">
                <div class="row">
                    <!-- uncomment code for absolute positioning tweek see top comment in css -->
                    <div class="absolute-wrapper"> </div>
                    <!-- Menu -->
                    <div class="side-menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Main Menu -->
                            <div class="side-menu-container">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>

                                    <!-- Productos-->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl2">
                                            <i class="fa fa-shopping-cart"></i> Productos <span class="caret"></span>
                                        </a>
                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="./formularios/productos/registrar_productos.php"><i class="fa fa-plus"></i> Nuevo Producto</a></li>
                                                    <li><a href="./formularios/productos/consultar_productos.php"><i class="fa fa-list"></i> Consultar Productos</a></li>
                                                    <li><a href="./formularios/productos/stock.php"><i class="fa fa-table"></i> Stock</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> 
                                    <!-- /.Productos -->


                                    <!-- Ingresos Y Salidas-->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl3">
                                            <i class="fa fa-exchange"></i> Ingresos Y Salidas <span class="caret"></span>
                                        </a>
                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="./formularios/ingresos_y_salidas/consultar_ingresos.php"><i class="fa fa-arrow-right"></i> Consultar Ingresos</a></li>
                                                    <li><a href="./formularios/ingresos_y_salidas/consultar_salidas.php"><i class="fa fa-arrow-left"></i> Consultar Salidas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> 
                                    <!-- /.Ingresos Y Salidas -->

                                    <!-- Recuerdos -->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl1">
                                            <i class="fa fa-gift"></i> Recuerdos <span class="caret"></span>
                                        </a>
                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="./formularios/recuerdos/registrar_recuerdos.php"><i class="fa fa-plus"></i> Nuevo Recuerdo</a></li>
                                                    <li><a href="./formularios/recuerdos/consultar_recuerdos.php"><i class="fa fa-list"></i> Consultar Recuerdos</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> 
                                    <!-- /.Recuerdos -->

                                    <!-- Usuarios-->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl1">
                                            <i class="fa fa-user"></i> Usuarios <span class="caret"></span>
                                        </a>
                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="./formularios/usuarios/registrar_usuarios.php"><i class="fa fa-user-plus"></i> Nuevo Usuario</a></li>                    
                                                    <li><a href="./formularios/usuarios/consultar_usuarios.php"><i class="fa fa-group"></i> Consultar Usuarios</a></li>                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </li> 
                                    <!-- /.Usuarios -->
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>

                    </div>
                </div>  		
            </div>
            <div class="col-md-10 content">
                <div class="panel panel-default filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ultimos 15 Ingresos</h3>
                        <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><i class="fa fa-filter"></i> Filtro</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Fecha De Ingreso" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Cantidad" disabled></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/filter.js"></script>
    </body>
</html>

