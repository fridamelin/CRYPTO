<?php
class Crypto {
    public $vocals = array("a", "o", "u", "å", "e", "i", "y", "ä", "ö");

    public function enCrypt($input){
		if(strlen($input) > 0) {
			$encrypted = "";
			// Loopar igenom strängen vi får in
			for($i = 0; $i < strlen($input); $i++) {
                // Om bokstaven inte är en vokal, lägg till "o" och bokstaven igen. 
                // Annars lägg endast till vokalen.
                if(!in_array($input[$i], $this->vocals)) {
                    $encrypted = $encrypted . $input[$i] . "o" . $input[$i];
                }
                else {
                    $encrypted = $encrypted . $input[$i];
                }
			}
            return $encrypted;
		}
    }

    public function deCrypt($input){
		if(strlen($input) > 0) {
			$decrypted = "";
			// Loopar igenom strängen vi får in
			for($i = 0; $i < strlen($input); $i++) {
                // Om bokstaven inte är en vokal, spara den och därefter hoppa två steg i index.
                // För att få bort bokstäverna vi la till i krypteringen.
                // Annars lägg endast till vokalen.
				if(!in_array($input[$i], $this->vocals)) {
					$decrypted = $decrypted . $input[$i];
                    $i = $i + 2; // Index
				}
				else {
					$decrypted = $decrypted . $input[$i];
				}
			}
        }
        return $decrypted;
    }
}