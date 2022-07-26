<?php // content="text/plain; charset=utf-8"
ini_set('include_path', 'D:\wamp\www\Scrap_invectory\php\klasy\Jgraph\\');
require_once ('../jpgraph.php');
require_once ('../jpgraph_bar.php');

$datay1=array(13,8,19,7,17,6);
$datay2=array(4,5,2,7,5,25);

// Create the graph.
$graph = new Graph(350,250);
$graph->SetScale('textlin');
$graph->SetMarginColor('white');

// Setup title
$graph->title->Set('Acc bar with gradient');

// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
$bplot->SetColor('darkred');
$bplot->SetWeight(0);

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);
$bplot2->SetColor('darkgreen');
$bplot2->SetWeight(0);

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$accbplot->SetColor('darkgray');
$accbplot->SetWeight(1);
$graph->Add($accbplot);

$graph->Stroke();
?>
