<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>

    <?php
    //Neem de database verbinding van config.php mee
    require 'config.php';

    //Query maken
    $query = "SELECT * FROM crud_agenda";

    //Het resultaat ophalen na het uitvoeren van de query
    $result = mysqli_query($mysqli, $query);

    //Als er geen resultaat is, is het fout gegaan
    if (!$result) {
        echo "<p>Fout!</p>";
        echo "<p>" . $query . "</p>";
        echo "<p>" . mysqli_error($mysqli) . "</p>";
        exit;
    }


    //Als er wat te vinden is, records zijn
    if (mysqli_num_rows($result) > 0) {
        //Tabel
        echo "<table class = 'styled-table'> ";

        //Headers van de tabel
        echo "<tr><th>Onderwerp</th> <th>Inhoud</th> <th>Begindatum</th> <th>Einddatum</th> <th>Prioriteit</th> <th>Details</th> <th>Verwijderen</th> <th>Aanpassen</th> </tr>";
        //Zolang er items zijn, blijf ze tonen op de pagina
        while ($item = mysqli_fetch_assoc($result)) {

            //Gegevens tonen
    
            echo "<tr>";
            echo "<td>" . $item['Onderwerp'] . "</td>";
            echo "<td>" . $item['Inhoud'] . "</td>";
            echo "<td>" . $item['Begindatum'] . "</td>";
            echo "<td>" . $item['Einddatum'] . "</td>";
            echo "<td>" . $item['Prioriteit'] . "</td>";
            echo "<td><a class='button-19' href = 'detail.php?id=" . $item['ID'] . "'>Bekijk</a></td>";
            echo "<td><a class='button-19' href = 'verwijder.php?id=" . $item['ID'] . "'>Verwijder</a></td>";
            echo "<td><a class='button-19' href = 'pasaan.php?id=" . $item['ID'] . "'>Pas aan</a></td>";


            echo "</tr>";

        }
        //Tabel afsluiten
        echo "</table>";
    }

    //Als er geen records zijn, dan
    else {
        echo "<h4>Geen gegevens gevonden, helaas!</h4>";
    }
    ?>

</body>

</html>