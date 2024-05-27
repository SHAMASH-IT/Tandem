<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Type: text/html');
    header("Expires: 0");
    header("Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

    header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');
    header('Access-Control-Max-Age: 86400');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    function contact()
    {
        header("Content-type: application/json");
        
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

                $headers['Content-type'] = 'text/html; charset=iso-8859-1';

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

    function offer()
    {
        header("Content-type: application/json");

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