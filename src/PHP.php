
<?php
error_reporting(E_ALL);

echo "<h2>TCP/IP-Verbindung</h2>\n";

/* Den Port für telnet. */
$service_port = "23";

/* Die IP-Adresse . */
$address = "10.0.233.13";

/* Einen TCP/IP-Socket erzeugen. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() fehlgeschlagen: Grund: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Versuche, zu '$address' auf Port '$service_port' zu verbinden ...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() fehlgeschlagen.\nGrund: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "socket is OK.\n";
}
  
echo "matrix config or somthing";

$imput = "r 1 z \r\n";
$out = '';

while($resp = socket_read($socket, 1000)) {
   $out .= $resp;
   if (strpos($out, "\n") !== false) break;
}

socket_write($socket ,$imput, strlen($imput));

echo "OK.\n";
echo "Serverantwort lesen:\n\n";

while($resp = socket_read($socket, 1000)) {
   $out .= $resp;
   if (strpos($out, "\n") !== false) break;
}
echo $out;
echo "Socket beenden ...";
socket_close($socket);
echo "OK.\n\n";
?>
