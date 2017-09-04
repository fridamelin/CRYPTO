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
	<input type="text" name="encrypt" value="<?php echo $decrypted;?>"/>
	<input type='submit' value="Encrypt"/>
</form>

<form method='post' action='index.php'>
	<p>Decrypt</p>	
	<input type="text" name="decrypt" value="<?php echo $encrypted;?>"/>
	<input type='submit' value="Decrypt"/>
</form>

</body>
</html>