<?php session_start(); ?>
<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="core/img/favicon.png" />


    <head>
        <title>HeartandSoul</title>
        <link rel="stylesheet" type="text/css" href="core/libreria/materialDesing/css/bootstrap.min.css">                    
        <link rel="stylesheet" href="js/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="core/css/main.css">        
        <link rel="stylesheet" type="text/css" href="core/libreria/materialDesing/css/bootstrap-social.css">
        <link rel="stylesheet" type="text/css" href="core/fonts/icofont/css/icofont.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/seguridad.js" type="text/javascript"></script> 
    </head>
    <body class="url"  onload="validar()">        
        

   
<div class="container">
  <div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <h1>
                <p><i>HEARTANDSOUL</i></p>                       
            </h1>            
        </div>  
        <h1>
            <p>                                                          
                <i class="icofont icofont-users-alt-5">:</i><i style ="width:2px; heigth:2px; font-size:30px;">1000</i>            
                <i>online</i>                                 
            </p>
        </h1>   
        
    </div>

      
      
    <div class="col-sm-6">
     	
     		<img width="100%"  height="100%" class="img-responsive" src="core/img/logo.png">
     	
    </div>
    


    <div class="col-sm-4">
    
            <article id="contact">

                            <h2 class="major"></h2>
                            <form action="" method="POST">
                              <div class="field half first">
                                <label for="email">Email</label>
                                <input class="form-control"  type="text" name="usuario" id="usuario" />
                              </div>
                              <div class="field half">
                                <label for="contraseña">Contrase&ntildea</label>
                                <input type="password"  class="form-control" name="contrasena" id="contrasena" />
                              </div>

                              <ul class="actions">
                                <li><input type="button" id="iniciar" name="iniciar" class="btn btn-info" value="Iniciar Sesion" class="special" /></li>
                                <li><input type="button" id="registrarse" name="registrarse" class="btn btn-danger" value="Registrarse" /></li>
                              </ul>
                                <div id="resultado" name="resultado"></div>
                            </form>

                              <a class="btn btn-block btn-social btn-twitter">
                                <span class="fa fa-twitter"></span> Sign in with Twitter
                              </a>

                             <a class="btn btn-block btn-social btn-facebook">
                                        <span class="fa fa-facebook"></span> Sign in with Facebook
                                      </a>


                              <a  class="btn btn-block btn-social btn-google">
                                <span class="fa fa-google"></span> Sign in with Google
                              </a>

            </article>
        </div>
    </div>
</div>

 <footer id="footer">
                              
            <p class="copyright" style="color:white;">Autores: Manuel Vargas y Sebastian Hernandez     
             &copy; Todos los derechos reservados.</p>          

          <ul class="icons">
                  <li><a href="https://www.facebook.com/Amaterasul" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="https://twitter.com/_sebaastian" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                  <li><a href="https://www.instagram.com/sebastian_hernandez1997" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                </ul>
    </footer>











                                                    
       <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
       <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
       <script type="text/javascript" src="js/jquery-ui.min.js" ></script>
       <script src="js/fondo.js" type="text/javascript"></script>         
       <script src="js/acceso.js" type="text/javascript"></script>         
    </body>
   
</html>

