<?
class Save{

	public function abc(){
		if(isset($_POST['submit'])){
			return $_POST['user'];

		}
		else{

			return "Maahi";
		}

	}
}
if(isset($_POST['submit'])){
$obj1=new Save();
$obj1->abc();
}