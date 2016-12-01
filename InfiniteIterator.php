<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 14:51
 * 用于持续地访问数据，当迭代到最后一个元素时，会再次从第一个元素开始迭代访问。
 */


$arrayit = new ArrayIterator(array('cat', 'dog'));
$infinite = new InfiniteIterator($arrayit);
$limit = new LimitIterator($infinite,0,11);
foreach ($limit as $value) {
    echo"$value\n";
}
/*
 * cat dog cat dog cat dog cat dog cat dog cat
 * */