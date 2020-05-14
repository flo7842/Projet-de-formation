<?php
namespace F\Controller;

use F\Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use F\Controller\FormController;


class MailController extends Controller {




    function sendMail()
    {

        $messages = [];


        if(isset($_POST['formValid'])) {
            require '../vendor/autoload.php';

            $mail = new PHPMailer(true);

            try {
                //Server settings                 // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host = 'mail12.lwspanel.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   // Enable SMTP authentication
                $mail->Username = 'paricisainte@flodevfullstackportfolio.com';                     // SMTP username
                $mail->Password = '*********';                          // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom($_POST['mail'], $_POST['name']);
                $mail->addAddress('paricisainte@flodevfullstackportfolio.com', 'flo');     // Add a recipient
                $mail->addAddress('paricisainte@flodevfullstackportfolio.com');               // Name is optional
                $mail->addReplyTo($_POST['mail'], $_POST['name']);
                $mail->addCC('paricisainte@flodevfullstackportfolio.com');
                $mail->addBCC('paricisainte@flodevfullstackportfolio.com');

                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $_POST['subject'];
                $mail->Body = $_POST['msg'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->send();
               // echo 'Message has been sent';

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }

            $messages[] = "le message a bien été envoyé !";


        }

        $this->render('contact_view.php', [
            'form'=> new FormController(),
            'messages' => $messages
        ]);


    }




}