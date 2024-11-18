<?php

// Check if form data is stored in cookies
if (isset($_COOKIE["käyttäjän_nimi"]) && isset($_COOKIE["Katu_osoite"]) && isset($_COOKIE["sähköposti"])) 
{
    $käyttäjän_nimi = $_COOKIE["käyttäjän_nimi"];
    $Katu_osoite = $_COOKIE["Katu_osoite"];
    $sähköposti = $_COOKIE["sähköposti"];
} else 
{
    $käyttäjän_nimi = '';
    $Katu_osoite = '';
    $sähköposti= '';
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Get form data
    $käyttäjän_nimi = $_POST["käyttäjän_nimi"];
    $Katu_osoite = $_POST["Katu_osoite"];
    $sähköposti = $_POST["sähköposti"];

    // Save form data in cookies (valid for 30 day)
    setcookie("käyttäjän_nimi", $käyttäjän_nimi, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("Katu_osoite", $Katu_osoite, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("sähköposti", $sähköposti, time() + (86400 * 30), "/"); // 86400 = 1 day

    // Display a message
    echo "Tilaus vastaanotettu $käyttäjän_nimi. Lähetämme viestin osoitteeseen $sähköposti. kiitos!";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
</head>

<body>
    <h1>Order Form</h1>
    <form method="post" action="">
        <label for="käyttäjän_nimi">Nimi:</label>
        <input type="text" name="käyttäjän_nimi" value="Laiba khan" size="10" style="margin-bottom: 10px;">

        <br>

        <label for="Katu_osoite">Katu osoite:</label>
        <input type="text" name="Katu_osoite" value="emannantie 10 k" size="10" style="margin-bottom: 10px;">

        <br>

        <label for="sähköposti">"sähköposti osoite":</label>
        <input type="text" name="sähköposti"value="laaaibah@gmail.com" size="10" style="margin-bottom: 10px;">

        <br>

        <input type="submit" value="Laheta" 
        style="margin-bottom: 10px; background-color:green; color:white;"></button>

    </form>
</body>

</html>