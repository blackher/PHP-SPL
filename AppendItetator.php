<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/22
 * Time: 17:40
 */

$array_a = new ArrayIterator(array('a', 'b', 'c'));
$array_b = new ArrayIterator(array('d', 'e', 'f'));
$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);
print_r($iterator->getArrayIterator());
print_r($iterator->getInnerIterator());

foreach ($iterator as $current) {
    print_r($iterator->getIteratorIndex());//获取当前key
    echo $current."\n";
}


/**output
 *
ArrayIterator Object
(
[storage:ArrayIterator:private] => Array
(
[0] => ArrayIterator Object
(
[storage:ArrayIterator:private] => Array
(
[0] => a
[1] => b
[2] => c
)

)

[1] => ArrayIterator Object
(
[storage:ArrayIterator:private] => Array
(
[0] => d
[1] => e
[2] => f
)

)

)

)
a
b
c
d
e
f
 *
 * */