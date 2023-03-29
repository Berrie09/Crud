<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwijder</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>
    <?php

    require "config.php";

    $id = $_GET['id'];



    //Query om het te vwS
    $query = "DELETE FROM crud_agenda WHERE ID = " . $id;
    //Voer het uit, true of false
    $result = mysqli_query($mysqli, $query);

    //Als het gelukt is
    if ($result) {
        echo "<div id ='div'>";
        echo "<b>Record is verwijderd!</b><br/><br/>";

    } else {
        echo "Niet gelukt ome te verwijderen!";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }

    echo "<a class = 'button-19' href='toonagenda.php'>Naar de agenda</a> " . " <a class = 'button-19' href='../html/toevoegForm.html'>Nieuwe item toevoegen</a>";
    echo "</div>";

    ?>
</body>

</html>