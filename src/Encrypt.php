<?php

namespace Micheledef\EncryptDecrypt;

/**
 * Encrypt
 */
class Encrypt{

    /**
     * string
     *
     * @var mixed
     */
    public $string;
    public $key;

    /**
     * __construct
     *
     * @param string $string
     * @param string $key
     * @return void
     */
    public function __construct(string $string, string $key)
    {
        $this->string = $string;
        $this->key = $key;
    }

    /**
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        /**
         * encrypt
         *
         * @param string $string
         * @param string $key
         * @return void
         */
        return  $this->encrypt($this->string , $this->key);
    }

    /**
     * encrypt
     *
     * @param string $string
     * @param string $key
     * @return void
     */
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