<?php

namespace Micheledef\EncryptDecrypt;

/**
 * Decrypt
 */
class Decrypt{

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
         * decrypt
         *
         * @param string $string
         * @param string $key
         * @return void
         */
        return  $this->decrypt($this->string , $this->key);
    }

    /**
     * decrypt
     *
     * @param string $string
     * @param string $key
     * @return void
     */
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