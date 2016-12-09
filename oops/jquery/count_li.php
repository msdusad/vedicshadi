<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#count_start").click(function(){

var ab=$("#mylist").children().length;
	alert(ab);
	});
	
});
</script>

<ul id="mylist">
    <li>Element 1</li>
    <li>Element 2</li>
    <li>Element 2</li>
    <li>Element 2</li>
   
</ul>
<button id="count_start">Click</button>