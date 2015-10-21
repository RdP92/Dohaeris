<?php
require('commander.class.php');

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
<html lang="en">
<head>
</head>
	<body>
<form method="get">
<select>
  <option input = "PC full screen" type="submit" value="PC full screen" name="source">PC full screen"</option>
  <option type="submit" value="Apple TV" name="source">"Apple TV"</option>
  <option type="submit" value="PC mixed screen" name="source">"PC mixed screen"</option>
  <option value="audi">Audi</option>
</select>
  <input type="submit">


</form>
</body>
</html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="App-Convert; Monitor-Matrix-Tool.">
    <meta name="author" content="NR">
 
    <title>MATRIX</title>
    
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <link href="style.css" rel="stylesheet">

    <?php
    include ("php.php");
    ?>

	</head>
	<body>
        <div class="container"> 
        <nav class="navbar navbar-inverse">
            <div class="container">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="Monitor.html">Monitors</a></li>
                    <li><a href="Login.html">Login</a></li>
                </ul>
            </div>
        </nav>

        <div class="well well-lg"> 

            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                Nividia PC1 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                Nividia PC2 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
                
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                Nividia PC3 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                Nividia PC4 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
        </div>

        <div class="well well-lg">
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                apple tv NW <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                apple tv NE <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                apple tv SW <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bi ldschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                apple tv SE <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
        </div>
        <div class="well well-lg">
            <div class="btn-group">

                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin:10%">
                ClickShare <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="B1">Bildschirm NW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B2">Bildschirm NE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B3">Bildschirm SW</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="B4">Bildschirm SE</a></li>
                </ul>
            </div>
        </div>
        </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>