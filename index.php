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
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Inicio</title>


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
                <a href="./index.php" class="logo"> <img src="./IMG/logo5.png" alt=""> </a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src=""  class="menu-icono"   alt="">
                </label>
                <nav class="navbar">
                    <ul>


                        <li><a href="./index.php"><i class='bx bxs-home'></i>Inicio</a></li>
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

        <div class="box">
            <div class="group">
                <div class="text-wrapper">BIENVENIDOS<br>BALNEARIO Y HOTEL<br>"LAS TERMAS"</div>
            </div>
        </div>




    </header>


    <div class="btncontainer">
        <div class="btn-float">
            <a class="btn" href="./reservas2.php"><i class='bx bxs-calendar'></i>Reservar</a>
        </div>
    </div>





    <main>
        <!--NOSOTROS-->
        <section class="contenedor" id="nosotros">
            <div class="contenedor-nosotros">
                <img src="./IMG/siete.jpg" class="Bal">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Balneario Hotel "Las Termas", maravilloso lugar único en su genero excelentemente ubicado en Atotonilco, Morelos con un bello paisaje y un excelente clima, ofrece agua 100% termales con una temperatura de 29°C.</p>
                    </div>
                </div>

                <div class="contenedor-nosotros">
                    <img src="./IMG/siete.jpg" class="Bal">
                    <div class="nadar-nosotros">
                        <div class="nosotros">
                            <p>Balneario Hotel "Las Termas", maravilloso lugar único en su genero excelentemente ubicado en Atotonilco, Morelos con un bello paisaje y un excelente clima, ofrece agua 100% termales con una temperatura de 29°C.</p>
                        </div>
                    </div>
        </section>


    </main>

    <!--CONTACO-->
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h3 class="brand">Contacto</h3>
                <p>Balneario "Las Termas"</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/lastermasmorelos" class="social-media-icon" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://twitter.com/BalnearioTermas" class="social-media-icon" target="_blank">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="https://www.instagram.com/las_termas_/?igshid=ZDdkNTZiNTM%3D" class="social-media-icon" target="_blank">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>


</body>

</html>