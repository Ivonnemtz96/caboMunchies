<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once($_SERVER["DOCUMENT_ROOT"] . "/munchies/php/Exception.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/munchies/php/PHPMailer.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/munchies/php/SMTP.php");

//Create an instance; passing `true` enables exceptions
extract($_REQUEST);
$_SESSION["name"] = $name;
$_SESSION["producto"] = $producto;
$_SESSION["cantidad"] = $cantidad;
$_SESSION["amount"] = $amount;
$codigo_de_error = "";

$mail = new PHPMailer(true);

/* Códigos de error
0 -> Todo correcto
1 -> Un campo vacío
2 -> No se pudo enviar el mensaje, problema ajeno a validaciones
3 -> No se seleccionó Captcha
*/


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.bananagroup.mx';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'seo@bananagroup.mx';    //SMTP username
    $mail->Password   = 'Banana2023#';                        //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //MANDAMOS EL NOMBRE EN UNA VARIABLE PARA PODER AGREGARLE LAA COMILLA SIMPLE
    $slh = "Los Cabos Munchies";
    //Recipients
    $mail->setFrom('seo@bananagroup.mx', $slh); //QUIEN MANDA, CON EL NOMBRE
    $mail->addAddress("ivonne.mtz.manzo@gmail.com", $name); //QUIEN RECIBE

    //Content
    $mail->isHTML(true); //ACEPTAR HTML
    $mail->Subject = 'Gracias por tu pedido';

    $mail->Body    = '<html xmlns="http://www.w3.org/1999/xhtml">

          <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport">
              <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
              <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
              <meta content="#EEEEEE" name="sr bgcolor">
              <title>Contact Desert Travel Plus</title>
              <style type="text/css">
              @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap");
                  html,
                  body {
                      width: 100%;
                      margin: 0;
                  }
          
                  #divPadre {
                    margin: 47px 13px;
                    padding: 0 20px;
                    font-family: "Montserrat", sans-serif;
                }
        
                #divHijo {
                    max-width: 100%;
                    padding: 10px;
                    margin: 40px auto;
                    background-color: rgb(255, 255, 255);
                    border-radius: 10px;
                    font-family: "Montserrat", sans-serif;
                    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
                }
          
                  b {
                      color: #696969;
                  }
          
                  p {
                      margin-bottom: 5px;
                      margin-top: 0;
                  }
                  
                  p, h3 {
                      color: #848484;
                  }
          
                  a {
                      text-decoration: none;
                  }
          
                  .container {
                      margin-top: 50px;
                      display: flex;
                      flex-direction: row;
                      flex-wrap: wrap;
                  }
                  .pie-mensaje{

                    text-align:center;
                    font-family: "Montserrat", sans-serif;
                  }
                  .link-pdf{
                    margin-top:2rem;
                    margin-bottom:2rem;
                  }
                  .link-pdf a{
                    color:#fff !important;
                  }

                  .descargar-pdf{
                    border: #bbab9b 1px solid;
                    background:#bbab9b;
                    padding: 11px;
                    margin-top: 30px;
                    margin-bottom: 30px;
                    border-radius: 10px;
                  }
                  .footer{
                    margin-top:4rem;
                    text-align:center;
                    font-family: "Montserrat", sans-serif;
                  }
                  .cuerpo-mensaje{
                    text-align: justify;
                  }
              </style>
          </head>
          
          <body style="margin:0; padding:5px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4;">
          
              <div id="divPadre">
          
                  <div id="divHijo">
                      <div style="margin: 20px 50px 50px 50px;">
                            <div>
                                <img style="width:200px" src="https://loscabosmunchies.com/img/logo/logo6.png">
                            </div>
                          <div class="container">                    
                              
                              <div style="width:100%; display: inline-block;">
                                  <div style="margin-bottom: 30px;">
                                  <div style="width:100%; display: inline-block;">
          
                                  <div class="cuerpo-mensaje" style="margin-bottom: 30px;">
                                  <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Gracias por tu compra <strong>'.$name.'</strong></p>
                                  <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Producto: <strong>'.$producto.'</strong></p>
                                  <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Cantidad: <strong>'.$cantidad.'</strong></p>
                                  <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Total: <strong>$'.$amount.'</strong></p>
                                  <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">
                                       Uno de nuestros vendedores se estará poniendo en contacto contigo para el seguimiento de tu compra
                                  </p>
                                  <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">¡Hasta pronto!</p>
                                    
                                      <p class="footer">
                                      Todos los derechos reservados. Desarrollado por Banana Group Marketing 2024.
                                      </p>
                                  </div>
                              </div>            
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </body>
          </html>
          ';
    $mail->CharSet = 'UTF-8';
    $mail->send();
    require_once($_SERVER["DOCUMENT_ROOT"] . "/munchies/adminMail.php");
} catch (Exception $e) {
    $codigo_de_error = "2";
    header('location: /munchies/index.php');
     exit;
}

header('location: /munchies/completado.php');
echo 'completado';
