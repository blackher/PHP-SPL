<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 15:45
 */
$hey = array("a" => "lemon", "b" => "orange", array("a" => "apple", "p" => "pear"));
$awesome = new RecursiveTreeIterator(
    new RecursiveArrayIterator($hey),
    null, null, RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($awesome as $line) {
    echo $line . "<br/>";
}

/**output
|-lemon
|-orange
|-apple
\-pear
 **/