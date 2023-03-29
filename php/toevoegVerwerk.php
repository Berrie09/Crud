<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="../css/verwerk.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>

    <?php
    require 'config.php';
    //Is er iets verstuurd?
    if (isset($_POST['verzend'])) {

        //Lees de velden uit en stop ze in variabelen.
        $ond = $_POST['onderwerpVeld'];
        $inh = $_POST['inhoudVeld'];
        $begin = $_POST['begindatumVeld'];
        $eind = $_POST['einddatumVeld'];
        $prior = $_POST['prioriteitVeld'];

        $query = "INSERT INTO crud_agenda";
        $query .= "(Onderwerp, Inhoud, Begindatum, Einddatum, Prioriteit)";
        $query .= "VALUES ('{$ond}', '{$inh}', '{$begin}', '{$eind}', '{$prior}')";

        //Opvangen en query uitvoeren.
        $result = mysqli_query($mysqli, $query);

        //Checken of het gelukt is.
        if ($result) {
            echo "<div id ='div'>";
            //Gegevens van de record tonen
            echo "<b>Het is toegevoegd! Bekijk het maar.</b> " . "<br/>" . "<br/>";
            echo "<a class = 'button-19' href='toonagenda.php'>Naar de agenda</a> " . " <a class = 'button-19' href='../html/toevoegForm.html'>Nieuwe item toevoegen</a>";
            echo "</div>";

        } else {
            echo "Niet toegevoegd...";
            echo $query . "<br/>";
            echo mysqli_error($mysqli);
        }

    } else {
        echo "<div id ='div'>";
        //Gegevens van de record tonen
        echo "<b>Niet toegevoegd...</b> " . "<br/>" . "<br/>";
        echo "<a class = 'button-19' href='toonagenda.php'>Naar de agenda</a> " . " <a class = 'button-19' href='../html/toevoegForm.html'>Nieuwe item toevoegen</a>";
        echo "</div>";
        ;
    }


    ?>
</body>

</html>