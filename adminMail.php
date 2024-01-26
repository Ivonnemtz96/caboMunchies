<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once($_SERVER["DOCUMENT_ROOT"] . "/php/Exception.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/PHPMailer.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/SMTP.php");

//Create an instance; passing `true` enables exceptions
extract($_REQUEST);
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.loscabosmunchies.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@loscabosmunchies.com';    //SMTP username
    $mail->Password   = 'h4Wmz0StGg';                        //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                  //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //MANDAMOS EL NOMBRE EN UNA VARIABLE PARA PODER AGREGARLE LAA COMILLA SIMPLE
    $slh = "Banana Group - Cabo Munchies";
    //Recipients
    $mail->setFrom('info@loscabosmunchies.com', $slh); //QUIEN MANDA, CON EL NOMBRE
    $mail->addAddress('info@loscabosmunchies.com', 'Cabo Munchies'); //QUIEN RECIB

    //Content
    $mail->isHTML(true); //ACEPTAR HTML
    $mail->Subject = 'Una nueva compra realizada';
    $mail->Body    = '<html xmlns="http://www.w3.org/1999/xhtml">

          <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport">
              <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
              <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
              <meta content="#EEEEEE" name="sr bgcolor">
              <title>Contact Formulario</title>
              <style type="text/css">
                  html,
                  body {
                      width: 100%;
                      margin: 0;
                  }
          
                  #divPadre {
                      text-align: center;
                      margin: 150px 20px;
                      padding: 0 20px;
                  }
          
                  #divHijo {
                      max-width: 650px;
                      padding: 10px;
                      margin: 150px auto;
                      background-color: rgb(255, 255, 255);
                      border-radius: 10px;
                      box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
                  }
          
                  b {
                      color: #696969;
                  }
          
                  p {
                      font-size: 14px;
                      margin-bottom: 5px;
                      margin-top: 0;
                  }
                  
                  p, h3 {
                      color: #848484;
                      text-align: left;
                  }
          
                  a {
                      text-decoration: none;
                      color: cornflowerblue;
                  }
          
                  .conteiner {
                      margin-top: 50px;
                      display: flex;
                      flex-direction: row;
                      flex-wrap: wrap;
                  }
              </style>
          
          
          
          </head>
          
          <body
              style="margin:0; padding:5px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4;">
          
              <div id="divPadre">
          
                  <div id="divHijo">
          
          
                      <div style="margin: 20px 50px 50px 50px;">
                          <div>
                            <img style="width:200px" src="https://loscabosmunchies.com/img/logo/logo6.png">
                          </div>
          
                          <div class="container">                    
                              
                              <div style="width:100%; display: inline-block;">          
                                  <div style="margin-bottom: 30px;">
                                        <h3><b>¡Un cliente hizo una compra!</h3>
                                        <h3>Esta es la información:</h3>
                                        <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Detalles del pedido para <strong>'.$name.'</strong></p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Producto: <strong>'.$producto.'</strong></p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Cantidad: <strong>'.$cantidad.'</strong></p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Total: <strong>$'.$amount.'</strong></p>
                                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Correo: <strong>'.$email.'</strong></p>
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
} catch (Exception $e) {
    echo "ERROR";
}