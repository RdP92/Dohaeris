<?php
require('commander.class.php');

if(isset($_GET['type'])){
	switch($_GET['type']){
		case 'io':
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->route( $_GET['in'], $_GET['out'] );
			echo "nice: " . $_GET['in']." to ".$_GET['out'];
			if( $_GET['in'] == 9){
				$myCommander = new Commander( '147.87.117.33', 23 );
				$myCommander->route( '6', $_GET['out'] );
				$myCommander = new Commander( '147.87.117.34', 23 );
				$myCommander->route( 2 );
				echo "very nice: " . $_GET['in'];					
			}
				
			if( $_GET['in'] == 6){
				$myCommander = new Commander( '147.87.117.33', 23 );
				$myCommander->route( $_GET['in'], $_GET['out'] );
				$myCommander = new Commander( '147.87.117.34', 23 );
				$myCommander->route( 1 );	
				echo "nice: " . $_GET['in'];
			}	
				
				
				//es kan immer nur entweder Click-Share oder Apple NE gerouted werden
			exit();
			break;
			
		case 'preset':
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->loadPreset( $_GET['in'] );
			
				if( $_GET['in'] == 1){
					$myCommander = new Commander( '147.87.117.34', 23 );
					$myCommander->route( 1 );	
				}
				
				if ($_GET['in'] == 3){
					$myCommander = new Commander( '147.87.117.34', 23 );
					$myCommander->route( 2 );
				}
			
			exit();
			break;
	
		case 'tool':
			$myCommander = new Commander( '147.87.117.34', 23 );
			$myCommander->routeTool( $_GET['in'] );
		
			exit();
			break;
	}
	
	
	
	
}

if(isset($_GET['source']) ){
	switch($_GET['source']){
		
		case 'Apple TV':
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->loadPreset( 1 );
			break; 
		case 'PC mixed screen':
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->loadPreset( 2 );
			break; 
		case 'Click-Share':
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->loadPreset( 3 );
			break; 
		case 'PC full screen': 
			$myCommander = new Commander( '147.87.117.33', 23 );
			$myCommander->loadPreset( 4 );
			break; 
	}
}

//schauen ob es gibt ein command wenn ja



?>