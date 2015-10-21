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
	ipconfig();
	ipconfig();{
		$config = "#ipconfig";
		socket_write($socket ,$config, strlen($config));
		while($resp = socket_read($socket, 1000)) {
 		$out .= $resp;
		if (strpos($out, "\n") !== false) break;
		echo $out
	}
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
	/*switch ($pInput) {
			case 1:
				echo "Verbinde Nvidia PC 1 ";
				break;
			case 2:
				echo "Verbinde Nvidia PC 2 ";
				break;
			case 3:
				echo "Verbinde Nvidia PC 3 ";
				break;
			case 4:
				echo "Verbinde Nvidia PC 4 ";
				break;
			case 5:
				echo "Verbinde aplle TV NW ";
				break;
			case 6:
				echo "Verbinde toolbox ";
				break;
			case 7:
				echo "Verbinde apple TV SW ";
				break;
			case 8:
				echo "Verbinde apple TV SE ";
				break;
				
		}
		*/
		/*switch ($pOutput){
			case "a":
				echo "zu Bildschirm NW";
				break;
			case "b":
				echo "zu Bildschirm NE";
				break;
			case "c":
				echo "zu Bildschirm SW";
				break;
			case "d":
				echo "zu Bildschirm SE" ;
				break;
			case "h":
				echo "zu Controllbildschirm" ;
				break;	
		}*/
	
		// echo "Socket beenden ...";
	socket_close($socket);
 		// echo "OK.\n\n";
?>
#ipconfig
<form>

 <button type="button" class="btn btn-default btn-xxl" onclick="document.location='?type=io&src=1&dst=a'">
				  <span aria-hidden="true"></span> NW
</form>