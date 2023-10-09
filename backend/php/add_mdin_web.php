<?php
    require_once('../../backend/config/ConexionSNSesion.php');
    
    //RUTA DE ARCHIVO PHPMAILER



    if (isset($_POST['md_insert'])) {
        ///////////// Informacion enviada por el formulario /////////////
        $numc = $_POST['mdnum'];
        $dnic = $_POST['mddoc'];
        $nomc = $_POST['mdnom'];
        $apec = $_POST['mdap'];

        ///////// Fin informacion enviada por el formulario /// 

        ////////////// Insertar a la tabla la informacion generada /////////
        $sql = "insert into clientes(dnic, numc, nomc,apec,estac) 
            values(:dnic, :numc,:nomc,:apec,'1')";

        $sql = $connect->prepare($sql);

        $sql->bindParam(':dnic', $dnic, PDO::PARAM_STR, 25);
        $sql->bindParam(':numc', $numc, PDO::PARAM_STR, 25);
        $sql->bindParam(':nomc', $nomc, PDO::PARAM_STR, 25);
        $sql->bindParam(':apec', $apec, PDO::PARAM_STR, 25);


        $sql->execute();

        $lastInsertId = $connect->lastInsertId();
        if ($lastInsertId > 0) {
            echo '  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Gracias .. Agregado correctamente
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>';
        } else {
            echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        No se pueden agregar datos, comuníquese con el administrador
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>';

            print_r($sql->errorInfo());
        }
    }// Cierra envio de guardado

    if(isset($_POST['md_insert']))
    {

        $idhab=$_POST['rxha'];
        $iddn=$lastInsertId;
        $feentra=$_POST['rxent'];
        $fesal=$_POST['rxsal'];
        $observac=$_POST['rxobs'];
        $adel=0.00;
        $precioCobro = $_POST['precio'];
        $correo = $_POST['email'];
        $correoCliente ='aldahir.dar@gmail.com';
        $mailAgendarCita = '
            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                <tr>
                    <td align="center" style="padding:0;">
                        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                            <tr>
                                <td align="center" style="padding:40px 0 30px 0;">
                                    <img src="https://engranetmx.com/BackWeb/assets/img/fondo.jpg" alt="" width="90%" style="height:auto;display:block;" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:36px 30px 42px 30px;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                        <tr>
                                            <td style="padding:0 0 36px 0;color:#153643;">
                                                <span>Hola ' . $correo . '.</span>
                                                <h1 style="font-size:24px;margin:0 0 5px 0;font-family:Arial,sans-serif;">Tu cita se registro exitosamente.</h1>
                                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;"></h1>
                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                                    Un asesor te contactará tan pronto le sea posible para atender cualquier duda que tengas. De igual forma nuestro bot te enviará un mensaje vía Whatsapp para agendar una posible llamada. ﻿Adjuntamos sobre este email una presentación sobre nuestros servicios.
                                                </p>
                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="' . $urlWhatsapp . '" target="_blank" style="color:#ee4c50;text-decoration:underline;">Mandar WhatsApp</a></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:30px;background:#0B3861;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                        <tr>
                                            <td style="padding:0;width:50%;" align="left">
                                                <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                                    &reg; Engranet, Soluciones Digitales 2023<br /><a href="https://www.engranetmx.com" target="_blank" style="color:#ffffff;text-decoration:underline;">engranetmx.com</a>
                                                </p>
                                            </td>
                                            <td style="padding:0;width:50%;" align="right">
                                                <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="padding:0 0 0 10px;width:38px;">
                                                            <a href="https://www.facebook.com/profile.php?id=100090316568304" target="_blank" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: MexiClientes@engranetmx.com" . "\r\n";

        $statement = $connect->prepare("INSERT INTO reservar (idhab,iddn,feentra,fesal,adel,state,observac) VALUES('$idhab', '$iddn','$feentra','$fesal','$adel','1', '$observac')");

        $statement2 = $connect->prepare("UPDATE habitaciones SET estadha='2' WHERE idhab= $idhab LIMIT 1;");
        //echo "$item";
        //Execute the statement and insert our values.
        $inserted = $statement->execute(); 
        $inserted = $statement2->execute(); 
        if($inserted>0){
            mail($correo, "Cita agendada", $mailAgendarCita, $headers);
            mail($correoCliente, "Cita agendada", $mailAgendarCita, $headers);
        }else{
            echo '  ';
            print_r($sql->errorInfo()); 
        }

    }
?>