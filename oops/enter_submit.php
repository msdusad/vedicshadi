<head><SCRIPT TYPE="text/javascript">
<!--
function submitenter(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return false;

if (keycode == 13)
   {
   myfield.form.submit();
   return false;
   }
else
   return m();
}
function m(){

alert('mahender');
}
//-->
</SCRIPT>
</head>

<FORM ACTION="" method="post">
password: <INPUT NAME="password" TYPE="PASSWORD" SIZE="10" onKeyPress="return submitenter(this,event)"><BR>
<INPUT TYPE="SUBMIT" VALUE="Log In" name="submit">
</FORM>
<?php
if(isset($_POST['submit'])){
$ms=$_POST['password'];
echo $ms;
}
?>
