<?php
// vista de productos
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'php/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/Tarifas.css">
    <title>Tarifa</title>
</head>

<body>

    <header>

        <div class="content">


            <div class="menu container">
                <a href="./index.php" class="logo"><img src="./IMG/logo5.png" alt=""></a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src=""  class="menu-icono"   alt="">
                </label>

                <div class="label">
                    <div class="text-wrapper">TARIFAS</div>
                </div>

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

    </header>



</body>

</html>