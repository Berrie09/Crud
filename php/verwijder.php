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

//Lees de uit de URL
$id = $_GET['id'];

$query = "SELECT * FROM crud_agenda WHERE ID = " . $id;

$result = mysqli_query($mysqli, $query);
//Als er een is:
if ($id !="")
{
    $item = mysqli_fetch_assoc($result);
    //Toon het ID
    echo "<div id ='div'>";
    echo "<p>Verwijder item met ID: " . $id . "</p>";
    echo "<p><b>Onderwerp:</b> " . $item['Onderwerp']. "</p>";
    echo "<p><b>Inhoud:</b> " . $item['Inhoud']. "</p>";

    echo "<p><b>Weet je het heel zeker?<b></p>";
}

else{
    echo "<p>Niks gevonden?<p/>";
}
echo "<a class = 'button-19' href='verwijder_verwerk.php?id={$id}'>JA</a> " . " <a class = 'button-19' href='toonagenda.php'>NEE</a>";
echo "</div>";
?>
</body>
</html>