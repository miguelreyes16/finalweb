<?php


include("../includes/db.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link rel="stylesheet" href="../includes/csslogin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="login-box">
      <img src="https://png.pngtree.com/png-vector/20190122/ourlarge/pngtree-2-5d-freight-car-freight-car-png-image_527104.jpg"  class="avatar" alt="Avatar Image">
      
      <h1>Bienvenido</h1>
      <form action="validacion.php" method="POST">
        
        <label for="usuario" name="">Usuario</label>
        <input type="text"  name="usuario" placeholder="Ingrese su usuario">
       
        <label for="contra">Contraseña</label>
        <input type="password"  name="contra" placeholder="Ingrese su clave">
        <button type="submit">Iniciar Sesión</button>
      </form>
    </div>







    
</body>
</html>