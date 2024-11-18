<!DOCTYPE html>
<html>

<head>
    <title>Number Sequence</title>
</head>

<body>

    <form method="post" action="">
        <label for="startNumber">Enter starting number:</label>
        <input type="number" name="startNumber" required>
        <button type="submit">Tulosta luvut</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $startNumber = isset($_POST['startNumber']) ? $_POST['startNumber'] : 0;

        echo "<ul>";
        echo "<h2>Luvut:</h2>";
        for ($i = $startNumber; $i < $startNumber + 10; $i++) {
            echo "<li>" .$i . "</li>";
        }
        echo "</ul>";
    }
    ?>

</body>

</html>