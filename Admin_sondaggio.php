<?php

$jsonString = file_get_contents('dati_sondaggio.json');


$data = json_decode($jsonString,true);


?>
<!DOCTYPE html>
<html lang="en">
<style>
    h1{
        text-align: center;
        color: #000000;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 50px;
    }
    #grafico{
        margin-left: 35%;
        margin-top: 5%;
        margin-bottom: 5%;
        border-radius: 10px;
    }
    body{
        background-color: #8b7b8b;
    }
    h3{
        text-align: center;
        color: #000000;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 50px;
    }
    br{

    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<h1>Riepilogo sondaggio "MEZZI DI TRASPORTO"</h1>

<div>
    <img src="genera_grafico.php" alt="Localita" id="grafico">

</div>
<div>
    <h3>I partecipanti al sondaggio sono:</h3>
    <?php
    echo "Nome:" . $data["nome"] . "<br>";
    echo "Cognome:".$data["Cognome"]."<br>";
    ?>
</div>
</body>
</html>
