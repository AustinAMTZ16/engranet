<?php
	require_once './config/ConexionBlog.php';
	$getAllBlog = " SELECT * FROM tb_blog WHERE  webOrigen = 'engranetmx.com' ORDER BY idBlog DESC";
    $query_run = mysqli_query($conn, $getAllBlog);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type; x-ua-compatible" content="text/html;charset=UTF-8; ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Engranet</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon, robots, description,keywords -->
        <link rel="shortcut icon" type="image/x-icon" href="./img/engranet/logo.jpg"> 
        <meta name="robots" content="index,follow">
        <meta name="description" content="Markting Digital">
        <meta name="keywords" 
            content='diseño de pagina web monterrey, crea pagina web, diseño de   paginas web en Monterrey, diseño de paginas web en Puebla, diseño web monterrey, diseño web Puebla, crea sitio web, agencias de marketing digital, paginas web para negocios, sitios web monterrey, desarrollo web monterrey, marketing digital para mi empresa, páginas web monterrey desarrollo web en monterrey, paginas web en monterrey, desarrollo de paginas web monterrey, diseño paginas web monterrey, desarrollo de paginas web en monterrey, email marketing monterrey, creadores de paginas web en monterrey, agencia de diseño web monterrey, diseño de páginas web en monterrey, Diseño web Monterrey, Páginas web Monterrey, Desarrollo web Monterrey, Agencia de diseño web Monterrey, Email marketing Monterrey
        '>
        <!-- Link css, js -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-3.11.2.min.js"></script>

        <!-- Google Tag Manager (Austintv52@gmail.com)-->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NSL6KSCK');
        </script>
        <!-- End Google Tag Manager (Austintv52@gmail.com)-->
        <!-- Google tag (gtag.js) Analytic 4.0 (Austintv52@gmail.com)-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-C7VPC57YSW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-C7VPC57YSW');
        </script>
        <!-- Google tag (gtag.js) Analytic 4.0 (Austintv52@gmail.com)-->
        <!-- Google tag (gtag.js) ADS (Austintv52@gmail.com)-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11359331584"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-11359331584');
        </script>
        <!-- Google tag (gtag.js) ADS (Austintv52@gmail.com)-->

        <!-- Messenger Plugin de chat Code -->
        <div id="fb-root"></div>
        <!-- Your Plugin de chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>
        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "115144064851488");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>
        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v18.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Messenger Plugin de chat Code -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
        <header class="top">
		    <div class="header-top">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 col-sm-12">
		                    <div class="header-top-left">
		                        <p> 
                                    Tienes alguna pregunta?  
                                    <a style="color: aliceblue;" href="tel:+528180789607">+52 81 8078 9607</a>
                                </p>
		                    </div>
		                </div>
		                <!-- <div class="col-md-4 col-sm-4">
		                    <div class="header-top-right text-md-end text-center">
		                        <ul>
		                            <li><a href="login.html">Sistema</a></li>
		                            <li><a href="signup.html"></a></li>
		                        </ul>
		                    </div>
		                </div> -->
		            </div>
		        </div>
		    </div>
			<div class="header-area two header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-5 col-6">
							<div class="logo">
								<a href="index.html"><img src="img/logo/logo2.png" alt="eduhome" /></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-7 col-6">
                            <div class="content-wrapper text-end">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Inicio</a></li>
                                            <li><a href="acerca.html">Acerca de</a></li>
                                            <li><a href="servicios.html">Servicios</a></li>
                                            <li><a href="blog-lista.php">blog</a></li>
                                            <li><a href="contacto.html">Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
						</div>
                        <div class="col-12">
                            <div class="mobile-menu hidden-sm"></div> 
                        </div>
					</div>
				</div>
			</div>
		</header>
        <!-- Header Area End -->
        
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Blog</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Course Start -->
        <div class="course-area pt-150 pb-150">
            <div class="container">   
                <div class="row">
                <?php
                    if ($query_run) {
                        $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                        foreach ($res as $row) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course mb-70">
                            <div class="course-img">
                                <?php
                                    echo'<img src="data:image/jpeg;base64,' . $row['imagenBlog'] . '" alt="Imagen en base64">';
                                ?>
                            </div>
                            <div class="course-content">
                                <h3><?php echo $row['tituloBlog'] ?></h3>
                                <p><?php echo $row['decripcionBlog'] ?></p>
                                <!-- <a class="default-btn" href="course-details.html">read more</a> -->
                            </div>   
                        </div>
                    </div>
                <?php
                        }
                    } else {
                        echo "Error en la consulta: " . mysqli_error($conn);
                    }
                ?>
                </div>
            </div> 
        </div>       
        <!-- Course End -->
        
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>Suscríbete a nuestro canal</h2>
                            <p>Conce las mejores herramientas que google ofrece para tu negocio.</p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="registroweb.php" method="post">
                                <div id="mc_embed_signup_scroll" class="mc-form"> 

                                    <input type="email" value="" name="correo" class="email"  placeholder="Introduzca su dirección de correo electrónico" required>
                                    <input type="text" name="nombre" value="Suscriptor" hidden>
                                    <input type="text" name="telefono" value="Suscriptor" hidden>
                                    <input type="text" name="mensaje" value="Suscriptor" hidden>

                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>Suscribite</span></button> 
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 pt-4 pt-lg-0">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html"><img src="img/logo/footer-logo.png" alt="eduhome"></a>
                                </div>
                                <p>Conozca al equipo del Engranet Marketing Club: dedicado a ayudar a las pequeñas empresas a prosperar en el mundo digital. </p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/engranetsoluciones"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <!-- <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-instagram"></i></a></li> -->
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="single-widget">
                                <h3>information</h3>
                                <ul>
                                    <li><a href="#">addmission</a></li>
                                    <li><a href="#">Academic Calender</a></li>
                                    <li><a href="event.html">Event List</a></li>
                                    <li><a href="#">Hostel &amp; Dinning</a></li>
                                    <li><a href="#">TimeTable</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 pt-4 pt-lg-0">
                            <div class="single-widget">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="course.html">our courses</a></li>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="teacher.html">teachers &amp; faculty</a></li>
                                    <li><a href="#">teams &amp; conditions</a></li>
                                    <li><a href="event.html">our events</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-lg-6 col-md-6 pt-4 pt-lg-0">
                            <div class="single-widget">
                                <h3>Ponerse en contacto.</h3>
                                <p>Av Paseo de los Leones 1551<br>Monterrey, Nuevo Leon 64610</p>
                                <p>Fracc Los Heroes Puebla 72590<br>Puebla, Puebla 72590</p>
                                <p>
                                    <a style="color:gray;" href="tel:+522212145723">+52 22 1214 5723</a>
                                    <br>
                                    <a style="color:gray;" href="tel:+528180789607">+52 81 8078 9607</a></p>
                                <!-- <p>info@eduhome.com<br>www.eduhome.com</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © <a href="index.html">2021.</a> Todos los derechos reservados por <a href="./politicas.html">Engranet.</a></p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Google Tag Manager (Austintv52@gmail.com) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSL6KSCK" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (Austintv52@gmail.com) -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>