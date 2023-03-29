<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>

    <?php

    include_once('config.php');

    function test_input($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        $query = "SELECT password from users WHERE username='$username'";
        $result = mysqli_query($mysqli, $query);
        $userPassword;

        while ($row = $result->fetch_assoc()) {
            $userPassword = $row["password"];
        }

        if (sha1($password) == $userPassword) {
            header("location: toonagenda.php");

        } else {
            echo "<div id ='div'>";
            echo "Fout gebruikersnaam en/of wachtwoord!";
        }
        echo "<a class = 'button-19' href='login.php'>Opnieuw inloggen</a> " . " <a class = 'button-19' href='toonagenda.php'>Naar de agenda</a>";
        echo "</div>";
    }

    ?>

</body>

</html>

</html>