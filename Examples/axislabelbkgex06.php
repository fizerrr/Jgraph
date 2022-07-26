<?php // content="text/plain; charset=utf-8"
ini_set('include_path', 'D:\wamp\www\Scrap_invectory\php\klasy\Jgraph\\');
require_once ('../jpgraph.php');
require_once ('../jpgraph_line.php');

$ydata = array(12,19,3,9,15,10);

// The code to setup a very basic graph
$graph = new Graph(200,150);
$graph->SetScale('intlin');
$graph->SetMargin(30,15,40,30);
$graph->SetMarginColor('white');
$graph->SetFrame(true,'blue',3);

$graph->title->Set('Label background');
$graph->title->SetFont(FF_ARIAL,FS_BOLD,12);

$graph->subtitle->SetFont(FF_ARIAL,FS_NORMAL,10);
$graph->subtitle->SetColor('darkred');
$graph->subtitle->Set('"LABELBKG_XYFULL"');

$graph->SetAxisLabelBackground(LABELBKG_XYFULL,'orange','red','lightblue','red');

// Use Ariel font
$graph->xaxis->SetFont(FF_ARIAL,FS_NORMAL,9);
$graph->yaxis->SetFont(FF_ARIAL,FS_NORMAL,9);
$graph->xgrid->Show();

// Create the plot line
$p1 = new LinePlot($ydata);
$graph->Add($p1);

// Output graph
$graph->Stroke();

?>


