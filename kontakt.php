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
        $liczbaGosci = trim($_POST['liczba-gosci'] ?? '');
        $wiadomosc = trim($_POST['wiadomosc'] ?? '');
        // Usuń znaki nowej linii, żeby nie dało się dopisać własnych nagłówków e-maila
        $imie = str_replace(["\r", "\n"], ' ', $imie);
        $data = str_replace(["\r", "\n"], ' ', $data);
        $rodzaj = str_replace(["\r", "\n"], ' ', $rodzaj);
        $telefon = str_replace(["\r", "\n"], ' ', $telefon);
        $mail = "mail@domena.com";
        $subject = mb_encode_mimeheader("Termin od: $imie", "UTF-8", "B");
        $message = "Data: $data, rodzaj: $rodzaj, telefon: $telefon, Szacowana liczba gości: $liczbaGosci i informacja od klienta: $wiadomosc";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: formularz@salauewy.pl";
        if($imie !== '' && $data !== '' && $rodzaj !== '' && $telefon !=='' && $liczbaGosci !== ''){
            if(!mail($mail, $subject, $message, $headers)){
                echo 'Nie udało się wysłać, zadzwoń: <a href="tel:+48673491230" class="phone-link">673 491 230</a>';
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