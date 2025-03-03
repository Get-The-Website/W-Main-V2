<?php
require_once('connection/dbConnect.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$inserted_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . 'PHPMailer/src/Exception.php';
require __DIR__ . 'PHPMailer/src/PHPMailer.php';
require __DIR__ . 'PHPMailer/src/SMTP.php';

function getUserIP() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = getUserIP(); // Get the user's IPv4 address
$url = "http://ip-api.com/json/{$ip}";
$response = file_get_contents($url);
$data = json_decode($response, true);
$locationData=[];

if ($data['status'] == 'success') {
    $locationData = [
        "ip" => $data['query'],
        "country" => $data['country'],
        "region" => $data['regionName'],
        "city" => $data['city'],
        "zip" => $data['zip'],
        "lat" => $data['lat'],
        "lon" => $data['lon'],
        "isp" => $data['isp']
    ];
}

$sender_name = "Get The Website";
$sender_email = "noreply@getthewebsite.net";
$username = "noreply@getthewebsite.net";
$password = "D+0xw|G!y^q";
$host = "smtp.hostinger.com";
$contact_number="01729-277765";
$contact_email="info@getthewebsite.net";

if(isset($_POST['contactSubmit'])){
    $page=$_POST['page'];
    $ContactName=$_POST['ContactName'];
    $ContactEmail=$_POST['ContactEmail'];
    $ContactNumber=$_POST['ContactNumber'];
    $ContactComment=$_POST['ContactComment'];

    $json = json_encode($locationData);

    $query = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `page`, `ip`, `location`, `inserted_at`, `updated_at`) VALUES ('$ContactName','$ContactEmail','$ContactNumber','$ContactComment','$page','$ip','$json','$inserted_at','$updated_at')";
    $insert = $db_handle->insertQuery($query);

    $subject = "Thank You for Your Website Request";

    $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Website Request Confirmation</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                h1, h2, h3, p {
                    margin: 0;
                }
                .header {
                    background-color: #007BFF;
                    color: #fff;
                    text-align: center;
                    padding: 20px;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
                .info-section {
                    padding: 20px;
                    background-color: #f2f2f2;
                    border-radius: 5px;
                    margin-bottom: 20px;
                }
                .button-container {
                    text-align: center;
                    margin-bottom: 15px;
                }
                a.btn {
                    display: inline-block;
                    background-color: #007BFF;
                    color: white;
                    padding: 10px 4rem;
                    text-align: center;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-top: 20px;
                }
                .footer {
                    background-color: #333;
                    color: #fff;
                    padding: 10px;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                }
                .footer p {
                    margin: 0;
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>Thank You for Your Request!</h1>
                </div>
    
                <div class="info-section">
                    <p>Dear ' . $ContactName . ',</p>
                    <p>Thank you for reaching out to us. We have received your website request, and one of our agents will be in touch with you soon.</p>
                    <p>If you need assistance urgently, please feel free to contact us at:</p>
                    <ul>
                        <li><strong>Phone:</strong> ' . $contact_number . '</li>
                        <li><strong>Email:</strong> <a href="mailto:' . $contact_email . '">' . $contact_email . '</a></li>
                    </ul>
                    <p>We look forward to assisting you.</p>
                </div>
    
                <div class="footer">
                    <p>&copy; ' . date("Y") . ' ' . $sender_name . ' All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>
    ';



    $receiver_email = $ContactEmail;


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->CharSet = 'UTF-8';

    $mail->Subject = $subject;
    $mail->msgHTML($message);
    $mail->addAddress($receiver_email);


    if ($insert && $mail->send()) {
        // Send a JSON response
        echo json_encode(['status' => 'success']);
    } else {
        // Send a failure JSON response
        echo json_encode(['status' => 'error', 'message' => 'There was an issue with your submission']);
    }
}

if(isset($_POST['submitNewsletter'])){

    $FooterEmail=$_POST['FooterEmail'];

    $json = json_encode($locationData);

    $query = "INSERT INTO `newsletter`(`email`, `ip`, `location`, `inserted_at`) VALUES ('$FooterEmail','$ip','$json','$inserted_at')";
    $insert = $db_handle->insertQuery($query);

    $subject = "Thank You for Your Website Request";

    $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Website Request Confirmation</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                h1, h2, h3, p {
                    margin: 0;
                }
                .header {
                    background-color: #007BFF;
                    color: #fff;
                    text-align: center;
                    padding: 20px;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
                .info-section {
                    padding: 20px;
                    background-color: #f2f2f2;
                    border-radius: 5px;
                    margin-bottom: 20px;
                }
                .button-container {
                    text-align: center;
                    margin-bottom: 15px;
                }
                a.btn {
                    display: inline-block;
                    background-color: #007BFF;
                    color: white;
                    padding: 10px 4rem;
                    text-align: center;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-top: 20px;
                }
                .footer {
                    background-color: #333;
                    color: #fff;
                    padding: 10px;
                    border-bottom-left-radius: 10px;
                    border-bottom-right-radius: 10px;
                }
                .footer p {
                    margin: 0;
                    text-align: center;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>Thank You for Your Request!</h1>
                </div>
                <div class="info-section">
                    <p>Thank you for reaching out to us. We have newsletter subscription, we will send you our new offers and events.</p>
                    <p>If you need assistance urgently, please feel free to contact us at:</p>
                    <ul>
                        <li><strong>Phone:</strong> ' . $contact_number . '</li>
                        <li><strong>Email:</strong> <a href="mailto:' . $contact_email . '">' . $contact_email . '</a></li>
                    </ul>
                    <p>We look forward to assisting you.</p>
                </div>
    
                <div class="footer">
                    <p>&copy; ' . date("Y") . ' ' . $sender_name . ' All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>
    ';



    $receiver_email = $FooterEmail;


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->CharSet = 'UTF-8';

    $mail->Subject = $subject;
    $mail->msgHTML($message);
    $mail->addAddress($receiver_email);


    if ($insert && $mail->send()) {
        // Send a JSON response
        echo json_encode(['status' => 'success']);
    } else {
        // Send a failure JSON response
        echo json_encode(['status' => 'error', 'message' => 'There was an issue with your submission']);
    }
}

