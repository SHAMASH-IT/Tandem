<?php 

require_once './config/init.php';

// $to = "hatem.web99@gmail.com";
// $subject = "Test Email";
// $message = "This is a test email sent from PHP.";
// $headers = "From: bettercallfreelancer@gmail.com";

// ini_set("SMTP", "ssl://ssl0.ovh.net");  // OVH SMTP server
// ini_set("smtp_port", 465);  // OVH SMTP port
// ini_set("sendmail_from", "webmaster@tandem-tunisie.com");  // Your email address
// ini_set("smtp_user", "webmaster@tandem-tunisie.com");
// ini_set("smtp_pass", "Tandem/123.");
// if (mail($to, $subject, $message, $headers)) {
//     echo "Email sent successfully.";
// } else {
//     echo "Failed to send email.";
// }

require_once ROUTER;

if(stripos(PATH, 'admin') === 0 || stripos(PATH, 'api') === 0){
    session_start();
    if( ($_SESSION["role"] ?? "") == 'admin'){
        serve_request($route['admin']);
    }
}

serve_request($route['public']);