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

    include_once('connection.php');

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
        $stmt = $conn->prepare("SELECT * FROM adminlogin");
        $stmt->execute();
        $users = $stmt->fetchAll();

        foreach ($users as $user) {

            if (
                ($user['username'] == $username) &&
                ($user['password'] == $password)
            ) {
                header("location: adminpage.php");
            } else {
                echo "<script language='javascript'>";
                echo "alert('WRONG INFORMATION')";
                echo "</script>";
                die();
            }
        }
    }

    ?>
    <form action="login_Verwerk.php" method="post">
        <div id="div">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div><br>

            <button class="button-19" type="submit" name="login" value="Log in">Log in</button>
        </div>
    </form>
</body>

</html>