<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_line.php');
 
// Some data
$ydata = array(11,31,83,12,5,1,9,13,5,7);
 
// Create the graph. These two calls are always required
$graph = new Graph(450,350);
$graph->SetScale('textlin');
 
// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor('blue');
 
// Add the plot to the graph
$graph->Add($lineplot);
 
// Display the graph
$graph->Stroke();
?>