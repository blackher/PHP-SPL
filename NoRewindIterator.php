<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 11:45
 * 用于不能多次迭代的集合，适用于在迭代过程中执行一次性操作
 *
 * NoRewindIterator
 */
$fruit = array('apple', 'banana', 'cranberry');
$arr = new ArrayObject($fruit);
$it = new NoRewindIterator($arr->getIterator());
echo"Fruit A:\n";
foreach ($it as$item) {
    echo$item . "\n";
}

echo"Fruit B:\n";
foreach ($it as$item) {
    echo$item . "\n";
}
/**output
Fruit A:
apple
banana
cranberry
Fruit B:
 **/