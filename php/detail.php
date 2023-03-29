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
    //Voeg de db verbinding toe
    require 'config.php';


    //ID uit de URL lezen
    $id = $_GET['id'];

    //ID tonen
    

    //Query om de gegevens van die ID op te halen
    $query = "SELECT * FROM crud_agenda WHERE ID = " . $id;

    //Voer de query uit en vang het resultaat op
    $result = mysqli_query($mysqli, $query);

    //Als er een record is, dan
    if (mysqli_num_rows($result) > 0) {
        $item = mysqli_fetch_assoc($result);
        echo "<div id ='div'>";
        //Gegevens van de record tonen
        echo "<p><b>Wat is het onderwerp?:</b> " . $item['Onderwerp'] . "</p>";
        echo "<p><b>Wat ga je doen?:</b> " . $item['Inhoud'] . "</p>";
        echo "<p><b>Vanaf:</b> " . $item['Begindatum'] . "</p>";
        echo "<p><b>Tot:</b> " . $item['Einddatum'] . "</p>";
        echo "<p><b>Hoe belangrijk is het?:</b> " . $item['Prioriteit'] . "</p>";


    }

    //Als er niks gevonden is, dan
    else {
        echo "Geen data met dit gevonden! <br/>";
    }

    //Terug naar de agenda
    echo "<a class = 'button-19' href='toonagenda.php'>Naar de agenda</a> " . " <a class = 'button-19' href='../html/toevoegForm.html'>Nieuwe item toevoegen</a>" . " <a class = 'button-19' href='verwijder.php?id={$id}'>Verwijder</a>";
    echo "</div>";
    ?>
</body>

</html>