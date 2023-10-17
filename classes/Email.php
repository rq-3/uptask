<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    protected $email;
    protected $nombre;
    protected $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('cuentas@task.com');
        $mail->addAddress('cuentas@task.com', 'uptask.com');
        $mail->Subject = 'confirma tu cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= '<p><strong>Hola ' . $this->nombre . '</strong>
        Has creado tu cuenta en Uptask, Solo debes confirmarla en el siguiente enlace</p>';
        $contenido .= '<P>Presiona aqui: <a href="'.$_ENV["APP_URL"].'/confirmar?
        token=' . $this->token . '">Confirmar Cuenta</a></P>';
        $contenido .= '<p>Si tu no creaste esta cuenta puedes ignorar este mensaje</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;

        $mail->send();
    }

    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'cd86c77fd8764a';
        $mail->Password = '0aab4e9e626d05';

        $mail->setFrom('cuentas@task.com');
        $mail->addAddress('cuentas@task.com', 'uptask.com');
        $mail->Subject = 'Reestablece tu Password';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= '<p><strong>Hola ' . $this->nombre . '</strong>
        Parece que has olvidado tu password, sigue el siguiente enlace para recuperarlo</p>';
        $contenido .= '<P>Presiona aqui: <a href="'.$_ENV["APP_URL"].'/restablecer?
        token=' . $this->token . '">Reestablecer Password</a></P>';
        $contenido .= '<p>Si tu no creaste esta cuenta puedes ignorar este mensaje</p>';
        $contenido .= '</html>';

        $mail->Body = $contenido;

        $mail->send();
    }
}