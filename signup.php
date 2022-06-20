<?php
    include 'db.php';
    $usuario_temporal=$_POST['usuario'];
    $password_temporal=$_POST['password'];
    $query = "INSERT INTO wpvi_users(user_login, user_pass) VALUES ('$usuario_temporal', '$password_temporal')";
    $ejecutar = mysqli_query($conexion, $query);
?>