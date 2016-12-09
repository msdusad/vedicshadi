<?php 
function get_numerics ($str) {
    preg_match_all('!\d+!', $str, $matches);
    //return $matches[0];
return implode(" ", $matches[0]);

}

$one = 'foo bar 4 baz (5 qux quux)';
$two = 'bar baz 2 bar';
$three = 'qux bar 12 quux (3 foo)';
$four = 'foo baz 3 bar (13 quux foo)';

print_r(get_numerics($one));
print_r(get_numerics($two));
print_r(get_numerics($three));
print_r(get_numerics($four));

