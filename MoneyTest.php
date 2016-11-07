<?php
include 'index.php';

class MoneyTest extends PHPUnit_Framework_TestCase {
    // ...

    public function testCanBeNegated() {
        // Arrange
        $a = new Demo();
      
        // Assert
        $this->assertEquals('phambadat', $a->getName());
    }

    // ...
}