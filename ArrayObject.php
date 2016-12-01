<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/22
 * Time: 17:59
 */


$array  =array("a","b","c");
$a = new ArrayObject($array);

print_r($a->getIterator());