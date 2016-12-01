<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 15:31
 * 创建一个用于递归形式数组结构的迭代器，类似于多维数组.它为许多更复杂的迭代器提供了所需的操作，如RecursiveTreeIterator和RecursiveIteratorIterator迭代器。
 */
$fruits = array("a" => "lemon", "b" => "orange", array("a" => "apple", "p" => "pear"));
$iterator = new RecursiveArrayIterator($fruits);
while ($iterator->valid()) {
    //检查是否含有子节点
    if ($iterator->hasChildren()) {
        //输出所以字节点
        foreach ($iterator->getChildren() as$key => $value) {
            echo$key . ' : ' . $value . "\n";
        }
    } else {
        echo"No children.\n";
    }
    $iterator->next();
}

/**output
No children.
No children.
a : apple
p : pear
 **/