<!DOCTYPE html>
<html>

<head>
    <title>The first PHP page</title>
</head>

<body>
    <p>The day has <?php echo 24 * 60 * 60; ?> seconds.</p>
    <p>Today is <?php echo date("jnY"); ?>.</p>
    <p>PHP version <?php echo PHP_VERSION; ?>.</p>
    <?php
    echo "<ul>";
    for ($i = 1; $i <= 20; $i++) {
        echo "<li>" . $i;
    }
    echo "</ul>";
    ?>

    <?php
    echo "<p>Welcome!</p>";
    echo  '<p>Here is some text.</p>'; ?>

    <?php
    $nimi = "Aku";
    $vuosi = 1990;
    echo $nimi;
    echo $vuosi;
    echo $nimi;
    ?>
</body>

</html>