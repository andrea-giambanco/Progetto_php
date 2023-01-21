<?php





if (isset($_GET["Utente"])) {
    error_reporting(E_ERROR | E_PARSE);
    include('sondaggio.html?');

    include('sondaggio.html');
}
else if(isset($_GET["Admin"])){
    echo "ciao";
}
?>
<html>

<head>
    <title>Pagina di Sondaggio</title>
    <link rel="stylesheet" href="mezzi_di_trasporto.css">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">

</head>
<body>



<div class="div_with_form">

    <div class="container">
        <form method="post" action="aggiornamento_Json.php">
            <div class="col">
                <div class="row">
                    <label id="Name">Nome</label>
                    <input type="text" id="id_Name" name="nome"
                           required placeholder="Nome">
                </div>
                <div class="row">
                    <label id="Surname">Cognome</label>
                    <input type="text" id="ID_surname" name="cognome"
                           required placeholder="Cognome">
                </div>

                <div class="row">
                    <label id="Provincia">Provincia</label>
                    <select name="Provincia" id="ID_provincia">
                        <option value="Udine">Udine</option>
                        <option value="Pordenone">Pordenone</option>
                        <option value="Gorizia">Gorizia</option>
                        <option value="Trieste">Trieste</option>
                    </select>
                </div>
                <div class="row">
                    <label id="Percorso">Percorso</label>
                    <select name="Percorso" id="Id_percorso">

                        <option value="Extraurbano">Extraurbano</option>
                        <option value="Urbano">Urbano</option>

                    </select>
                </div>
                <div class="row">
                    <label id="Mezzo">Mezzo di Trasporto</label>
                    <select name="Mezzo" id="ID_mezzo">
                        <option value="Bus">Bus</option>
                        <option value="Treno">Treno</option>
                        <option value="Aereo">Aereo</option>
                        <option value="Auto">Auto</option>
                        <option value="Moto">Moto</option>
                        <option value="Ferrovia">Ferrovia</option>
                        <option value="Altro">Altro</option>

                </div>
            </div>






            <input type="submit">


            <div>
                <img src="genera_grafico.php" alt="Localita">
            </div>
        </form>
    </div>
</div>


</body>
<footer>

</footer>
</html>