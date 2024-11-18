<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $etunimi = $_POST["etunimi"];
    $sukunimi = $_POST["sukunimi"];
    $opiskelijanumero = $_POST["opiskelijanumero"];
    $ryhmatunnus = $_POST["ryhmatunnus"];
    $valittuKurssi = $_POST["kurssi"];
    $kurssinAjankohta = $_POST["kurssin_ajankohta"];
    $valittuOpettaja = $_POST["opettaja"];


    if (isset($_POST["email"])) {

        $to = "gr287157@gradia.fi";
        $subject = "Kiitos rekisteröitymisestä!";

        $msg = "Opiskelijan tiedot:\n\n";
        $msg .= "Etunimi: $etunimi\n";
        $msg .= "Sukunimi: $sukunimi\n";
        $msg .= "Opiskelijanumero: $opiskelijanumero\n";
        $msg .= "Ryhmätunnus: $ryhmatunnus\n";
        $msg .= "Valittu kurssi: $valittuKurssi\n";
        $msg .= "Kurssin ajankohta: $kurssinAjankohta\n";
        $msg .= "Valittu opettaja: $valittuOpettaja\n";

        $headers = "From: laaaibah@gmail.com";

        // Send email
        if (mail($to, $subject, $msg, $headers)) {
            echo " <br>Sähköposti lähetetty onnistuneesti";
        } else {
            echo " <br>Sähköpostin lähetys epäonnistui";
        }
    }

    // Display student's information on the new webpage
    echo "<p>Opiskelijan tiedot:</p>";
    echo "<p>Etunimi: $etunimi</p>";
    echo "<p>Sukunimi: $sukunimi</p>";
    echo "<p>Opiskelijanumero: $opiskelijanumero</p>";
    echo "<p>Ryhmätunnus: $ryhmatunnus</p>";
    echo "<p>Valittu kurssi: $valittuKurssi</p>";
    echo "<p>Kurssin ajankohta: $kurssinAjankohta</p>";
    echo "<p>Valittu opettaja: $valittuOpettaja</p>";
}
