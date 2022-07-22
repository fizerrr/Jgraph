<?php // content="text/plain; charset=utf-8"
ini_set('include_path', 'D:\wamp\www\Scrap_invectory\php\klasy\Jgraph\\');
require_once ('../jpgraph.php');
require_once ('../jpgraph_gantt.php');

// A new graph with automatic size
$graph = new GanttGraph();

//  A new activity on row '0'
$activity = new GanttBar(0,"Activity 1","2001-12-21","2002-01-19");
$graph->Add($activity);

// Display the Gantt chart
$graph->Stroke();
?>
