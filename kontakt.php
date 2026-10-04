<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    if(!empty($_POST)){
        $imie = trim($_POST['imie'] ?? '');
        $data = trim($_POST['data'] ?? '');
        $rodzaj = trim($_POST['rodzaj'] ?? '');
        $telefon = trim($_POST['telefon'] ?? '');
        $mail = "mail@domena.com";
        $subject = "Termin od: $imie";
        $message = "Data: $data, rodzaj: $rodzaj, telefon: $telefon";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: formularz@salauewy.pl";
        if($imie !== '' && $data !== '' && $rodzaj !== '' && $telefon !==''){
            if(!mail($mail, $subject, $message, $headers)){
                echo "Nie udało się wyslac, zadzwoń: 673 491 230";
            } else {
                echo htmlspecialchars("Dziękujemy $imie za zaproponowanie terminu - $data, odezwiemy się na $telefon, żeby potwierdzić termin");
            }
        } else {
                echo 'Uzupełnij dane poprawnie';
        }
    } else {
        echo 'Uzupełnij dane';
    }
    ?>
</body>
</html>