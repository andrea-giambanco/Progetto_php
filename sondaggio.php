

<?php


    $Nome = check_data($_POST['nome']);
    $Cognome = check_data($_POST['cognome']);
convalidation_name_surname($Nome,$Cognome);

    $data=get_data_of_user();
    create_file_Json($data);




function check_data($temp){
    $temp = trim($temp);
    $temp = stripslashes($temp);
    $temp = htmlspecialchars($temp);
    return $temp;
}
function convalidation_name_surname($Nome,$Cognome){
    $Nome_corretto = To_lower('Andrea');
    $Cognome_corretto = 'Giambanco';



    $Nome = To_lower($Nome);
    $Cognome = To_lower($Cognome);


    if(strcmp($Nome,$Nome_corretto) == 0)
    {
        print "Le credenziali sono corrette";
    }
    else
    {
        print "Le credenziali non sono corrette";
    }

}
function To_lower($Stringa)
{
    $Stringa = strtolower($Stringa);

    return $Stringa;
}
function get_data_of_user(){

    $data = array("Provincia" => $_POST['Provincia'],"Percorso" => $_POST['Percorso']);

    return $data;
}

function create_file_Json($data)
{
   file_put_contents('dati_sondaggio.json',json_encode($data));
}
?>


<html>

<head>
    <title>Pagina di Sondaggio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>


<form method="post" action="sondaggio.php">
    <label id="Name">Nome</label>
    <input type="text" id="id_Name" name="nome" required>
    <label id="Surname">Cognome</label>
    <input type="text"  id="ID_surname" name="cognome" required>
    <select name="Provincia" id="ID_provincia">

        <option value="Udine">Udine</option>
        <option value="Pordenone">Pordenone</option>
        <option value="Gorizia">Gorizia</option>
        <option value="Trieste">Trieste</option>

    </select>


    <select name="Percorso" id="Id_percorso">

        <option value="Extraurbano">Extraurbano</option>
        <option value="Urbano">Urbano</option>

    </select>

    <input type="submit">
</form>

</body>
<footer>

</footer>
</html>