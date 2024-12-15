
<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloss.css">
    <title>Principal</title>
</head>
<body>
    
    <div class="nav">
        <div class="logo">
            <p> <a href="principal.php">Bienvenido</a></p>
        </div>

        <div class="right-links">

        <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM usuarios WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_usuario = $result['usuario'];
                $res_email = $result['email'];
                $res_nombre = $result['nombre'];
		        $res_apellido = $result['apellido'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='cambio.php?Id=$res_id'>Configuracion de Perfil</a>";
            ?>

            <a href="php/cerrar.php"> <button class="btn">Cerrar sesion</button> </a>
        </div>
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hola <b><?php echo $res_nombre ?></b> <b><?php echo $res_apellido ?></b> Bienvenido</p>
                </div>
                <div class="box">
                    <p>Tu email es  <b><?php echo $res_email ?></b></p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>Tu nombre de usuario es <b><?php echo $res_usuario ?></b>.</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>