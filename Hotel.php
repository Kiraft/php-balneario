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
    <link rel="stylesheet" href="./CSS/Hotel.css">
    <title>Hotel</title>
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


    <div class="btncontainer">
        <div class="btn-float">
            <a class="btn" href="./reservas.html"><i class='bx bxs-calendar'></i>Reservar</a>
        </div>
    </div>




    <main>
        <!--NOSOTROS-->
        <section class="contenedor" id="nosotros">
        <br>
            <br>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel4.jpeg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Las Termas es un maravilloso lugar único en su género por sus aguas termales. Además tenemos para usted grandes albercas, toboganes, área infantil y todo lo necesario para que viva una experiencia inolvidable. Y si desea prolongar su estancia con nosotros contamos con servicio de hospedaje dentro de nuestras instalaciones, con todas las comodidades para ud. y para su familia..</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel.jpg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Tenemos para su diversión y descanso la mejor alternativa para pasar un maravilloso día! </p>
                        <br>
                        <p> <strong>*Albercas de Aguas Termales</strong> </p>
                        <p><strong>*Toboganes</strong></p>
                        <p><strong>*Hotel</strong></p>
                        <p><strong>*Restaurante Bar</strong></p>
                        <p><strong>*Tienda de Souvenirs</strong></p>
                        <p><strong>*Yacimiento de Aguas Termales</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel6.jpeg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Tenemos para su diversión y descanso la mejor alternativa para pasar un maravilloso día! </p>
                        <br>
                        <p> <strong>*Albercas de Aguas Termales</strong> </p>
                        <p><strong>*Toboganes</strong></p>
                        <p><strong>*Hotel</strong></p>
                        <p><strong>*Restaurante Bar</strong></p>
                        <p><strong>*Tienda de Souvenirs</strong></p>
                        <p><strong>*Yacimiento de Aguas Termales</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel5.jpeg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Tenemos para su diversión y descanso la mejor alternativa para pasar un maravilloso día! </p>
                        <br>
                        <p> <strong>*Albercas de Aguas Termales</strong> </p>
                        <p><strong>*Toboganes</strong></p>
                        <p><strong>*Hotel</strong></p>
                        <p><strong>*Restaurante Bar</strong></p>
                        <p><strong>*Tienda de Souvenirs</strong></p>
                        <p><strong>*Yacimiento de Aguas Termales</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel7.jpeg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Tenemos para su diversión y descanso la mejor alternativa para pasar un maravilloso día! </p>
                        <br>
                        <p> <strong>*Albercas de Aguas Termales</strong> </p>
                        <p><strong>*Toboganes</strong></p>
                        <p><strong>*Hotel</strong></p>
                        <p><strong>*Restaurante Bar</strong></p>
                        <p><strong>*Tienda de Souvenirs</strong></p>
                        <p><strong>*Yacimiento de Aguas Termales</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="contenedor-nosotros">
                <img src="./IMG/hotel8.jpeg" width="600px">
                <div class="nadar-nosotros">
                    <div class="nosotros">
                        <p>Tenemos para su diversión y descanso la mejor alternativa para pasar un maravilloso día! </p>
                        <br>
                        <p> <strong>*Albercas de Aguas Termales</strong> </p>
                        <p><strong>*Toboganes</strong></p>
                        <p><strong>*Hotel</strong></p>
                        <p><strong>*Restaurante Bar</strong></p>
                        <p><strong>*Tienda de Souvenirs</strong></p>
                        <p><strong>*Yacimiento de Aguas Termales</strong></p>
                        <p></p>
                    </div>
                </div>
            </div>
            
        </section>


    </main>

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