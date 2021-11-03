<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasenna'];
session_start(); 
$_SESSION['usuario']=$usuario;

include('connectbd.php');//incluye el archivo de la conexion de la bd

$conexion=mysqli_connect("localhost","root","","recibos");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasenna='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$iniciarsesion=mysqli_fetch_array($resultado);

if($iniciarsesion['tipoUsuario']==1){//user, empleado
    header("location:http://localhost/recibos/users/homeuser.html");
}
else 
if($iniciarsesion['tipoUsuario']==2){//admin
    header("location:http://localhost/recibos/admin/homeadmin.html");}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1>Datos invalidos</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>




