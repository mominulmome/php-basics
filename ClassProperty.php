<?php

class MyClass
{


    public $prop1;

    public function __construct()
    {
        //echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function setProperty($val)
    {
        $this->prop1 = $val;
    }

    public function getProperty()
    {
        echo $this->prop1 . '<br>';
    }

    public function getProperties()
    {
        echo $this->prop1;
    }

}

$obj = new MyClass();

$obj->setProperty('This is hello');
$obj->getProperty();

$obj->setProperty('This is hi');
unset($obj->prop1);
$obj->getProperty();

Z::a()->b()->c()->d();
?>
