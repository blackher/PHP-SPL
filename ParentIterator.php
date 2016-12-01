<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 16:22
 *
 * 是一个扩展的FilterIterator迭代器，它可以过滤掉来自于RecursiveIterator迭代器的非父元素，只找出子节点的键值。通俗来说，就是去枝留叶
 */

$hey = array("a" => "lemon", "b" => "orange", array("a" => "apple", "p" => "pear"));
$arrayIterator = new RecursiveArrayIterator($hey);
$it = new ParentIterator($arrayIterator);
print_r(iterator_to_array($it));
/**output
Array
(
[0] => Array
(
[a] => apple
[p] => pear
)
)
 **/