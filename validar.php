<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion-mysqli_connect("localhost","root","","validacion");

$consulta="SELECT*FROM personal where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:uno.html");


}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h3 class="bad">ERROR EN LA AUTENTICACION</h3>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);