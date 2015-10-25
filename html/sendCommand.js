
	function sendCommand( type, input, output) {
	
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
		   (xhttp.responseText);
		}
	  }
	  xhttp.open("GET", "commander.php?type="+type+"&in="+input+"&out="+output, true);
	  xhttp.send();
	}
	