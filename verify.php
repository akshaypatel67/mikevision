<?php
require_once('recaptchalib.php');
define("PRIV_KEY", "YOUR_PRIVATE_KEY");

$name = filter_var($_POST['name']);
$email = filter_var($_POST['email']);
$message = filter_var($_POST['message']);

if(in_array('', array($name, $email, $message))) {
  $result = "form-error";
}
else {
  $resp = recaptcha_check_answer (PRIV_KEY, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
  if (!$resp->is_valid) {
    //Captcha was entered incorrectly
    $result = "captcha-error";
  }
  else {
    //Captcha was entered correctly
    $result = "success";

    $emailTo = 'YOUR_EMAIL_ADDRESS';
    $body = "Name:\n$name \n\nEmail:\n$email \n\nMessage:\n$message \n\n";
    $headers = 'From: '.$name.' <'.$email.'>'."\r\n" . 'Reply-To: ' . $email;
    mail($emailTo, 'Contact Form', $body, $headers);
    $emailSent = true;
  }
}

echo $result;
?>
