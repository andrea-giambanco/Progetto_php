<?php

    $Nome = check_data($_POST['nome']);
    $Cognome = check_data($_POST['cognome']);
    $Provincia = $_POST['Procincia'];
    $Mezzo = $_POST['Mezzo'];
    $Percorso = $_POST['Percorso'];

    $data = [
        'Nome' => $Nome,
        'Cognome' => $Cognome,
        'Provincia' => $Provincia,
        'Mezzo' => $Mezzo,
        'Percorso' => $Percorso,

    ];

    $file = file_get_contents('dati_sondaggio.json');
    $temp = json_decode($file);
    array_push($temp, $data);
    $jsonData = json_encode($temp);

    file_put_contents('dati_sondaggio.json', $jsonData);

    header("Location:http://giambanco.bearzi.info/grazie.php");
    function check_data($temp)
    {
        $temp = trim($temp);
        $temp = stripslashes($temp);
        $temp = htmlspecialchars($temp);
        return $temp;
    }
?>
