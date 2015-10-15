<?php
error_reporting(E_ALL);
		$service_port = "23";/* Den Port für telnet. */
		$address = "10.0.233.18";/* Die IP-Adresse . */

	echo "<h2>toolbox</h2>\n";
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
	     echo "OK.\n";
	}
  
	while($resp = socket_read($socket, 1000)) {
	   $out = $resp;
	   if (strpos($out, "\n") !== false) break;
	}
	$inputone = " 1\r\n";// apple TV
	$inputtwo = " 2\r\n";// ClickShare
	$rout = "r";
	$config = $rout . $inputone;
	socket_write($socket ,$config, strlen($config));

	while($resp = socket_read($socket, 1000)) {
 		$out .= $resp;
		if (strpos($out, "\n") !== false) break;
	}
	
 	echo $out;
?>