<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$area = $_POST["area"];
$time = $_POST["time"];
$kidsNumber = $_POST["kidsNumber"];
$kidsAge = $_POST["kidsAge"];
$customerSource = $_POST["customerSource"];
$category = $_POST["category"];
$text = $_POST["message"];

$captcha = $_POST["g-recaptcha-response"];

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le0RxATAAAAANKTdmJhjzW0dZ088JPvfrv-EsPW&response=" . $captcha . "&remoteip=" . $_SERVER["REMOTE_ADDR"]), true);

if($response['success'] === false) {
    $captcha_message = "false";
} else {
    $captcha_message = "true";
}

$captcha_message = var_export($captcha, true);

$msg = "
Name: $name
Email: $email
Phone: $phone
    
Area: $area
Time: $time

Captcha: $captcha_message
    
Category: $category
Number of Kids: $kidsNumber
Kids Age: $kidsAge
    
Heared of us from: $customerSource
    
Comments: $text
";

$to = "vukcuvardic@gmail.com";
$subject = "Website Contact Form";
$header = "Website Contact Form";

mail ($to,$subject,$msg,$header);
?>