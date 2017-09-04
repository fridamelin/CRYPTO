<?php

class Crypto {
    public function enCrypt($input){
        $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
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
			
            return $output;
		}
    }

    public function deCrypt($input){
        return "hej";
    }
}