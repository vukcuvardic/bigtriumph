<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$area = $_POST["area"];
$time = $_POST["time"];
$kidsNumber = $_POST["kidsNumber"];
$kid1Age = $_POST["kid1Age"];
$kid2Age = $_POST["kid2Age"];
$kid3Age = $_POST["kid3Age"];
$kid4Age = $_POST["kid4Age"];
$kid5Age = $_POST["kid5Age"];
$kid6Age = $_POST["kid6Age"];
$kid7Age = $_POST["kid7Age"];
$kid8Age = $_POST["kid8Age"];
$kid9Age = $_POST["kid9Age"];
$customerSource = $_POST["customerSource"];
$customerSourceOther = $_POST["customerSourceOther"];
$category = $_POST["category"];
$text = $_POST["message"];
$captcha = $_POST["gRecaptchaResponse"];

if (isset($captcha)) {
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
$msg = "
Name: $name
Email: $email
   
Phone: $phone
Area: $area
Time: $time

Category: $category
" 
.
(!empty($kidsNumber) ? "Number of Kids: $kidsNumber" : "") . "\n"
.       
(!empty($kidsNumber) ? ("Kids Age: " .
        (!empty($kid1Age) ? $kid1Age . ", " : "") .
        (!empty($kid2Age) ? $kid2Age . ", " : "") .
        (!empty($kid3Age) ? $kid3Age . ", " : "") .
        (!empty($kid4Age) ? $kid4Age . ", " : "") .
        (!empty($kid5Age) ? $kid5Age . ", " : "") .
        (!empty($kid6Age) ? $kid6Age . ", " : "") .
        (!empty($kid7Age) ? $kid7Age . ", " : "") .
        (!empty($kid8Age) ? $kid8Age . ", " : "") .
        (!empty($kid9Age) ? $kid9Age : "")) : "") . "\n"
.
"
Heard of us from: $customerSource
"
.
(!empty($customerSourceOther) ? "Source: $customerSourceOther " : "") . "\n"
.
"
Comments: $text
";

$to = "info@bigtriumph.com";
$subject = "Website Contact Form";
$header = "Website Contact Form";

$jsonResponse = json_decode($response);

if ($jsonResponse->{'success'} === true) 
{
    mail ($to,$subject,$msg,$header);
    echo "true";
}
else
    $captcha_message = "false";
?>
