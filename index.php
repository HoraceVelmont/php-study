<?php
/**
 * Created by PhpStorm.
 * User: 김대훈
 * Date: 2017-12-05
 * Time: 오후 3:17
 */

class SimpleClass
{
    public $var = 'velmont';

    public function displayVar()
    {
        echo $this->var;
    }
}

$simple_class = new SimpleClass();
$simple_class->displayVar();
?>



