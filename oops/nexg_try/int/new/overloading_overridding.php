<?php

 class User {
protected $id;
protected $pass;

 public function GetData($ab,$bc){
return $ab-$bc;
}


}
 class SecondUser extends User{
public function GetData($ab,$bc){
return $ab-$bc;
}
}

$one=new SecondUser;
echo User::GetData(5,3);
echo $one->GetData(29,15);
