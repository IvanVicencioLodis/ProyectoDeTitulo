<?php
require './vendor/autoload.php';

class pruebaTest extends PHPUnit\Framework\TestCase {
    
    public function testAssertion(){
        $this->assertTrue(false, 'it should be true');

    }

}
?>