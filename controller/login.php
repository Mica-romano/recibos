<?php
$usuario=$_POST['usuario'];
$contrasenna=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('connectbd.php');
//$conexion=mysqli_connect("localhost", "root","recibos");
//incluye el archivo de la conexion de la bd
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasenna='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado)

if($filas){
    header("location:");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1>Datos invalidos</h1>
    <?php
}

msqli_free_result($resultado);
msqli_close($conexion);

?>