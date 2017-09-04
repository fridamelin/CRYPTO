<html>
<body>

<?php

require_once('crypto.php');

$crypto = new Crypto();

echo $crypto->deCrypt("d");

	$INPUT = "";
	
	function Crypto($input) {
		$consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
		var_dump($input);
		if(strlen($input) > 0) {
			$output = "";
			//loopar igenom input
			for($i = 0; $i < strlen($input); $i++) {
				
			//Om det finns en konsonant, lägg till o emellan bokstäverna. 
			//annars skriv ut bokstaven 	
				if(in_array($input[$i], $consonants)) {
					$output = $output . $input[$i] . "o" . $input[$i];
				}
				else {
					$output= $output . $input[$i];
				}
			}
			echo $output;
		}
	}

	if(isset($_POST['test']))
	{   
    	$text = $_POST['test'];
		$INPUT = $text;
		Crypto($INPUT);
	}

	
?>

<form method='post' action='index.php'>
	<textarea id="testarea" name="test" rows=10></textarea>
	<input type='submit' name="submit"/>
</form>

</body>
</html>