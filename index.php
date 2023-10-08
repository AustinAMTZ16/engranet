<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engranet</title>
    <!-- <link rel="stylesheet" href="./backend/css/orden.css"> -->
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assents/logo.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="BackWeb/css/styles.css" rel="stylesheet" />


    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="backend/fonts/style.css">
    <!-- Main css -->
    <!-- <link rel="stylesheet" href="backend/css/main.css"> -->

    <!-- Data Tables -->
    <link rel="stylesheet" href="backend/vendor/datatables/dataTables.bs4.css" />
    <link rel="stylesheet" href="backend/vendor/datatables/dataTables.bs4-custom.css" />
    <link href="backend/vendor/datatables/buttons.bs.css" rel="stylesheet" />

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11359331584">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-11359331584');
        </script>
    <!-- Google tag (gtag.js) -->

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
            xfbml            : true,
            version          : 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
    <!-- Messenger Plugin de chat Code -->

</head>

<body id="page-top">
    <?php require('./frontend/seccionWeb/header.php'); ?>

    <?php
        // mostrar.php
        if (isset($_GET["view"]) && $_GET["view"] != "") {
            $url = "frontend/seccionWeb/" . $_GET["view"] . ".php";
            if (file_exists($url)) {
                include $url;
            } else {
                echo "<h1>404 PAGINA NO ENCONTRADA</h1>";
            }
        } else {
            include "./frontend/seccionWeb/home.php";
        }
    ?>

    <?php require('./frontend/seccionWeb/fotter.php'); ?>
    
    <a href="https://wa.me/522212145723?text=Hola engranet" target="_blank" class="boton-flotante"><i class="fab fa-whatsapp"></i></a>

    <style>
        /* Estilos del botón flotante */
        .boton-flotante {
            display: inline-block;
            background-color: #229655;
            color: #fff;
            padding: 10px 20px;
            border-radius: 100%;
            text-align: center;
            font-size: 25px;
            position: fixed;
            bottom: 20px; /* Ajusta la distancia desde la parte inferior */
            left: 20px; /* Ajusta la distancia desde la derecha */
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Cambiar el color del botón al pasar el ratón sobre él */
        .boton-flotante:hover {
            background-color: #0056b3;
        }
    </style>

    

    <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="BackWeb/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="backend/js/jquery.min.js"></script>
        <script src="backend/js/bootstrap.bundle.min.js"></script>
        <script src="backend/js/moment.js"></script>

        <!-- Data Tables -->
        <script src="backend/vendor/datatables/dataTables.min.js"></script>
        <script src="backend/vendor/datatables/dataTables.bootstrap.min.js"></script>


        <!-- Custom Data tables -->
        <script src="backend/vendor/datatables/custom/custom-datatables.js"></script>
        <script src="backend/vendor/datatables/custom/fixedHeader.js"></script>



        <!-- Main JS -->
        <script src="backend/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="backend/vendor/slimscroll/slimscroll.min.js"></script>
        <script src="backend/vendor/slimscroll/custom-scrollbar.js"></script>
        <!-- Core theme JS-->
    <!-- Bootstrap core JS-->
</body>

</html>