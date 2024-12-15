
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
    <link rel="stylesheet" href="CSS/estiloss.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Configuracion</title>
</head>
<body>

<header class="header">


<script type="text/javascript">
    function createBubble() {
        const section = document.querySelector('header')
        const createElement = document.createElement('span')
        var size = Math.random() * 60;

        createElement.style.width = 20 + size + 'px';
        createElement.style.height = 20 + size + 'px';
        createElement.style.left = Math.random() * innerWidth + "px";
        section.appendChild(createElement);

        setTimeout(() => {
            createElement.remove()

        }, 4000)
    }

    setInterval(createBubble, 50)
</script>




<div class="content">

    <div class="menu container">
        <a href="index.html" class="logo"> <img src="" alt=""> </a>
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src=""  class="menu-icono"   alt="">
        </label>
        <nav class="navbar">
            <ul>


                <li><a href="index.php"><i class='bx bxs-home'></i>Inicio</a></li>
                <li><a href="./Balneario.php"><i class='bx bx-swim'></i>Balneario</a></li>
                <li><a href="./Hotel.php"><i class='bx bxs-hotel'></i>Hotel</a></li>
                <li><a href="./Tarifa.php"><i class='bx bxs-badge-dollar'></i>Tarifas</a></li>
            
                <?php
                    if (isset($_SESSION['valid'])) {
                        echo '<li><a href="cambio.php">Cuenta</a></li>';
                        echo '<li><a href="php/cerrar.php">Cerrar sesion</a></li>';
                    } else {
                        echo '<li><a href="login.php">Iniciar Sesion</a></li>';
                    }
                ?>
            
            
            </ul>



        </nav>

    </div>


</div>


<div class="contenedor">
        <div class="box form-box">

        <?php 
               if(isset($_POST['submit'])){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $usuario = $_POST['usuario'];
	            $email = $_POST['email'];
                $password = $_POST['password'];
                $password = hash('md5', $password);

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE usuarios SET nombre='$nombre', apellido='$apellido' , usuario='$usuario', email='$email', password='$password' WHERE Id=$id ") or die("Ocurrio un error");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Perfil Actualizado</p>
                </div> <br>";
              echo "<a href='principal.php'><button class='btn'>Regresar</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM usuarios WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_usuario = $result['usuario'];
                    $res_email = $result['email'];
                    $res_nombre = $result['nombre'];
		            $res_apellido = $result['apellido'];
                    $res_password = $result['password'];
                }

            ?>


            <header>Configuracion</header>
            <form action="" method="post">
            <div class="field input">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $res_nombre ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="apellido">Apellido(s)</label>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $res_apellido ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" value="<?php echo $res_usuario ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_email ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password"  autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Actualizar" required>
                </div>

            </form>
        </div>
        
        <?php } ?>
    </div>



</header>

    

</body>
</html>