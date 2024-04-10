<?php
namespace App\Classes;
use PHPMailer\PHPMailer\PHPMailer;


class Mail
{
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->setUp();
    }

    public function setUp()
    {
        $this->mail->SMTPDebug = 0; // Set SMTP debug level to 0
        $this->mail->isSMTP();
        $this->mail->Host = $_ENV["SMTP_HOST"];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $_ENV["EMAIL_USERNAME"];
        $this->mail->Password ="gvqg edit wyqy rwxw";//this is no found less secure app access 
        $this->mail->Port = $_ENV["SMTP_PORT"];
        $this->mail->isHTML(true);
        //$this->mail->SingleTo(true);

        $this->mail->From=$_ENV["ADMIN_EMAIL"];
        $this->mail->FromName="arkarphyokyaw";
    }

    public function send($data)
    {
        $this->mail->addAddress($data["to"],$data["to_name"]);
        $this->mail->Subject=$data["subject"];
        $this->mail->Body=make($data["filename"],$data);
        return $this->mail->send();
    }
}
?>
