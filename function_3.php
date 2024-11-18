<!DOCTYPE html>
<html>

<head>
    <title>Pole lenght calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <label for="pituus">syötä pituutesi (cm):</label>
        <input type="number" name="pituus" id="pituus" required>

        <label for="sauvan">sauvan käyttötarkoituksen:</label>
        <select name="sauvan" id="sauvan" required>
            <option value="Luisteluhiihto">Luisteluhiihto</option>
            <option value="Perinteinen">Perinteinen</option>
            <option value="Sauvakävely">Sauvakävely</option>
        </select>

        <button type="submit">Laskea</button>
    </form>

</body>

</html>

<?php

function laskeaSauvanPituus($pituus, $tarkoitus)
{

    switch ($tarkoitus) {
        case 'Luisteluhiihto':
            return $pituus * 0.9;
        case 'Perinteinen':
            return $pituus * 0.85;
        case 'Sauvakävely':
            return $pituus * 0.68;
        default:
            return 0;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pituus = $_POST["pituus"];
    $tarkoitus = $_POST["sauvan"];

    // Calculate pole length using the function
    $sauvanPituus = laskeaSauvanPituus($pituus, $tarkoitus);

    // Display the result to the user
    echo "laskettusauvan pituus $tarkoitus on: " . $sauvanPituus . " cm";
}
?>