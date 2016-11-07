<?
use PHPUnit\Framework\TestCase;

public class Demo {
   public function getName() {
      echo 'phambadat';
    }
}

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
