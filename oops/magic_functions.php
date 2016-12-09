<?
/**
* 
*/
class First 
{
	protected $mahender="Mahender Singh";
	
	function __construct()
	{
		echo $this->mahender;
	}
}
/**
* 
*/
class second extends First
{
	protected $sec="9991106434";
	
	function __construct()
	{
		echo $this->mahender." ".$this->sec;

	}
}

class third extends second{

	public $rem="Third Value";
	function __construct(){

echo $this->rem." ".$this->sec;
	}
}
//$obj=new second();
//$obj=new third();

// another examples

class foo {

    public $bar;
    public function __get($name) {

        echo "Get:$name";
        return $this->$name;
    }

    public function __set($name, $value) {

        echo "Set:$name to $value";
        $this->$name = $value;
    }
}


$foo = new foo();
$foo->bar = 'test24';
//echo "[$foo->bar]";

// one more testing

class PropertyTest
{
    private $a, $b;

    public function __set($name, $value)
    {
       // echo "Set '$name' to '$value'\n";
        $this->$name = $value;
    }
    public function __get($name)
    {
       // echo "Get $name \n";
        return $this->$name;
    }
}
echo "<pre>\n";
$obj = new PropertyTest;
$obj->a = 1;
echo $obj->a . "\n\n";

echo "<pre>\n";
$obj = new PropertyTest;
$obj->b = "Hello";
echo $obj->b . "\n\n";
