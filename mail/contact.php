<?php
	session_start();

// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if(empty($_POST['recaptcha-response'])){
        header('Location: http://localhost/Portfolio/');
    }else{
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=VOTRE_CLE&response={$_POST['recaptcha-response']}";

        // On vérifie si curl est installé
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // On utilisera file_get_contents
            $response = file_get_contents($url);
        }

        // On vérifie qu'on a une réponse
        if(empty($response) || is_null($response)){
            header('Location: http://localhost/Portfolio/');
        }else{
            $data = json_decode($response);
            if($data->success){
                if(
                    isset($_POST['nom']) && !empty($_POST['nom']) &&
                    isset($_POST['email']) && !empty($_POST['email']) &&
                    isset($_POST['tel']) && !empty($_POST['tel']) &&
                    isset($_POST['message']) && !empty($_POST['message'])
                ){
                    // On nettoie le contenu
                    $nom = strip_tags($_POST['nom']);
                    $email = strip_tags($_POST['email']);
                    $tel = strip_tags($_POST['tel']);
                    $message = htmlspecialchars($_POST['message']);

                    // Ici vous traitez vos données

                    $_SESSION['success'] = 1;
                    $nom = $_POST['nom'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $message = $_POST['message'];
                    
                    $sujet="Contact Portfolio Bastien";
                    $mailDestinataire="bastienfr14@gmail.com";
                
                    $from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
                    
                    $messageMail = "
                            <h1>Formulaire de contact Portfolio Bastien :</h1> <br>
                            <br>
                            Nom :   ".$nom."<br>
                            Email :   ".$email."<br>
                            Numéro de téléphone :   ".$tel."<br>
                            Message :   ".$message."<br>
                            
                           ";
                    mail($mailDestinataire, $sujet, $messageMail, $from);
                    header('Location: http://localhost/Portfolio/');
                }
            }else{
                header('Location: http://localhost/Portfolio/');
                echo 'Erreur';
            }
        }
    }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}
?>