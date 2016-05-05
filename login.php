<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Ingresar</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">    
            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 

                <div class="row">                
                    <div class="iconmelon">
                        <svg viewBox="0 0 32 32">
                        <g filter="">
                        <use xlink:href="#git"></use>
                        </g>
                        </svg>
                    </div>
                </div>

                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title text-center">Grupo Prosede SAC</div>
                    </div>     

                    <div class="panel-body" >

                        <form action="funciones.php" method="post" name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="user" type="text" class="form-control" name="admin" value="" placeholder="Usuario" required="required">                                        
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="required">
                            </div>                                                                  

                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <button type="submit" href="#" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Ingresar</button>                          
                                </div>
                            </div>

                        </form>     

                    </div>                     
                </div>  
            </div>
        </div>

        <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
<?
?>