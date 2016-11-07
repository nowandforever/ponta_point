<?
require 'index.php';
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Demo();
      
        // Assert
        $this->assertEquals('phambadat', $a->getName());
    }

    // ...
}
