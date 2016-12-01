<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 15:43
 *
 * 将一个树形结构的迭代器展开为一维结构。
 */

$fruits = array("a" => "lemon",  array("a" => "apple", "p" => "pear"),"b" => "orange");
$arrayiter = new RecursiveArrayIterator($fruits);
$iteriter = new RecursiveIteratorIterator($arrayiter);
foreach ($iteriter as $key => $value) {
    $d = $iteriter->getDepth();
    echo"depth=$d k=$key v=$value\n";
    echo "<br/>";
}

/**output
depth=0 k=a v=lemon
depth=0 k=b v=orange
depth=1 k=a v=apple
depth=1 k=p v=pear
 **/