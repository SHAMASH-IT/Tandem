<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

function pageNotfound(){
    http_response_code(404);
    include VIEW_DIR."/public/pages/404.php";  
}
function index(){
    include VIEW_DIR."/public/pages/home.php";  
}
function faq(){
    include VIEW_DIR."/public/pages/faq.php";  
}
function formation(){
    include VIEW_DIR."/public/pages/formation.php";  
}
function gallery(){
    include VIEW_DIR."/public/pages/gallery.php";  
}
function about(){
    include VIEW_DIR."/public/pages/about.php";  
}
function coworking(){
    include VIEW_DIR."/public/pages/coworking.php";  
}
function devperso(){
    include VIEW_DIR."/public/pages/devperso.php";  
}
function tuteur(){
    include VIEW_DIR."/public/pages/contact.php";  
}
function entreprise(){
    include VIEW_DIR."/public/pages/entreprise.php";  
}
function conferences(){
    include VIEW_DIR."/public/pages/conferences.php";  
}
function itti(){
    include VIEW_DIR."/public/pages/conferences/itti.php";  
}
function junior(){
    include VIEW_DIR."/public/pages/junior.php";  
}

function teamBuilding(){
    include VIEW_DIR."/public/pages/team-building.php";  
}

function contact(){
    include VIEW_DIR."/public/pages/contact.php";
} 
function inscription(){

    if (isset($_POST['submit'])) {
        require 'config/PHPMailer/Exception.php';
        require 'config/PHPMailer/PHPMailer.php';
        require 'config/PHPMailer/SMTP.php';

        extract($_POST);
        $response = false;
        if (!empty($name) && !empty($phone) && !empty($email) && !empty($level) && !empty($formation) && !empty($type) && !empty($time)) {
            $data = "<pre>Name:                   " . $name . "\n Email:                 " . $email . "\n Phone:             " . $phone . "\n Niveau:             \n" . $level . "\n Langue:             \n" . $formation . "\n Horaire:             \n" . $time . "\n Type:             \n" . $type . " </pre>";
            
            $data = "
                    <html>
                        <head>
                            <title>Inscription au TANDEM</title>
                        </head>
                        <body>
                            <p>Inscription au Cours Tandem:</p>
                            <table>
                                <tr>
                                    <td>Nom & Prénom:</td>
                                    <td>" . $name . "</td>
                                </tr>
                                <tr>
                                    <td>Email:</td><td
                                    td>" . $email . "</td>
                                </tr>
                                <tr>
                                    <td>Téléphone:</td>
                                    <td>" . $phone . "</td>
                                </tr>
                                <tr>
                                    <td>Niveau:</td>
                                    <td>" . $level . "</td>
                                </tr>
                                <tr>
                                    <td>formation:</td>
                                    <td>" . $formation . "</td>
                                </tr>
                                <tr>
                                    <td>$time:</td>
                                    <td>" . $time . "</td>
                                </tr>
                                <tr>
                                    <td>type:</td>
                                    <td>" . $type . "</td>
                                </tr>
                            </table>
                        </body>
                            </html>";

            $id = "ID: " . uniqid();

            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            try {
                // Set OVH SMTP server configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.mail.ovh.net';
                $mail->SMTPAuth = true;
                $mail->Username = 'webmaster@tandem-tunisie.com';
                $mail->Password = 'Tandem/123.';
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
                $mail->Port = 465;

                // Set email content
                $mail->setFrom($email);
                $mail->addAddress('webmaster@tandem-tunisie.com');
                $mail->addAddress('info@tandem-tunisie.com');
                $mail->addAddress('wissem@tandem-tunisie.com');
                $mail->isHTML(true);
                $mail->Subject = "Inscription TANDEM";
                $mail->IsHTML(true);  
                $mail->Body = html_entity_decode($data);;

                // Send email
                $mail->send();
                $response = true;
            } catch (Exception $e) {
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                $response = false;
            }
        }
    }

    include VIEW_DIR."/public/pages/inscription.php";
    if(isset($response)){
        if($response){
            echo '<script>alert("Inscription effectué avec succès")</script>';
        }else{
            echo '<script>alert("Inscription n\'est pas effectué")</script>';
        }
    }
} 
function search(){
    include VIEW_DIR."/public/pages/search.php";  
} 


function information(){
    include VIEW_DIR."/public/pages/information.php";
}

function summerSessions(){
    include VIEW_DIR."/public/pages/summer-sessions-languages.php";
}

function sejour(){
    include VIEW_DIR."/public/pages/sejour.php";  
}

function contactUs()
{
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Type: text/html');
    header("Expires: 0");
    header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');

    header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

    header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
    header('Access-Control-Max-Age: 86400');
    
    require 'config/PHPMailer/Exception.php';
    require 'config/PHPMailer/PHPMailer.php';
    require 'config/PHPMailer/SMTP.php';

    if (!empty($_POST["name"]) && !empty($_POST["phone"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]))
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.mail.ovh.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'webmaster@tandem-tunisie.com';
            $mail->Password = 'Tandem/123.';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $data = "
                    <html>
                        <head>
                            <title>Message du page contactez nous TANDEM</title>
                        </head>
                        <body>
                            <p>" . $_POST["subject"] . "</p>
                            <table>
                                <tr>
                                    <td>Nom & Prénom:</td>
                                    <td>" . $_POST["name"] . "</td>
                                </tr>
                                <tr>
                                    <td>Email:</td><td
                                    td>" . $_POST["email"] . "</td>
                                </tr>
                                <tr>
                                    <td>Téléphone:</td>
                                    <td>" . $_POST["phone"] . "</td>
                                </tr>
                                <tr>
                                    <td>Sujet:</td>
                                    <td>" . $_POST["subject"] . "</td>
                                </tr>
                                <tr>
                                    <td>Message:</td>
                                    <td>" . $_POST["message"] . "</td>
                                </tr>
                            </table>
                        </body>
                    </html>";

                $mail->setFrom($_POST["email"]);
                $mail->addAddress('webmaster@tandem-tunisie.com');
                $mail->addAddress('info@tandem-tunisie.com');
                $mail->addAddress('wissem@tandem-tunisie.com');
                $mail->Subject = "Contact: ".$_POST["subject"];

                $mail->IsHTML(true);  
                $mail->Body = html_entity_decode($data);;
                $mail->CharSet = 'UTF-8';
                $mail->Encoding = 'quoted-printable';

                $mail->send();

                if($mail->send()){
                    echo "success";
                }else{
                    echo "error";
                }
            } catch (Exception $e) {
                echo "exception";
            }
    }else {
        echo "error";
    }
}

function registered()
{
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Type: text/html');
    header("Expires: 0");
    header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');

    header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

    header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
    header('Access-Control-Max-Age: 86400');

    require 'config/PHPMailer/Exception.php';
    require 'config/PHPMailer/PHPMailer.php';
    require 'config/PHPMailer/SMTP.php';

    if (!empty($_POST["name"]) && !empty($_POST["phone"]) && 
        !empty($_POST["email"]) && !empty($_POST["level"]) &&
        !empty($_POST["cours"]) && !empty($_POST["type"]) && !empty($_POST["time"]))
        {
            $data = "
                    <html>
                        <head>
                            <title>Inscription au TANDEM</title>
                        </head>
                        <body>
                            <p>Inscription au Cours Tandem:</p>
                            <table>
                                <tr>
                                    <td>Nom & Prénom:</td>
                                    <td>" . $_POST["name"] . "</td>
                                </tr>
                                <tr>
                                    <td>Email:</td><td
                                    td>" . $_POST["email"] . "</td>
                                </tr>
                                <tr>
                                    <td>Téléphone:</td>
                                    <td>" . $_POST["phone"] . "</td>
                                </tr>
                                <tr>
                                    <td>Niveau:</td>
                                    <td>" . $_POST["level"] . "</td>
                                </tr>
                                <tr>
                                    <td>formation:</td>
                                    <td>" . $_POST["cours"] . "</td>
                                </tr>
                                <tr>
                                    <td>Time:</td>
                                    <td>" . $_POST["time"] . "</td>
                                </tr>
                                <tr>
                                    <td>type:</td>
                                    <td>" . $_POST["type"] . "</td>
                                </tr>
                            </table>
                        </body>
                            </html>";

            $id = "ID: " . uniqid();

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.mail.ovh.net';
                $mail->SMTPAuth = true;
                $mail->Username = 'webmaster@tandem-tunisie.com';
                $mail->Password = 'Tandem/123.';
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
                $mail->Port = 465;

                $mail->Subject = "Inscription TANDEM";
                $mail->setFrom($_POST["email"]);
                $mail->addAddress('webmaster@tandem-tunisie.com');
                $mail->addAddress('info@tandem-tunisie.com');
                $mail->addAddress('wissem@tandem-tunisie.com');
                $mail->IsHTML(true);  
                $mail->Body = html_entity_decode($data);;
                $mail->CharSet = 'UTF-8';
                $mail->Encoding = 'quoted-printable';

                $mail->send();

                if($mail->send()){
                    echo "success";
                }else{
                    echo "error";
                }
            } catch (Exception $e) {
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                echo "error";
            }
        }else {
            echo "error";
        }
}

function companyOffer()
{
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Type: text/html');
    header("Expires: 0");
    header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');

    header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

    header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
    header('Access-Control-Max-Age: 86400');

    require 'config/PHPMailer/Exception.php';
    require 'config/PHPMailer/PHPMailer.php';
    require 'config/PHPMailer/SMTP.php';

    if (!empty($_POST["raison"]) && !empty($_POST["responsable"]) && 
        !empty($_POST["email"]) && !empty($_POST["phone"]) &&
        !empty($_POST["address"]) && !empty($_POST["language"]))
        {
            $data = "
                    <html>
                        <head>
                            <title>Demande d'une offre pour entrprise au Cours Tandem</title>
                        </head>
                        <body>
                            <p>Demande d'une offre pour entrprise au Cours Tandem:</p>
                            <table>
                                <tr>
                                    <td>Rasion sociale:</td>
                                    <td>" . $_POST["raison"] . "</td>
                                </tr>
                                <tr>
                                    <td>Responsable:</td><td
                                    td>" . $_POST["responsable"] . "</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>" . $_POST["email"] . "</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td>" . $_POST["phone"] . "</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>" . $_POST["address"] . "</td>
                                </tr>
                                <tr>
                                    <td>language:</td>
                                    <td>" . $_POST["language"] . "</td>
                                </tr>
                            </table>
                        </body>
                    </html>";

            //$id = "ID: " . uniqid();

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.mail.ovh.net';
                $mail->SMTPAuth = true;
                $mail->Username = 'webmaster@tandem-tunisie.com';
                $mail->Password = 'Tandem/123.';
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
                $mail->Port = 465;

                $mail->Subject = "Offre Entreprise TANDEM";
                $mail->setFrom($_POST["email"]);
                $mail->addAddress('webmaster@tandem-tunisie.com');
                $mail->addAddress('info@tandem-tunisie.com');
                $mail->addAddress('wissem@tandem-tunisie.com');
                $mail->isHTML(true);
                $mail->IsHTML(true);  
                $mail->Body = html_entity_decode($data);;
                $mail->CharSet = 'UTF-8';
                $mail->Encoding = 'quoted-printable';

                $mail->send();

                if($mail->send()){
                        echo "success";
                }else{
                        echo "error";
                }
            } catch (Exception $e) {
                echo "exception";
            }
        }else {
            echo 'error';
        }
}