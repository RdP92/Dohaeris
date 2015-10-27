<?php
set_time_limit(10);
class Commander {
    private $pInputp;
    private $port;	
	private $socket;
	private $connected = false;
   
	public function __construct( $pIp = NULL, $pPort = NULL ){
        $this->ip = $pIp;
		$this->port = $pPort;
		$this->connect();
    }
    
    function connect() {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		if ($this->socket === false) {
			//echo "socket_create() fehlgeschlagen: Grund: " . socket_strerror(socket_last_error()) . "\n";
			$this->connected = false;
			return;
		}

		if (socket_connect($this->socket, $this->ip, $this->port) === false) {
			//echo "socket_connect() fehlgeschlagen.\nGrund: " . socket_strerror(socket_last_error($this->socket)) . "\n";
			$this->connected = false;
		} else {
			// wait the welcome message - need sonnst timeout
			while($resp = socket_read($this->socket, 1000)) {
			   $out = $resp;
			   if (strpos($out, "\n") !== false) break;
			}
			
			$this->connected = true;
		}
    }
	
	function getStatus(){
		return $this->connected;
	}
	
	/*
	function ptoolbox(){
		$toolboxValue = array(1, 2);
		if ($pInput > 2) {
			echo "apple TV NE";
		} 
		elseif ($pInput == 2) {
			echo "Clickshare";
		}
		
		$toolCommander = new Commander( '10.0.233.18', 23 );
		$toolCommander->route( 1);
	}*/			
	
	function route( $pInput, $pOutput = null ){
		if(!$this->connected)
			return false;
	
		$possibleInputValue = array(1, 2, 3, 4, 5, 6, 7, 8, 9); 
		$possibleOutputValue = array('a', 'b', 'c', 'd', 'h', null);
		
		if( !in_array($pInput, $possibleInputValue) )
				return false;
		
		if( !in_array($pOutput, $possibleOutputValue) )
				return false;

		if( is_null( $pOutput ) )
			$command = "r ".$pInput."\r\n";
		else
			$command = "r ".$pInput." ".$pOutput."\r\n";
		
		socket_write($this->socket ,$command, strlen($command));
		
		while($resp = socket_read($this->socket, 1000)) {
		   if (strpos($resp, "\n") !== false) break;
		}
		
	}
	
	function routeTool( $pInput ){
		if(!$this->connected)
			return false;
	
		$possibleInputValue = array(1, 2); 
		
		if( !in_array($pInput, $possibleInputValue) )
				return false;
		

		$command = "r ".$pInput."\r\n";
		
		socket_write($this->socket ,$command, strlen($command));
		
		while($resp = socket_read($this->socket, 1000)) {
		   if (strpos($resp, "\n") !== false) break;
		}
	}

	function loadPreset( $pPresetId ){
		if(!$this->connected)
			return false;
		
		$command = "#recall_preset ".$pPresetId."\r\n";
		socket_write($this->socket ,$command, strlen($command));
		
		while($resp = socket_read($this->socket, 1000)) {
		   if (strpos($resp, "\n") !== false) break;
		}
	}
	
	function inputcomand( $pInputComand ){
		if(!$this->connected)
			return false;
		
		$command = $pInputComand."\r\n";
		socket_write($this->socket ,$command, strlen($command));
		
		while ($out = socket_read($this->socket, 1000)) {
			echo $out;
		}
		


	}

}
function feedBack($pInput){
	switch ($pInput) {
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
				echo "Verbinde Apple TV NW ";
				break;
			case 6:
				echo "Verbinde Apple TV ";
				break;
			case 7:
				echo "Verbinde Apple TV SW ";
				break;
			case 8:
				echo "Verbinde Apple TV SE ";
				break;
			case 9:
				echo "Verbinde Click-Share ";
				break;
				
		}
		
		switch ($pOutput){
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
	}	
	} 
?>