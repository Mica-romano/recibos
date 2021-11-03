<?php
session_start();
include('connectbd.php');

//incluye el archivo de la conexion de la bd

$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasenna'];

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","recibos");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasenna='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$iniciarsesion = mysqli_fetch_array($resultado);

if($iniciarsesion['tipoUsuario']==1){
    header("location:http://localhost/recibos/users/homeuser.html");
}
else 
if($iniciarsesion['tipoUsuario']==2){
    header("location:http://localhost/recibos/admin/homeadmin.html");}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1>Datos invalidos</h1>
    <?php
}

msqli_free_result($resultado);
msqli_close($conexion);

?>




