<?

/**
* 
*/
class Connection 
{
	private $host="localhost";
	private $username="root";
	private $password="";
	private $db="nexgdd";
	private $err;
	function __construct()
	{
		$conn=mysql_connect($this->host,$this->username,$this->password,$this->db);
		if($conn){
$this->err=$conn;

		}
		else{
 die ("Cannot connect to the database");
			
		}

		return $this->err;
	}
}
$obj=new Connection();