<?php

require_once 'ObjectClassParent.php';

class ObjectClassChild extends ObjectClassParent
{
    protected $b = 20;

    public function cc()
    {
        echo $this->b;
    }
}

$object = new ObjectClassChild();
$object->cc();
