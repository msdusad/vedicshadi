<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
function browser_detail(){
var detail=window.navigator.userAgent;
alert(detail);

}

browser_detail();
</script>
<?php
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
?>