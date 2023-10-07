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


</head>

<body id="page-top">
    <?php
        require('./frontend/seccionWeb/header.php');
    ?>

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

    <?php
        require('./frontend/seccionWeb/fotter.php');
    ?>
    
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

    <!-- FORMULARIO INDEX CONTACTO -->
    <script>
        const d = document,
            $form = d.querySelector(".crud-form");

        const ajax = (options) => {
            let {
                url,
                method,
                success,
                error,
                data
            } = options;
            let xhr = new XMLHttpRequest();

            xhr.addEventListener("readystatechange", e => {
                if (xhr.readyState !== 4) return;

                if (xhr.status >= 200 && xhr.status < 300) {
                    let json = JSON.parse(xhr.responseText);
                    success(json);

                } else {
                    let message = xhr.statusText || "Ocurrio un error";
                    error(`Error ${xhr.status}: ${message}`);
                }
            });

            xhr.open(method || "GET", url);

            xhr.setRequestHeader("Content-type", "application/json; charset=utf-8");
            xhr.send(JSON.stringify(data));

        }

        d.addEventListener("submit", e => {
            if (e.target === $form) {
                e.preventDefault();
                if (!e.target.id.value) {
                    //Create POST
                    ajax({
                        url: "https://mexiclientes.engranetmx.com/models/prospecto/AgregarProspecto.php",
                        method: "POST",
                        success: (res) => location.reload(),
                        error: () => $form.insertAdjacentHTML("aftered", `<p><b>${err}</b></p>`),
                        data: {
                            nombre: e.target.nombre.value,
                            telefono: e.target.telefono.value,
                            correo: e.target.correo.value,
                            mensaje: e.target.mensaje.value,
                            asunto: e.target.asunto.value,
                            dominioOrigen: e.target.dominioOrigen.value,
                            giroDominio: e.target.giroDominio.value,
                            categoriaProspecto: e.target.categoriaProspecto.value,
                            estadoSistema: e.target.estadoSistema.value,
                            conversacion: e.target.conversacion.value,
                            correoCliente:'aldahir.dar@gmail.com',
                            urlWhatsapp : "https://api.whatsapp.com/send/?phone=522212145723&text=Hola+engranet&type=phone_number&app_absent=0",
                            urlAgedarCita : "https://engranetmx.com/index.php?view=recepcion"
                        }

                    });
                } else {
                    //Update PUT
                }
            }
        });
    </script>

    <!-- FORMULARIO CITA -->
    <script>
        const cita = document,
            $form_cita = cita.querySelector(".cita-form");

        const ajax_cita = (options) => {
            let {
                url,
                method,
                success,
                error,
                data
            } = options;
            let xhr_cita = new XMLHttpRequest();

            xhr_cita.addEventListener("readystatechange", e => {
                if (xhr_cita.readyState !== 4) return;

                if (xhr_cita.status >= 200 && xhr_cita.status < 300) {
                    let json = xhr_cita.responseText;
                    success(json);

                } else {
                    let message = xhr_cita.statusText || "Ocurrio un error";
                    error(`Error ${xhr_cita.status}: ${message}`);
                }
            });

            xhr_cita.open(method || "GET", url);

            xhr_cita.setRequestHeader("Content-type", "application/json; charset=utf-8");
            xhr_cita.send(JSON.stringify(data));

        }

        cita.addEventListener("submit", e => {
            // var boton_cita = d.getElementById('boton_cita');
            // var mensaje = d.querySelectorAll('.valores');

            if (e.target === $form_cita) {
                e.preventDefault();
                if (!e.target.id.value) {
                    //Create POST
                    ajax_cita({
                        url: "https://mexiclientes.engranetmx.com/models/prospecto/AgregarProspecto.php",
                        method: "POST",
                        success: (res) => location.reload(),
                        error: () => $form_cita.insertAdjacentHTML("aftered", `<p><b>${err}</b></p>`),
                        data: {
                            nombre: e.target.nombre.value,
                            telefono: e.target.telefono.value,
                            correo: e.target.correo.value,
                            asunto: e.target.asunto.value,
                            dominioOrigen: e.target.dominioOrigen.value,
                            giroDominio: e.target.giroDominio.value,
                            categoriaProspecto: e.target.categoriaProspecto.value,
                            estadoSistema: e.target.estadoSistema.value,
                            conversacion: e.target.conversacion.value,
                            mensajes_cita: e.target.mensajes_cita.value,
                            fecha: e.target.fecha.value,
                            pacas: e.target.pacas.value,
                            ubicacion: e.target.ubicacion.value,
                            mensaje: e.target.fecha.value + " " + e.target.pacas.value + " " + e.target.ubicacion.value + " " + e.target.mensajes_cita.value,
                            correoCliente:'aldahir.dar@gmail.com',
                            urlWhatsapp : "https://api.whatsapp.com/send/?phone=522212145723&text=Hola+engranet&type=phone_number&app_absent=0",
                            urlAgedarCita : "https://engranetmx.com/index.php?view=recepcion"
                        }

                    });
                } else {
                    //Update PUT
                }
            }
        });
    </script>

</body>

</html>