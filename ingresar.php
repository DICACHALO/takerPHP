<?php 
// Este archivo valida que realmente el usuario y la contraseña se encuentren registrados en la base de datos
 
$email= $_POST["email"];  // Correo electrónico
$pass = $_POST["pass"];   // Contraseña
include ("conectar.php");
//$des = base64_encode($pass);
//$res= base64_decode($des);
$sql = pg_query("SELECT email, pass FROM usuario WHERE email ='$email' AND pass ='$pass';")
or die("Error. No es posible la conexión". pg_last_error());

if (pg_fetch_array($sql))
  {
  //session_start(); //Comienza una sesión
  //$_SESSION['email']=$email;
  //$_SESSION['pass']=$pass;
  
  //session_set_cookie_params(0, "/", $_SERVER["HTTP_HOST"], 0); 
  
  header("Location: home.php"); //Entra a la aplicación
  } else{
    echo "USUARIO NO REGISTRADO";
    echo'
    <html>
      <head>
        <meta http-equiv="REFRESH" content="2;url=index.php">
      </head>
    </html>
    ';
  }
  
  pg_close(); //Cierra conexión con la base de datos

?>