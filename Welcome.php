<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="../Style/css/Interface.css">
    <script src="https://kit.fontawesome.com/09807b727e.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
$Username=$_SESSION['Username'];
if(!isset($Username)){
    header("location:../index.html");}
    ?>


<body>
    <!-- ------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Here Start Header and menu Bar -->


    <ul>
        <li><a href="#" class="logo">Logo</a></li>
        <li><a href="#" class="active">Inicio</a></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Acerca</a></li>
        <li style="float:right"><a href='../Functions/Exit.php'> Exit </a></li>
    </ul>

   
<div>
    <p class="welcome"><?php echo " Welcome $Username ";?></p>
</div>




        <!-- ------------------------------------------------------------------------------------------------------------------------------------>
        <!-- Start of body page-->
        <main class="main">
            <div class="container">





            </div>
        </main>

        <!-- End of body page-->
        <!-- ------------------------------------------------------------------------------------------------------------------------------------>

        <!-- ------------------------------------------------------------------------------------------------------------------------------------>
        <!-- Session Close And Exit Sistem  -->

        <!-- ------------------------------------------------------------------------------------------------------------------------------------>
        
            <div class="footer">
            <p class="a-footer">Todos los derechos reservados © 2020 Copyright Designed for <a class="a-footer"href="#"> Daraes</a> </p>
                    <button><i class="fab fa-facebook-square"></i></button><button><i class="fab fa-instagram"></i></button><button><i class="fab fa-twitter-square"></i></button>
            </div>    
            
            
            
</body>
</html>