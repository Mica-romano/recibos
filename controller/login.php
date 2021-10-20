<?php
session_start();
include('connectbd.php');
//incluye el archivo de la conexion de la bd

$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasenna'];

$_SESSION['usuario']=$usuario;


$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasenna='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado)

if($filas){
    header("location:users/index.html");

}else{
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




