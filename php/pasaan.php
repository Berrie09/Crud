<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanpassen</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" type="x-icon" href="../img/icon.png">
</head>

<body>
    <?php
    require 'config.php';

    //ID uit de URL lezen
    $id = $_GET['id'];

    //ID tonen
    
    //Query om de gegevens van die ID op te halen
    $query = "SELECT * FROM crud_agenda WHERE ID = " . $id;

    //Voer de query uit en vang het resultaat op
    $result = mysqli_query($mysqli, $query);

    $item = mysqli_fetch_assoc($result);

    ?>

    <div class="testbox">
        <form name="agendaFormulier" method="post" action="../php/aanpasVerwerk.php">
            <div class="banner">
                <h1>Agenda gegevens</h1>
            </div>
            <br />
            <fieldset>
                <legend>Gegevens</legend>
                <p>Wat wil je aanpassen?</p>
                <div class="item">
                    <input type="hidden" name="idVeld" value="<?php echo $item['ID']; ?>">
                    <label for="onderwerpVeld">Onderwerp <span>*</span></label>
                    <input placeholder="steekwoord(en)" name="onderwerpVeld" type="text" name="onderwerpVeld"
                        value="<?php echo $item['Onderwerp']; ?>" required />
                </div>
                <div class="item">
                    <label for="inhoudVeld">Inhoud <span>*</span></label>
                    <input placeholder="Wat wil je precies onthouden?" id="inhoudVeld" type="text" name="inhoudVeld"
                        value="<?php echo $item['Inhoud']; ?>" required />
                </div>
                <div class="item">
                    <label for="begindatumVeld">Begindatum <span>*</span></label>
                    <input placeholder="Wanneer gaat het beginnen?" id="begindatumVeld" type="date"
                        name="begindatumVeld" value="<?php echo $item['Begindatum']; ?>" required />
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="item">
                    <label for="einddatumVeld">Einddatum <span>*</span></label>
                    <input placeholder="Wanneer eindigt het?" id="einddatumVeld" type="date" name="einddatumVeld"
                        value="<?php echo $item['Einddatum']; ?>" required />
                    <i class="fas fa-calendar-alt"></i>
                </div>

                <div class="item">
                    <label for="prioriteitVeld">Prioriteit<span>*</span></label>
                    <input placeholder="Hoe belangrijk is het? (1-5)" id="prioriteitVeld" type="number"
                        name="prioriteitVeld" value="<?php echo $item['Prioriteit']; ?>" required min="1" max="5" />
                </div>


                <div class="btn-block">
                    <button value="item aanpassen" name="verzend" type="submit">Aanpassen</button>

                </div>
        </form>
    </div>

</body>

</html>