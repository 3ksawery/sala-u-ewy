# Sala u Ewy

Strona internetowa sali weselnej **Sala u Ewy** w Luchowie koło Łobżenicy: wesela, przyjęcia rodzinne, osiemnastki, konsolacje i catering.

Jednostronicowa witryna w czystym HTML i CSS (bez frameworków i bez JavaScriptu) z formularzem zapytania o termin obsługiwanym przez PHP.

## Status projektu
Projekt to tylko demo strony dla Sali u Ewy, nie jest to oficjalna strona. Projekt ma na celu stworzenie portfolio i zebranie doswiadczenia w tworzeniu stron i aplikacji webowych.

## Zawartość strony

- **O nas** – krótki opis i najważniejsze udogodnienia (liczba gości, noclegi, klimatyzacja, parking)
- **Oferta** – wesela, imprezy rodzinne, konsolacje, catering
- **Galeria** – zdjęcia sali
- **Zapytaj o wolny termin** – formularz (imię, telefon, data, rodzaj przyjęcia) + opinia klienta
- **Kontakt** (stopka) – adres z linkiem do Map Google, telefon, Facebook, godziny rezerwacji

Strona jest responsywna: na telefonie menu zwija się do „hamburgera” (zrobionego na checkboxie, bez JS), a przycisk **Zadzwoń** otwiera połączenie (`tel:`).

## Struktura plików

```
.
├── index.html      # cała strona
├── style.css       # style (kolory w zmiennych CSS w :root)
├── kontakt.php     # obsługa formularza – wysyła zapytanie e-mailem
└── zdjecia/
    └── salauewy.jpg
```

Czcionki: [Playfair Display](https://fonts.google.com/specimen/Playfair+Display) (nagłówki) i [Plus Jakarta Sans](https://fonts.google.com/specimen/Plus+Jakarta+Sans) (tekst), ładowane z Google Fonts.

## Uruchomienie lokalnie

Sam wygląd strony można zobaczyć, otwierając `index.html` w przeglądarce.

Żeby przetestować formularz, potrzebny jest PHP:

```bash
php -S localhost:8000
```

i otwórz <http://localhost:8000>. Uwaga: lokalnie funkcja `mail()` zwykle nie wysyła wiadomości (brak serwera pocztowego), więc zobaczysz komunikat o błędzie wysyłki – to normalne. Na hostingu z obsługą poczty zadziała.

## Konfiguracja formularza

W `kontakt.php` ustaw adres, na który mają przychodzić zapytania:

```php
$mail = "mail@domena.com";   // ← zmień na adres właścicielki
```

Nagłówek `From: formularz@salauewy.pl` powinien używać domeny, na której stoi strona – inaczej wiadomości mogą trafiać do spamu.

## Wdrożenie

Wystarczy wgrać wszystkie pliki na dowolny hosting z PHP (np. przez FTP). Nie ma kroku budowania ani zależności do instalowania.

## Do zrobienia przed publikacją

W kodzie są komentarze `DO POTWIERDZENIA` / `DO UZUPEŁNIENIA`:

- [ ] Potwierdzić z właścicielką: liczbę gości, klimatyzację, parking
- [ ] Potwierdzić godziny przyjmowania rezerwacji
- [ ] Podmienić zdjęcia poglądowe z Unsplash (oferta, galeria) na prawdziwe zdjęcia sali – za zgodą właścicielki
- [ ] Wkleić prawdziwą opinię z Google (z imieniem autora)
- [ ] Ustawić docelowy adres e-mail w `kontakt.php`
- [ ] Ostylować stronę z odpowiedzią formularza (`kontakt.php`) i dodać link powrotu na stronę główną

## Kontakt

Sala u Ewy · Luchowo 71, 89-310 Łobżenica · tel. 673 491 230 · [Facebook](https://www.facebook.com/salauewy/)
