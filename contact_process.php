<?php

    // $to = "kalaiyarasan.offl@gmail.com";
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $subject = $_REQUEST['subject'];
    // $number = $_REQUEST['number'];
    // $cmessage = $_REQUEST['message'];

    // $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your site";

    // $logo = 'img/logo.png';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $subject = htmlspecialchars($_POST['subject']);
//     $message = htmlspecialchars($_POST['message']);

// 	print($name);
// 	print($email);
// 	print($subject);
// 	print($message);


//     $to = "kalaiyarasan.offl@gmail.com";  // Replace with your email address
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
//     $fullMessage = "Name: $name\n";
//     $fullMessage .= "Email: $email\n\n";
//     $fullMessage .= "Message:\n$message\n";

//     if (mail($to, $subject, $fullMessage, $headers)) {
//         echo "Thank you! Your message has been sent.";
//     } else {
//         echo "Oops! Something went wrong, and we couldn’t send your message.";
//     }
// }
$msg = "First line of text\nSecond line of text";
$to = "kalaiyarasan.offl@gmail.com";
$subject = "My Subject";
$headers = "From: kalaiyarasan.offl.2004@gmail.com\r\n";  // Replace with your own email
$headers .= "Reply-To: your-email@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $msg, $headers)) {
    echo "Success!";
} else {
    echo "Invalid!";
}

?>