<?php
/**
 * Created by PhpStorm.
 * User: SHI-HE
 * Date: 2016/11/23
 * Time: 9:57
 * 过滤器
 */

class UserFilter extends FilterIterator
{
    private $userFilter;

    public  function __construct(Iterator $iterator, array $filter)
    {
        parent::__construct($iterator);
        $this->userFilter = $filter;
    }
/*
 * abstract   子类必须实现方法
 *
 * */
    public function accept()
    {
        $user = $this->getInnerIterator()->current();
        foreach ($this->userFilter as $item )
        if (strcasecmp($user['name'], $item["name"]) == 0) {
            return false;
        }
        return true;
    }
}

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
$array1 = array(

    array(
        'name' => 'Abdul',
        'id'   => '22'
    )
);
$object = new ArrayIterator($array);
//去除掉名为abdul的人员
$iterator = new UserFilter($object, $array1);
print_r(iterator_to_array($iterator));
foreach ($iterator as $result) {
    echo$result['name'];
}



