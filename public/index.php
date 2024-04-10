<?php

use App\Classes\Mail;
use App\Classes\Session;

require_once "../bootstrap/init.php";

$mailer = new Mail();

//Session::remove("name");
//Session::add("name","tester1");
//var_dump(Session::get("name"));
// Session::replace("name","teste2");
// echo Session::get("name");
// $con = Session::has("name");

// var_dump($con);

//Session::flash("created_success","Category Created successfully");
//Session::flash("created_success");

//echo $_SESSION["created_success"];




// $content="While installing the entire package manually or with Composer
// is simple, convenient, and reliable, you may want to include only vital files in your project. 
// At the very least you will need src/PHPMailer.php. If you're using SMTP, you'll need src/SMTP.php, 
// and if you're using POP-before SMTP (very unlikely!), you'll need src/POP3.php. You can skip the language folder
// if you're not showing errors to users and can make do with English-only errors. If you're using XOAUTH2 you will need 
// src/OAuth.php as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier
// to use Composer!";


// $data=[
//     "to"=>"phyokyawarkar281@gmail.com",
//     "to_name"=>"arkarphyokyaw",
//     "content"=>$content,
//     "subject"=>"this is mail testing of my ecommerice website",
//     "filename"=>"send",
//     "img_link"=>""
// ];

//echo $hey;
//echo $something;
//echo $content;

// if($mailer->send($data))
// {
//     echo "<h1> mail send success</h1>";
// }else{
//     echo "<h1> mail send fail</h1>";
// }
?>
