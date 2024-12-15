<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reservaciones</title>

    <!--=====================================
	VÍNCULOS CSS
	======================================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Fuente Open Sans y Ubuntu -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Ubuntu" rel="stylesheet">

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="./CSS/plugins/bootstrap-datepicker.standalone.min.css">

    <!-- jdSlider -->
    <link rel="stylesheet" href="./CSS/plugins/jquery.jdSlider.css">

    <!-- Pano -->
    <link rel="stylesheet" href="./CSS/plugins/jquery.pano.css">

    <!-- fullCalendar -->
    <link rel="stylesheet" href="./CSS/plugins/fullcalendar.min.css">

    <!-- Hoja de estilo personalizada -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/habitaciones.css">
    <link rel="stylesheet" href="./CSS/reservas.csss">
    <link rel="stylesheet" href="./CSS/index.css">

    <!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- bootstrap datepicker -->
    <!-- https://bootstrap-datepicker.readthedocs.io/en/latest/ -->
    <script src="./JS/plugins/bootstrap-datepicker.min.js"></script>

    <!-- https://easings.net/es# -->
    <script src="./JS/plugins/jquery.easing.js"></script>

    <!-- https://markgoodyear.com/labs/scrollup/ -->
    <script src="./JS/plugins/scrollUP.js"></script>

    <!-- jdSlider -->
    <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <script src="./JS/plugins/jquery.jdSlider-latest.js"></script>

    <!-- Pano -->
    <!-- https://www.jqueryscript.net/other/360-Degree-Panoramic-Image-Viewer-with-jQuery-Pano.html -->
    <script src="./JS/plugins/jquery.pano.js"></script>

    <!-- fullCalendar -->
    <!-- https://momentjs.com/ -->
    <script src="./JS/plugins/moment.js"></script>
    <!-- https://fullcalendar.io/docs/background-events-demo -->
    <script src="./JS/plugins/fullcalendar.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>



</head>


<body>



    <!--=====================================
MENÚ
======================================-->

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

    

    <!--=====================================
BANNER-INTERIOR
======================================-->

    <div class="bannerInterior container-fluid bg-white p-0 d-none d-lg-block">

        <figure>

            <img src="" class="img-fluid" width="100%">

        </figure>

    </div>

    <!--=====================================
INFO RESERVAS
======================================-->

    <div class="infoReservas container-fluid bg-white p-0 pb-5">

        <div class="container">

            <div class="row">

                <!--=====================================
			BLOQUE IZQ
			======================================-->

                <div class="col-12 col-lg-8 colIzqReservas p-0">

                    <!--=====================================
				CABECERA RESERVAS
				======================================-->

                    <div class="pt-4 cabeceraReservas">

                        <div class="clearfix"></div>

                        <h1 class="float-left text-white p-2 pb-lg-5">RESERVAS</h1>

                        <h6 class="float-right px-3">

                            <br>
                            <a href="perfil.html" style="color:#FFCC29">Ver tus reservas</a>

                        </h6>

                        <div class="clearfix"></div>

                    </div>

                    <!--=====================================
				CALENDARIO RESERVAS
				======================================	-->

                    <div class="bg-white p-4 calendarioReservas">

                        <h1 class="pb-5 float-left">¡Está Disponible!</h1>

                        <div class="float-right pb-3">

                            <ul>
                                <li>
                                    <i class="fas fa-square-full" style="color:#847059"></i> No disponible
                                </li>

                                <li>
                                    <i class="fas fa-square-full" style="color:#eee"></i> Disponible
                                </li>

                                <li>
                                    <i class="fas fa-square-full" style="color:#FFCC29"></i> Tu reserva
                                </li>
                            </ul>

                        </div>

                        <div class="clearfix"></div>

                        <div id="calendar"></div>

                        <!--=====================================
					MODIFICAR FECHAS
					======================================	-->

                        <h6 class="lead pt-4 pb-2">Puede modificar la fecha de acuerdo a los días disponibles:</h6>

                        <div class="container mb-3">

                            <div class="row py-2" style="background:#509CC3">

                                <div class="col-6 col-md-3 input-group pr-1">

                                    <input type="text" class="form-control datepicker entrada" placeholder="Entrada">

                                    <div class="input-group-append">

                                        <span class="input-group-text"><i class="far fa-calendar-alt small text-gray-dark"></i></span>

                                    </div>

                                </div>

                                <div class="col-6 col-md-3 input-group pl-1">

                                    <input type="text" class="form-control datepicker salida" placeholder="Salida">

                                    <div class="input-group-append">

                                        <span class="input-group-text"><i class="far fa-calendar-alt small text-gray-dark"></i></span>

                                    </div>

                                </div>

                                <div class="col-12 col-md-6 mt-2 mt-lg-0 input-group">

                                    <a href="./reservas.html" class="w-100">
                                        <input type="button" class="btn btn-block btn-md text-white" value="Ver disponibilidad" style="background:black">
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
			BLOQUE DER
			======================================-->


            <form action="guardar_reserva.php" method="post">

                <div class="col-12 col-lg-4 colDerReservas">

                    <h2 class="mt-lg-5"><strong>Reservaciones</strong></h2>


                <div class="form-group">
    <label>Ingreso:</label>
    <input type="text" class="form-control datepicker entrada" placeholder="Entrada" name="fechaEntrada">
    <div class="input-group-append">
        <span class="input-group-text p-2">
            <i class="far fa-calendar-alt small text-gray-dark"></i>
        </span>
    </div>
</div>

<div class="form-group">
    <label>Salida:</label>
    <input type="text" class="form-control datepicker salida" placeholder="Salida" name="fechaSalida">
    <div class="input-group-append">
        <span class="input-group-text p-2">
            <i class="far fa-calendar-alt small text-gray-dark"></i>
        </span>
    </div>
</div>

                    <div class="form-group">
                        <label>Habitación:</label>
                        <select class="form-control" name="habitacion">
				  	
					<option value="sencilla">Sencilla</option>
					<option value="doble">Doble</option>
                    <option value="suite">Suite</option>

				  </select>

                        <img src="./IMG/tres.jpg" class="img-fluid">

                    </div>

                    <div class="form-group">
                        <label>Plan:</label>
                        <select class="form-control" name="plan">
				  	
					<option value="continental">Plan Continental</option>
					<option value="americano">Plan Americano</option>

				  </select>
                    </div>

                    <div class="form-group">
                        <label>Personas:</label>
                        <select class="form-control" name="personas">
				  	
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>

				  </select>
                    </div>

                    <div class="row py-4">

                        <div class="col-12 col-lg-6 col-xl-7 text-center text-lg-left">

                            <h1>$1500</h1>

                        </div>

                        <div class="col-12 col-lg-6 col-xl-5">

                            <a href="./reservas.php">
                                <button class="btn btn-dark btn-lg w-100">PAGAR <br> RESERVA</button>
                            </a>

                        </div>

                    </div>

                </div>

                </form>

            </div>

        </div>

    </div>

    <!--=====================================
CONTÁCTENOS
======================================-->

    <div class="contactenos container-fluid bg-white py-4" id="contactenos">

        <div class="container text-center">

            <h1 class="py-sm-4">CONTÁCTENOS</h1>

            <form>

                <div class="input-group input-group-lg">

                    <input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Nombre">

                    <input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Apellido">

                </div>

                <div class="input-group input-group-lg">

                    <input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Móvil">

                    <input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Correo Electrónico">

                </div>

                <textarea class="form-control" rows="6" placeholder="Escribe aquí tu mensaje"></textarea>

                <input class="btn btn-dark my-4 btn-lg py-3 text-uppercase" value="Enviar">

            </form>

        </div>

    </div>

    <!--=====================================
FOOTER
======================================-->

    <footer class="container-fluid p-0">

        <div class="grid-container">

            <div class="grid-item d-none d-lg-block pt-2"></div>

            <div class="grid-item d-none d-lg-block pt-2">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat.</p>

            </div>

            <div class="grid-item pt-2">

                <ul class="py-1">

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white float-left mx-3"></i></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter lead text-white float-left mx-3"></i></a>
                    </li>

                    <li>
                        <a href="#" target="_blank"><i class="fab fa-youtube lead text-white float-left mx-3"></i></a>
                    </li>


                    <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram lead text-white float-left mx-3"></i></a>
                    </li>

                </ul>

            </div>

        </div>

    </footer>

    <!--=====================================
REDES SOCIALES MÓVIL
======================================-->

    <ul class="redesMovil p-2 nav nav-justified">

        <li class="nav-item">
            <a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white"></i></a>
        </li>

        <li class="nav-item">
            <a href="#" target="_blank"><i class="fab fa-twitter lead text-white"></i></a>
        </li>

        <li class="nav-item">
            <a href="#" target="_blank"><i class="fab fa-youtube lead text-white"></i></a>
        </li>

        <li class="nav-item">
            <a href="#" target="_blank"><i class="fab fa-instagram lead text-white"></i></a>
        </li>

    </ul>

    <!--=====================================
VENTANA MODAL PLANES
======================================-->

    <div class="modal" id="modalPlanes">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <img src="" class="img-thumbnail">

                    <p class="py-3"></p>

                    <div class="text-center">
                        <a href="./habitaciones.html" class="btn btn-primary text-center">Separa tu habitación</a>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

            </div>

        </div>

    </div>

    <!--=====================================
VENTANA MODAL INGRESO
======================================-->

    <div class="modal" id="modalIngreso">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header bg-info text-white">
                    <h4 class="modal-title">Ingresar</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <!--=====================================
VENTANA MODAL REGISTRO
======================================-->

                    <div class="modal" id="modalRegistro">

                        <div class="modal-dialog">

                            <div class="modal-content">

                                <div class="modal-header bg-info text-white">
                                    <h4 class="modal-title">Registarse</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">

                                    <!--=====================================
		INGRESO CON REDES SOCIALES
		======================================-->

                                    <div class="d-flex">

                                        <div class="px-2 flex-fill">

                                            <p class="p-2 bg-primary text-center text-white">
                                                <i class="fab fa-facebook"></i> Ingreso con Facebook
                                            </p>

                                        </div>

                                        <div class="px-2 flex-fill">

                                            <p class="p-2 bg-danger text-center text-white">
                                                <i class="fab fa-google"></i> Ingreso con Google
                                            </p>

                                        </div>

                                    </div>

                                    <!--=====================================
		REGISTRO DIRECTO
		======================================-->

                                    <hr class="mt-0">

                                    <form>

                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">

                                                <span class="input-group-text">
			      	
			      	<i class="far fa-user"></i>

			      </span>

                                            </div>

                                            <input type="text" class="form-control" placeholder="Nombre">

                                        </div>


                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">

                                                <span class="input-group-text">
			      	
			      	<i class="far fa-envelope"></i>

			      </span>

                                            </div>

                                            <input type="email" class="form-control" placeholder="Email">

                                        </div>

                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">

                                                <span class="input-group-text">
			      	
					<i class="fas fa-unlock-alt"></i>

			      </span>

                                            </div>

                                            <input type="password" class="form-control" placeholder="Contraseña">

                                        </div>


                                        <input type="submit" class="btn btn-dark btn-block" value="Registrarse">

                                    </form>

                                </div>


                                <div class="modal-footer">

                                    ¿Ya tienes una cuenta registrada? |

                                    <strong>

			<a href="#modalIngreso" data-toggle="modal" data-dismiss="modal">
				Ingresar
			</a>

		</strong>

                                </div>

                            </div>

                        </div>

                    </div>

                    <script src="js/script.js"></script>

                    <script src="./JS/menu.js"></script>
                    <script src="./JS/plantilla.js"></script>
                    <script src="./JS/agendas.js"></script>
                    <script src="./JS/agendas2.js"></script>
                    <script src="./JS/reservas.js"></script>
                    <script src="./JS/reservas2.js"></script>
                    <script src="./JS/habitaciones.js"></script>
                    <script src="./JS/usuarios.js"></script>


</body>

</html>