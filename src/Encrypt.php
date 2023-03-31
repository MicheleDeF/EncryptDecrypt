<?php

namespace Micheledef\EncryptDecrypt;

class Encrypt{

    public $string;
    public $key;

    public function __construct(string $string, string $key)
    {
        $this->string = $string;
        $this->key = $key;
    }

    public function __toString()
    {
        return  $this->encrypt($this->string , $this->key);
    }

    public function encrypt(string $string, string $key) {
		$result = '';
		
        for( $i=0; $i < strlen($string); $i++ ) {
			
            $char = substr( $string, $i, 1 );
			$keychar = substr( $key, ( $i % strlen($key) ) - 1, 1);
			$char = chr( ord( $char ) + ord( $keychar ) );
			$result .= $char;
		}
	
		return base64_encode( $result );
	}


}