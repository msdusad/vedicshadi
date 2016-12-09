<!-- array_merge merges the elements of one or more than one array such that the value of one array appended at the end of first array. 
If the arrays have same strings  key  then the later value overrides the previous value for that key . -->
<?php
$array1 = array(1,2,3);
$array2 = array('11','22','33');
$result = array_merge($array1, $array2);
print_r($result);
?>
<!-- OUTPUT :  
Array
(
[course1] => php
[course2] => sql
[course3] => html
) -->
<!-- Array_combine creates a new array by using the key of one array as keys and using the value of other array as values.
It returns the combine array of array 1 and array2 . --> 
<?php
$array1    = array("course1","course2","course3");
$array2    = array("php","html","css");
$new_array = array_combine($array1, $array2);
print_r($new_array);
?>
<!-- OUTPUT :
Array
(
[course1]  => php
[course2]    => html
[course3]    =>css
) -->