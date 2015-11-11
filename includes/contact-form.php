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

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    $privatekey = "6Le0RxATAAAAANKTdmJhjzW0dZ088JPvfrv-EsPW";
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $privatekey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    );

    $curlConfig = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $data
    );

    $ch = curl_init();
    curl_setopt_array($ch, $curlConfig);
    $response = curl_exec($ch);
    curl_close($ch);
}

$jsonResponse = json_decode($response);

if ($jsonResponse->success == "true")
    $captcha_message = "true";
else
    $captcha_message = "false";

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