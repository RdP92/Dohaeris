<?php
	error_reporting(E_ALL);
		$service_port = "23";/* Den Port für telnet. */
		$address = "10.0.233.13";/* Die IP-Adresse . */

	echo "<h2>Matrix Dohaeris</h2>\n";
			/* Einen TCP/IP-Socket erzeugen. */
		$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	if ($socket === false) {
    	echo "socket_create() fehlgeschlagen: Grund: " . socket_strerror(socket_last_error()) . "\n";
	} else {
    	// echo "OK.\n";
	}

		// echo "Versuche, zu '$address' auf Port '$service_port' zu verbinden ...";
	$result = socket_connect($socket, $address, $service_port);
	
	if ($result === false) {
	    echo "socket_connect() fehlgeschlagen.\nGrund: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
	} else {
	    // echo "OK.\n";
	}
  
	while($resp = socket_read($socket, 1000)) {
	   $out = $resp;
	   if (strpos($out, "\n") !== false) break;
	}
		
		$inputone = " 1 ";// Nvidia pc 1
		$inputotwo = " 2 ";// Nvidia pc 2
		$inputtree = " 3 ";// Nvidia pc 3
		$inputfor = " 4 ";// Nvidia pc 4
		$inputfive = " 5 ";// aplle tv NW
		$inputsix = " 6 ";// toolBox
		$inputseven = " 7 ";// apple tv SW
		$inputeight = " 8 ";// aplle tv SE
		$outputA = "A\r\n" ;// NW
		$outputB = "B\r\n" ;// NE
		$outputC = "C\r\n" ;// SW
		$outputD = "D\r\n" ;// SE
		$outputH = "H\r\n" ;// Controllbildschirm
		$rout = "r";
		$synchronized ="s";// all immupt to one output

		$config = $rout . $inputsix . $outputB ;
		$out = '';

	socket_write($socket ,$config, strlen($config));

		// echo "OK.\n";
	echo "Dohaeris:\n\n";

	while($resp = socket_read($socket, 1000)) {
 		$out .= $resp;
		if (strpos($out, "\n") !== false) break;
	}
	
	verbindungsNachricht();
	function verbindungsNachricht(){
		$inputone = " Nvidia PC 1 ";// Nvidia pc 1
		$inputotwo = " Nvidia PC 2 ";// Nvidia pc 2
		$inputtree = " Nvidia PC 3 ";// Nvidia pc 3
		$inputfor = " Nvidia PC 4 ";// Nvidia pc 4
		$inputfive = " aplle TV NW ";// aplle tv NW
		$inputsix = " toolBox ";// toolBox
		$inputseven = " apple TV SW ";// apple tv SW
		$inputeight = " apple TV SE ";// aplle tv SE
		$outputA = "Bildschirm NW" ;// NW
		$outputB = "Bildschirm NE" ;// NE
		$outputC = "Bildschirm SW" ;// SW
		$outputD = "Bildschirm SE" ;// SE
		$outputH = "Controllbildschirm" ;// Controllbildschirm
		$rout = "verbinde";
		$synchronized ="verbinde";// all immupt to one output

		$config = $rout . $inputfive . "zu " . $outputB ;
		$out = '';
		echo $config;
	}
	
		// echo "Socket beenden ...";
	socket_close($socket);
 		// echo "OK.\n\n";
?>
#ipconfig
