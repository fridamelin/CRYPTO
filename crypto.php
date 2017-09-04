<?php
class Crypto {
    public $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
    
    public function enCrypt($input){
		if(strlen($input) > 0) {
			$output = "";
			// Loopar igenom input
			for($i = 0; $i < strlen($input); $i++) {
                // Om det finns en konsonant, lägg till o och bokstaven igen. 
                // Annars skriv ut vokalen	
                if(in_array($input[$i], $this->consonants)) {
                    $output = $output . $input[$i] . "o" . $input[$i];
                }
                else {
                    $output = $output . $input[$i];
                }
			}
            return $output;
		}
    }

    public function deCrypt($input){
		if(strlen($input) > 0) {
			$output = "";
			// Loopar igenom input
			for($i = 0; $i < strlen($input); $i++) {
                // Om det är en konsonant, så spara den till output. Därefter hoppa två steg i index
                // Annars spara vokalen.
				if(in_array($input[$i], $this->consonants)) {
					$output = $output . $input[$i];
                    $i = $i + 2;
				}
				else {
					$output = $output . $input[$i];
				}
			}
        }
        return $output;
    }
}