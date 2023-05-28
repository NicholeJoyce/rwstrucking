<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
 
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
 
// if(isset($_POST["send"])){
//     $name = $_POST['name'];
//     $message = "Hi, ". $name . "! This is to acknowledge your email that we have receieved it, we'll get back to you as soon as we can. Regards, RWS Trucking Services!";
    
//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = 'smtp.hostinger.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'contact@dnails.shop';
//     $mail->Password = 'Nichole@15';
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = '2525';

//     $mail->setFrom('contact@dnails.shop', 'RWS Trucking Services');
    
//     $mail->isHTML(true);
//     $email = $_POST['email'];
//     $mail->addAddress($email);
//     $mail->isHTML(true);                                                                                                     
//     $mail->Subject = $_POST['subject'];
//     $mail->Body =($message);
//     $mail->send();
//     echo "Feedback Successful!";}

// ---------------------------------------------- 2nd try
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
//     //POST
//     $email = $_POST['mail'];
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     //$message = $_POST['message'];

//     //PHP Mailer Declaration
//     $mail = new PHPMailer(true);

//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'truckingservicesrws@gmail.com';
//     $mail->Password = 'zgfdvkzbsvaxrkdn'; //Gmail App Password
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = '465';

//     //SETTING Email
//     $mail->setFrom('truckingservicesrws@gmail.com', 'RWS Trucking Services'); //Senders Email
//     $mail->addAddress($email); //Receivers Email
//     $mail->isHTML(true);
//     $mail->Subject = "RWS Trucking Services";
//     $mail->Body = "<hr>" . "Good Day " ."<b>$name</b>" . "! " . "<br> I appreciate you taking the time to reach out to us. Please know that I have received your message, and I will do my best to respond as soon as possible. Your patience and understanding are greatly appreciated, and I look forward to getting back to you soon. Thank you for your message, and have a wonderful day. 
//      <br><br>        
//           Regards, <br>
//          <b>RWS Trucking Service </b>";
//     $mail->send();
//     header('Location: index.php');

//---------------------------------------------------3rd try
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if (isset($_POST['send'])) {
//     $user = $_POST['email'];
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];

//     $message = 'Thank you for reaching us out,' . $name . '!
//         <br> "I appreciate you taking the time to reach out to me. Please know that I have received your message, and I will do my best to respond as soon as possible. Your patience and understanding are greatly appreciated, and I look forward to getting back to you soon. Once again, thank you for your message, and have a wonderful day.
//             <br><br>
//             Regards, <br>
//             <b>RWS Trucking Service </b>';

//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = 'smtp.hostinger.com';
//     $mail->SMTPAuth = 'true';
//     $mail->Username = 'contact@dnails.shop';
//     $mail->Password = 'Nichole@15';
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = '587';

//     $mail->setFrom('contact@dnails.shop', 'RWS Trucking Services');
//     $mail->addAddress($user);
//     $mail->isHTML(true);
//     $mail->Subject = $subject;
//     $mail->Body = $message;
//     $mail->send();

//     header('Location: index.php');

//-------------------------------- 4th try

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
    //POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'truckingservicesrws@gmail.com';
    $mail->Password = 'zgfdvkzbsvaxrkdn'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //SETTING Email
    $mail->setFrom('truckingservicesrws@gmail.com', 'RWS Trucking Services'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "RWS Trucking Services " . "| " . $_POST['subject'];
    $mail->Body = "<hr>" . "Good Day " ."<b>$name</b>" . "! " . "<br> I appreciate you taking the time to reach out to us. Please know that I have received your message, and I will do my best to respond as soon as possible. Your patience and understanding are greatly appreciated, and I look forward to getting back to you soon. Thank you for your message, and have a wonderful day. 
     <br><br>        
          Regards, <br>
         <b>RWS Trucking Service </b>";
    $mail->send();

    header('Location: index.php');

}

?>