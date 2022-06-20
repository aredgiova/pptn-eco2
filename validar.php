<?php

include "Save.php";
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    session_start();
    $_SESSION["usuario"]=$usuario;
    
    $conexion=mysqli_connect("192.185.4.76","phiprefx_mache","4wL7TLpnWnv5","phiprefx_wp984");
    
    $consulta="SELECT*FROM wpvi_users where user_login='$usuario' and user_pass='$password'";

    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
   
    if($filas){
        header("location:pptn/index.php");
        $save->addUsuario($usuarioReg["usuario"]);
    }else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1 class="bad">VERIFY YOUR CREDENTIALS</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

