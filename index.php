<html>
<body>

<?php
	$NAME = "";
	
	function Crypto($name) {
		echo $name;
		$consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');

		if(count($name) === 0) {

			for($i = 0; $i < count($name); $i++) {
				for($j = 0; $j < count($consonants); $j++) {
					if($name[$i] === $consonants[$j]) {
						// echo $name[$i] . "o" . $name[$i];
						echo $name;
					}
				}
			}
		}
	}

	if(isset($_POST['test']))
	{   
    	$text = $_POST['test'];
		$NAME = $text;
		Crypto($NAME);
	}

	
?>

<form method='post' action='index.php'>
	<textarea id="testarea" name="test" rows=10></textarea>
	<input type='submit' name="submit"/>
</form>

</body>
</html>