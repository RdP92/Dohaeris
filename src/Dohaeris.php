<?php
error_reporting(E_ALL);

//socket erzeugen
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		if ($socket === false) {
    echo "socket_create() fehlgeschlagen: Grund: " . socket_strerror(socket_last_error()) . "\n";
}


// verbinfungsaufbau mit der matrix
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() fehlgeschlagen.\nGrund: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} 

 // begrüsungssatz der matrix (wichtig sonst hat sie schwierigkeiten befehle endgegen zu nehmen! weils zu schnell geht.)
while($resp = socket_read($socket, 1000)) {
   $out = $resp;
   if (strpos($out, "\n") !== false) break;
}
// Parameterliste
$service_port = "23";/* Den Port für telnet. */
$address = "10.0.233.13";/* Die IP-Adresse . */
// erster Parameter
$rout = "r";
$synchronized ="s";// all immupt to one output
// zweiter Parameter
$inputone = " 1 ";// Nvidia pc 1
$inputotwo = " 2 ";// Nvidia pc 2
$inputtree = " 3 ";// Nvidia pc 3
$inputfor = " 4 ";// Nvidia pc 4
$inputfive = " 5 ";// aplle tv NW
$inputsix = " 6 ";// toolBox
$inputseven = " 7 ";// apple tv SW
$inputeight = " 8 ";// aplle tv SE
// Dritter Parameter
$outputA = "A\r\n" ;// NW
$outputB = "B\r\n" ;// NE
$outputC = "C\r\n" ;// SW
$outputD = "D\r\n" ;// SE
$outputH = "H\r\n" ;// Controllbildschirm

$out = '';// nuzlos im moment glaube ich 

// auswählen der Parameter
$config = $rout . $inputfive . $outputB ;


// einschreiben der Parameter
socket_write($socket ,$config, strlen($config));

// Antwort der Matrix
echo "Dohaeris:\n\n";
while($resp = socket_read($socket, 1000)) {
   $out .= $resp;
   if (strpos($out, "\n") !== false) break;
}
 echo $out;
 // zum schliesen des socket
socket_close($socket);

?>