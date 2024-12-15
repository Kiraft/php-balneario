<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloss.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Registrarse</title>
</head>
<body>
    
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
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_POST['usuario'];
	        $email = $_POST['email'];
            $password = $_POST['password'];
            $password = hash('md5', $password);

            $verify_email_query = mysqli_query($con,"SELECT email FROM usuarios WHERE email='$email'");
            if(mysqli_num_rows($verify_email_query) != 0){
                echo "<div class='message'>
                          <p>Este correo electrónico ya ha sido registrado</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Atras</button>";
            } else {
                // Verificar nombre de usuario único
                $verify_user_query = mysqli_query($con, "SELECT usuario FROM usuarios WHERE usuario='$usuario'");
                if(mysqli_num_rows($verify_user_query) != 0){
                    echo "<div class='message'>
                              <p>Este nombre de usuario ya ha sido registrado</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Atras</button>";
                } else {
                    // Si el correo y el nombre de usuario son únicos, realizar el registro
                    mysqli_query($con,"INSERT INTO usuarios(nombre,apellido,usuario,email,password) VALUES('$nombre','$apellido','$usuario','$email','$password')") or die("Ocurrio un error");
        
                    echo "<div class='message'>
                              <p>Registro completo</p>
                          </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Iniciar sesion</button>";
                }
            }

         

         }else{
         
        ?>

            <header>Registro</header>
            
            <form action="" method="post">

                <div class="field input">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" id="nombre" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="apellido">Apellido(s)</label>
                    <input type="text" name="apellido" id="apellido" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" autocomplete="off" required>
                </div>

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
                    ¿Ya tienes una cuenta? <a href="login.php">Iniciar sesion</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>



</header>

    


</body>
</html>