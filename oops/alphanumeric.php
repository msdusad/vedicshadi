<html>
 <style type="text/css">
        body
        {
            font-size: 9pt;
            font-family: Arial;
        }
    </style>
  <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
        function IsAlphaNumeric(e) {
            var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>

Alphanumeric value:
    <input type="text" id="text1" onkeypress="return IsAlphaNumeric(event);" ondrop="return false;"
        onpaste="return false;" />
    <span id="error" style="color: Red; display: none">* Special Characters not allowedspan>

</html>