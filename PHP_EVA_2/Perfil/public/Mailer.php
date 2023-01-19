<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;

    class Mailer{
        private const NuevoUsuairo ="Nuevo Usuario";
        private const Host = "smtp.educa.madrid.org";
        private const UserName = "xing.chen2";
        private const port = 587;
        private const origen="xing.chen2@educa.madrid.org";
        private const contraseña="contraseña";

        function Enviar($valor){
            global $config;
            $mail = new PHPMailer(true);
            try {                     
                $mail->isSMTP();                                            
                $mail->Host       = self::Host;                    
                $mail->SMTPAuth   = true;                                
                $mail->Username   = self::UserName;                          
                $mail->Password   = $config['secreto'];                      
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = self::port;  

                //Recipients
                $mail->setFrom(self::origen, 'linkedin');
                $mail->addAddress($valor['correo'], 'Querido nuevo usuario');     //Add a recipient
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Hola nuevo usuario '.$valor['Nombre_Usuario'];
                $mail->Body    = 'has hecho un registro y ya esta <b>registrado!</b>';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
?>