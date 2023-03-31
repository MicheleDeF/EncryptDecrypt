<?php

namespace Micheledef\EncryptDecrypt;

class Decrypt{

    public $string;
    public $key;

    public function __construct(string $string, string $key)
    {
        $this->string = $string;
        $this->key = $key;
    }

    public function __toString()
    {
        return  $this->decrypt($this->string , $this->key);
    }

    public	function decrypt(string $string, string $key) {
		$result = '';
		$string = base64_decode($string);
	
		for( $i=0; $i < strlen( $string ); $i++ ) {
			$char = substr( $string, $i, 1);
			$keychar = substr( $key, ( $i % strlen( $key ) ) - 1, 1);
			$char = chr( ord( $char ) - ord( $keychar ) );
			$result .= $char;
		}
	
		return $result;
	}



}