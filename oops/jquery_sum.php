<html>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
// two input box sum in third box
$(document).ready(function(){
$("#add").click(function(){
var a=$("#first").val();
var b=$("#second").val();
var sum=parseInt(a)+parseInt(b);
$("#third").val(sum);
//putting one div data in another
var div1Html = $('#div1').html();
$('#div2').html(div1Html);
$("#div1").hide();
});
});


</script>
<div id="div1"><input type="text" id="first">
<input type="text" id="second">
<input type="text" id="third">
<button type="submit" id="add">Add</button>
</div>
<div id="div2">
	sd<p>Down Hear New Posted Data</p>
</div>
</html>