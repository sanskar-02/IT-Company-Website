<?php session_start();?>
<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['comment'])){
    $fname = ($_POST['name']);
    $email = ($_POST['email']);
    $mobile = ($_POST['phone']);
    $message = ($_POST['comment']);

    $html = "<table><tr><td>Name</td><td>$fname</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Message</td><td>$message</td></tr></table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tsl";
    $mail->SMTPAuth = true;
    $mail->Username="akankshapss34@gmail.com";
    $mail->Password="jemv akab rbyc iqje";
	$mail->SetFrom("akankshapss34@gmail.com");
	$mail->addAddress("akankshapss34@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if($mail->send()){
        echo "Thank You for contacting Us.";
    }else{
        echo"Message Error";
    }

}
?>