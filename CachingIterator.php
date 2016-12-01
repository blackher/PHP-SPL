<?php

/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 10:59
 * 用来执行提前读取一个元素的迭代操作，例如可以用于确定当前元素是否为最后一个元素。
 * const CALL_TOSTRING = 1;

define(CATCH_GET_CHILD,16);
const TOSTRING_USE_KEY = 2;
const TOSTRING_USE_CURRENT = 4;
const TOSTRING_USE_INNER = 8;
const FULL_CACHE = 256;
 */
 
$array = array(
    array(
        'name' => 'Jonathan',
        'id'   => '5'
    ),
    array(
        'name' => 'Abdul',
        'id'   => '22'
    )
);
//$array = array("123");
try {
    $object = new CachingIterator(new ArrayIterator($array),CachingIterator::FULL_CACHE);
    foreach ($object as $value) {

        foreach ($value as $k=> $v) {
            print_r($k."=>".$v.PHP_EOL);

        }
        if($object->hasNext()){
            echo "<br>";
        }

    }
}
catch (Exception $e) {
    echo $e->getMessage();
}
/**output
koala,kangaroo,wombat,wallaby,emu,kiwi,kookaburra,platypus
 **/
