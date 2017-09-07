<!-- CREATED BY OUMEIMA EL ISBIHANI -->
<!DOCTYPE HTML>
<html>
<html>
        <head>
                <meta charset="utf-8"
                <meta http-equiv="XA-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Smart Cities Initiative </title>
                <!-- Bootstrap core CSS -->
                <link href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Custom styles for this template -->
                <link href="css/stylesheet.css" rel="stylesheet">

        </head>
        <body>
                <!-- Fixed navbar -->
                <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                                <div class="navbar-header">
                                        <a class="navbar-brand" href="#"> Smart Cities Initiative </a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#howto">Make one</a></li>
                                                <li><a href="#Data">Data recollection</a></li>
                                        </ul>
                                </div>
                        </div>
                </nav>
                <!Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                        <img class="first-slide" src="/img/img1.jpg" alt="First slide">
                                        <div class="container">
                                                <div class="carousel-caption">
                                                        <h1>Smart Cities project</h1>
                                                </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <img class="second-slide" src="/img/img2.jpg" alt="Second slide">
                                        <div class="container">
												<div class="carousel-caption">
                                                        <h1>University of Sao Paulo</h1>
                                                </div>
                                        </div>
                                </div>
                                <div class="item">
                                        <img class="third-slide" src="/img/img3.jpg" alt="Third slide">
                                        <div class="container">
                                                <div class="carousel-caption">
                                                        <h1> Hardware team </h1>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only"> Previous </span>
                        </a>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                        </a>
                </div><!-- /.carousel -->

                <!-- Jumbotron -->
                <div class="jumbotron" id="about">
                        <h1> Smart Cities Project </h1>
                        <p class="lead">Monitoring unhealthy plants is an important problem for big cities. People can be injured when a big tree falls down, and also the transit can be heavily affected in case it happens. The prevention for these incidents can be made through the use of sensors and Internet of Things. Once a tree has its information shared by attached sensors that send information to online servers, this tree can be monitored using Big Data analysis in order to find possible symptoms of basic unhealthiness and prevent any further environmental catastrophes. The scalability of these solutions are not easily conceived due to the price of the sensors or the cost with batteries. Also, most of the sensors require local collection of data as they are not always online. The idea of this project is to take advantage of the Internet of Things advents and design a full cycle solution that retrieve information using an energy saver mobile sensor.</p>


                </div>
                <div class="container marketing">
				 <!-- START THE FEATURETTES -->
                <hr class="featurette-divider" id="howto">
                <div class="row featurette">
                        <div class="col-md-7">
                                <h2 class="featurette-heading"> Your turn. <span class="text-muted"> How to make one </span></h2>
                                <p> Hardware: Arduino nano /  Raspberry Pi B+ / Light sensor Grove SensorKit / DHT 11 Humidity and temperature sensor / Two NRF24L01 RadioTransmitter / Sap Flow sensor ( you have to make this one)</p>
                                <p> Software: All programs are available there. The website was developped with bootstrap and php. A webserver and a SGBD were installed directly on the raspberry.</p>
                                <p><a class="btn btn-default" href="#" role="button">Download &raquo;</a></p>
                        </div>
                        <div class="col-md-5">
                                <img class="featurette-image img-responsive center-block" src="/img/makeone.jpg" alt="Generic placeholder image">
                        </div>
                </div>
				</div>
                <hr class = "featurette-divider">
                <!-- /END THE FEATURETTES -->

                <div  id="Data">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-circle" src="/img/Grove-Light-Sensor.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h2>Light sensor </h2>
                            <p> It is part of the Grove Sensor Kit. It can detect the intensity of the light thanks to a photo-resistance. The resistance will decrease when the intensity of the light increase and increase when the intensity of the light decrease.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="img-circle" src="/img/DHT11.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h2> Humidity and temperature sensor</h2>
                            <p> This DFRobot DHT11 Temperature & Humidity Sensor features a temperature & humidity sensor complex with a calibrated digital signal output. </p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="img-circle" src="/img/sap-flow.jpg" alt="Generic placeholder image" width="140" height="140">
							<h2> Sap flow sensor</h2>
                            <p> Following the Granier method, this homemade sensor can measure the quantity of the sap that flows inside a tree at a given time. </p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                        
                        <h2> Received Data </h2>
                        <div class = "resultats">
							<div class="container">
								<?php include 'maps.php'; ?>
							</div>
                            <div class="container">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Capteur 1<span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Temperature<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="tempHour1">Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="tempDay1">Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="tempMonth1">Month</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Humidity <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="humHour1" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="humDay1" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="humMonth1" >Month</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Luminosity <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="lightHour1" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="lightDay1" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="lightMonth1" >Month</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Capteur 2<span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Temperature<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="tempHour2" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="tempDay2" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="tempMonth2" >Month</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Humidity <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="humHour2" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="humDay2" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="humMonth2" >Month</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Luminosity <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="lumHour2" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="lumDay2" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="lumMonth2" >Month</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a class="test" tabindex="-1" href="#">Sap flow <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a tabindex="-1" href="#resultats" id="sapHour1" >Hour</a></li>
												<li><a tabindex="-1" href="#resultats" id="sapDay1" >Day</a></li>
												<li><a tabindex="-1" href="#resultats" id="sapMonth1" >Month</a></li>
											</ul>
										</li>
									</ul>
								</div>
                                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
				</div>
<p><a class="btn btn-default" href="#" role="button" id="batterycheck" >Battery charging checking</a></p>
						</div>
						<?php include 'buttons.php' ?>
						<?php include 'weather.php' ?>
				</div>
                <script src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
				<script>
					$(document).ready(function(){
						$('.dropdown-submenu a.test').on("click", function(e){
							$(this).next('ul').toggle();
							e.stopPropagation();
							e.preventDefault();
						});
					});
				</script>
                <footer class="footer">
                        <p class="pull-right"><a href="#"> Back to top </a></p>
                        <p> Posted by: Oumeima El Isbihani </p>
                        <p> Contact information: <a href="oumeima.el-isbihani@isen-bretagne.yncrea.fr">
                        oumeima.el-isbihani@isen-bretagne.yncrea.fr</a>.</p>
                </footer>
        </body>
</html>


