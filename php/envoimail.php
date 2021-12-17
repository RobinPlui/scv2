<?php
if(isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['message']) && !empty($_POST['message'])){
    $secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&remoteip=$remoteip";

    $get = file_get_contents($request);
    $decode = json_decode($get, true);

    if($decode['success'])
        echo "";
    else 
        echo "Error";
    }

    include_once '../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
     
    function sendMail(string $to, string $from, string $from_name, string $subject, string $body) {
        $CONFIG= include 'infomail.php';
        $mail = new PHPMailer(true);  // Crée un nouvel objet PHPMailer
        $mail->IsSMTP(); // active SMTP
        $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
        $mail->SMTPSecure = 'ssl'; //or ssl
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
     
        //Pour autoriser un envoi depuis 127.0.0.1
        $mail->SMTPOptions = [
                "ssl"=>[
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                        "allow_self_signed"=>true
                        ]
                ];

        $mail->SMTPAuth = true;  // Authentification SMTP active
        $mail->Username = $CONFIG['user'];
        $mail->Password = $CONFIG['password'];
     
        $mail->isHTML(true);
        $mail->SetFrom($_POST['email']);
        $mail->Body = ('Nom_Prenom : '.$_POST['nom'].'<br><br>Email : '.$_POST['email'].'<br><br>'.$_POST['message'].'');
        $mail->AddAddress($to);
        $mail->Send();
    }
    
    try{
        sendMail('robin.pluijms@sts-sio-caen.info', 'me@gmail.com', $_POST['nom'], 'Test', '<h1>Test</h1><p>Message</p>');
        echo 'Votre Email a bien été envoyé !';
    }
    catch (\Exception $e){
        echo $e->getMessage();
    }
?>