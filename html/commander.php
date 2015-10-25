<?php
require('commander.class.php');

if(isset($_GET['type'])){
	switch($_GET['type']){
		case 'io':
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->route( $_GET['in'], $_GET['out'] );
			// print "nice: " . $_GET['in']." to ".$_GET['out'];
			exit();
			break;
			
		case 'preset':
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->loadPreset( $_GET['in'] );
			
			exit();
			break;
	
		case 'tool':
			$myCommander = new Commander( '10.0.233.18', 23 );
			$myCommander->routeTool( $_GET['in'] );
			// print "nice: " . $_GET['in'];
			exit();
			break;
	}
	
	
	
	
}

if(isset($_GET['source']) ){
	switch($_GET['source']){
		
		case 'Apple TV':
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->loadPreset( 1 );
			break; 
		case 'PC mixed screen':
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->loadPreset( 2 );
			break; 
		case 'Click-Share':
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->loadPreset( 3 );
			break; 
		case 'PC full screen': 
			$myCommander = new Commander( '10.0.233.13', 23 );
			$myCommander->loadPreset( 4 );
			break; 
	}
}

//schauen ob es gibt ein command wenn ja



?>