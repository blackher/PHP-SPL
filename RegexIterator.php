<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 10:22
 *extends   FilterIterator
 */
$a = new ArrayIterator(array('test1', 'test2', 'test3'));
$i = new RegexIterator($a, '/^(test)(\d+)/', RegexIterator::REPLACE);
$i->replacement = '$2:$1';
print_r(iterator_to_array($i));


