
<?php
error_reporting(E_ALL);

echo "<h2>TCP/IP-Verbindung</h2>\n";

/* Den Port für den WWW-Dienst ermitteln. */
$service_port = getservbyname(23);

/* Die  IP-Adresse des Zielrechners ermitteln. */
$address = gethostbyname(10.0.233.13);

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
    echo "OK.\n";
}

$in = "HEAD / HTTP/1.1\r\n";
$in .= "Host: www.example.com\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

echo "HTTP HEAD request senden ...";
socket_write($socket, $in, strlen($in));
echo "OK.\n";

echo "Serverantwort lesen:\n\n";
while ($out = socket_read($socket, 2048)) {
    echo $out;
}

echo "Socket schließen ...";
socket_close($socket);
echo "OK.\n\n";
?>
