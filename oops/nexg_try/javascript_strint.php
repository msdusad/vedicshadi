<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<ul>
  <li id="foo">foo</li>
<li id="baz">baz</li>
<li id="baz">baz</li>
  <li id="bar">bar</li>
  <li id="baz">baz</li>
</ul>
<script>

function sprate_str_int(){
var str1 = "test123.00".replace ( /[^\d.]/g, '' );
alert(str1);
  var str2 = "yes50.00".replace ( /[^\d.]/g, '' );
var str3=parseInt('ms120'.replace(/[^0-9\.]/g, ''), 10);
var str12="23dfdf";
intStr1 = str12.replace(/[A-Za-z$-]/g, "");
alert(intStr1);
  var total = parseInt(str1) + parseInt(str2);
  alert(total);
}

</script>
<button onclick="sprate_str_int()">Got</button>

<p>123confirm</p>

<script type="text/javascript">
$(document).ready(function(){  
  $('p').click(function(){  
    var sd=$(this).text();  
    sd=parseInt(sd);
    alert(sd);
var s = "ABCblahFoo$%^3l";
var noLetters = s.replace(/[^A-Za-z]+/g, '');
  alert(noLetters);

var listItem = document.getElementById( "bar" );
alert($( "li" ).index( listItem ) );


  });
});  
</script>

<div id="date">23AS</div>
<script type="text/javascript">
$(document).ready(function(){
$("#date").click(function(){
   var out= $("#date").text().substring(0, 2) + '<br />';  
alert(out);


});
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        var myStr = "Paragraph 2";   
       var cd= myStr.text; // Returns 53
//alert(cd);
    });
</script>


<!DOCTYPE html>
<html>
<body>

<p>Click the button to extract characters from the string.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction(ab) {
var total_lenth=ab.length;
//alert(total_lenth);
if(total_lenth <= 4){
    var res = ab.substring(0, 4);
// for checking alphabatic value
var ss=/^[a-zA-Z()]+$/.test(res);
// for checking numeric number exists or not
var str1 = res.replace ( /[^\d.]/g, '' );
if(str1){
$("#error").html("Number not Allow In First 4 Char");
return false;
}
if(ss){
//alert(ss);
$("#error").html("");
return true;
}
    }


if(total_lenth > 4 && total_lenth <= 7){
    var res = ab.substring(4, 7);
// for checking alphabatic value
var ss=/^[a-zA-Z()]+$/.test(res);
// for checking numeric number exists or not
var str1 = res.replace ( /[^\d.]/g, '' );
if(str1){
$("#error").html("");
return true;
}
if(ss){
//alert(ss);
$("#error").html("Alphbatic not Allow In 3 Char");
return false;
}
    }

}
</script>
<input type="text" name="inputbox" id="inputbox" onkeyup="myFunction(this.value)">
<p id="error" style="color:red"></p>
</body>
</html>

<?php
// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, 12) as $number) {
    echo $number;
}
echo "<br>";
$dt = new DateTime();
echo $dt->format('Y-m-d H:i:s');

?>

