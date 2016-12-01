<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 11:39
 * not have  seekableiterator
 */


$array = array("apple", "banana", "cherry", "damson", "elderberry");
$iterator = new ArrayIterator($array);
$iterator->seek(3);
echo $iterator->current();
