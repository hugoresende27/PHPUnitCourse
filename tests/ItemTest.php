<?php
use App\Item;
use PHPUnit\Framework\TestCase;



class ItemTest extends TestCase
{

    public function testDescriptionIsNotEmpty()
    {

        $item = new App\Item;
        $this->assertNotEmpty($item->getDescription());

    }

    /**
     * [testIdIsAnInteger]
     * works with protected methods but not private ones
     * @return [type]
     * 
     */
    public function testIdIsAnInteger()
    {
        $item = new App\ItemChild;
        $this->assertIsInt($item->getID());
    }


    /**
     * [testTokenIsAString]
     * to test private methods we can use ReflectionClass
     * https://www.php.net/manual/en/class.reflectionclass.php
     * @return [type]
     */
    public function testTokenIsAString()
    {
        $item = new App\ItemChild;
        $reflector = new ReflectionClass(Item::class);
        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);
        $result = $method->invoke($item);
        $this->assertIsString($result);
    }


    public function testPrefixedTokenStartsWithPrefix()
    {
        $item = new App\ItemChild;
        $reflector = new ReflectionClass(Item::class);
        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);
        $result = $method->invokeArgs($item, ['example']);
        $this->assertIsString($result);
        $this->assertStringStartsWith('example',$result);
    }

    

}