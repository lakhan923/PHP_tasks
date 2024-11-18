<!DOCTYPE html>
<html lang="en">

<head>
    <title>User's information and greetings</title>
</head>

<body>
    <form method="post" action="gender.php">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>