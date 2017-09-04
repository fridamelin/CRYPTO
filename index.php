<html>
<body>

<?php
	require_once('crypto.php');
	// Crypto är en klass som kan enkrypta/dekrypta meddelanden.
	$crypto = new Crypto();
	$encrypted = "";
	$decrypted = "";
	
	// Encryptknappen
	if(isset($_POST['encrypt']))
	{   
		// Encrypted används sedan i HTML-textarea nedan		
		$encrypted = $crypto->enCrypt($_POST['encrypt']);
	}

	// Decryptknappen
	if(isset($_POST['decrypt']))
	{   
		// Decrypted används sedan i HTML-textarea nedan
		$decrypted = $crypto->deCrypt($_POST['decrypt']);
	}
?>

<form method='post' action='index.php'>
	<p>Encrypt</p>
	<textarea name="encrypt" rows=10><?php echo $decrypted;?></textarea>
	<br>
	<input type='submit' value="Encrypt"/>
</form>

<form method='post' action='index.php'>
	<p>Decrypt</p>	
	<textarea name="decrypt" rows=10><?php echo $encrypted;?></textarea>
	<br>
	<input type='submit' value="Decrypt"/>
</form>

</body>
</html>