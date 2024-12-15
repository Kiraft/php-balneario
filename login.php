<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloss.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Iniciar sesion</title>
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
        <a href="index.php" class="logo"> <img src="" alt=""> </a>
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
                <li><a href="./login.php"><i class='bx bxs-user'></i>Iniciar Sesion</a>
            
                
            
            </li>
            </ul>



        </nav>

    </div>


</div>


<div class="contenedor">
        <div class="box form-box">

        <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
                $password = hash('md5', $password);
                if(password_verify($password, $hash)){
                    echo "Password correcto";
                }
                $result = mysqli_query($con,"SELECT * FROM usuarios WHERE email='$email' AND Password='$password' ") or die("Error");
                
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['apellido'] = $row['apellido'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Usuario o contraseña incorrecta</p>
                       </div> <br>";
                   echo "<a href='login.php'><button class='btn'>Atras</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: index.php");
                }
              }else{

            
            ?>

            <header>Iniciar sesion</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    ¿No tienes una cuenta? <a href="registro.php">Registrate</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>



</header>
    
    

</body>
</html>