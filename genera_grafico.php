<?php
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

error_reporting(E_ALL);

//$array = get_array();
$datay= get_array();



$graph = new Graph(400,300,'auto');
$graph->SetScale("textlin");


$graph->yaxis->SetTickPositions(array(0,1,2,3,4,5), array(15,45,75,105,135));
$graph->SetBox(false);


$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Bus','Treno','Aereo','Auto','Moto','Ferrovia','Altro'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);


$b1plot = new BarPlot($datay);


$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillGradient("#4B0082","white",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(45);
$graph->title->Set("TRASPORTI");

// Display the graph
$graph->Stroke();


function get_array(){


    $json = file_get_contents('dati_sondaggio.json');
    $obj = json_decode($json);
    $string = json_encode($obj);




    $count_bus = substr_count($string, "Bus");
    $count_treni = substr_count($string, "Treni");
    $count_aereo = substr_count($string, "Aereo");
    $count_auto = substr_count($string, "Auto");
    $count_moto = substr_count($string, "Moto");
    $count_ferrovia = substr_count($string, "Ferrovia");
    $count_altro = substr_count($string, "Altro");
    $vettore_associativo_mezzi = [
        $count_bus, // bus
        $count_treni, // treni
        $count_aereo, //aereo
        $count_auto,//auto
        $count_moto,//moto
        $count_ferrovia, //ferrovia
        $count_altro // altro

    ];
    return $vettore_associativo_mezzi;
}
?>