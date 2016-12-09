<?php
$msg_id="ajaxtesting";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Testing</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	function test(){
$.ajax({
            type: "POST",
            url: 'ajxsave.php',
            data: ({lastmsg:"13"}),
            success: function() {
                alert('form was submitted');
            }
        });
}
	</script>


    <script>
    function newmaking(sval){
        
$.ajax({

    type:"POST",
    url:'ajxsave.php',
    data:{senddata:sval},
    success:function(data){

        alert(data);
    }

});
}
    </script>
</head>
<body>
<div id="more">
<input type="text" id="fbox" value="b1">
<input type="text" id="sbox" value="b2">
 <button id="" class="load_more" onclick="newmaking(fbox.value)">mores</button> 
</div>
<p id="updates"></p>
</body>
</html>
