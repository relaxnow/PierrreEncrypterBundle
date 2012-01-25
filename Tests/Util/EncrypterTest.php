<?php

namespace Pierrre\EncrypterBundle\Tests\Util;

use Pierrre\EncrypterBundle\Util\Encrypter;

class EncrypterTest extends \PHPUnit_Framework_TestCase{
	public function testEncryptDecrypt(){
		$key = 'foobar';
		$encrypter = new Encrypter($key);
		
		$data = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
		$encryptedData = $encrypter->encrypt($data);
		$decryptedData = $encrypter->decrypt($encryptedData);
		
		$this->assertEquals($data, $decryptedData);
	}
}