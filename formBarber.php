<?php

// Sostituisci 'path_to_phpmailer' con il percorso relativo corretto della cartella PHPMailer nel tuo progetto
// require __DIR__ . '/PHPMailer-master/src/Exception.php';
// require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
// require __DIR__ . '/PHPMailer-master/src/SMTP.php';

require __DIR__ . 'Exception.php';
require __DIR__ . 'PHPMailer.php';
require __DIR__ . '-SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $servizio = $_POST['servizio'];
    $giornata = $_POST['giornata'];

    $mail = new PHPMailer(true);

    try {
        // Configurazione del server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lasthanma@gmail.com';
        $mail->Password = 'mtnjtvvvjdtjbnap';
        $mail->SMTPSecure = 'ssl'; // Usa 'tls' se richiesto
        $mail->Port = 465; // Porta SMTP di Gmail (può essere 587 per TLS)

        // Dettagli dell'email
        $mail->setFrom('lasthanma@gmail.com', 'Tony & Remo');
        $mail->addAddress('clinton10e@gmail.com');
        $mail->Subject = 'Dati del Form - Prenotazione';
        $mail->Body = "Nome: $name\nCognome: $surname\nEmail: $email\nTelefono: $telefono\nServizio: $servizio\nGiornata: $giornata";
        // Invia l'email
        $mail->send();
        header("Location: sentEmail.html");
    } catch (Exception $e) {
        echo 'Errore nell\'invio dell\'email: ', $mail->ErrorInfo;
    }

}

?>





