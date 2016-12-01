<?php
$b = array(
'name'=> 'mengzhi',
'age' => '12',
'city'=> 'shanghai'
);
$a = new ArrayIterator( $b);
$a->append(array(
'home' => 'china',
'work' => 'developer'
));
$c = $a->getArrayCopy();

print_r($a);
print_r($c);
/**output
 *
 *
ArrayIterator Object
(
[storage:ArrayIterator:private] => Array
(
[name] => mengzhi
[age] => 12
[city] => shanghai
[0] => Array
(
[home] => china
[work] => developer
)

)

)
Array
(
[name] => mengzhi
[age] => 12
[city] => shanghai
[0] => Array
(
[home] => china
[work] => developer
)

)

 *
 *
 * */