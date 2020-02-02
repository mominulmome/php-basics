<?php

//$sampleVariable = 'Hello';
//echo $sampleVariable;

//$a = 10;
//$b = '10';
//
//if ($a === $b) {
//    echo 'True';
//    exit;
//}
//echo 'False';


//$a = 1; /* global scope */

//function test()
//{
//    echo $a; /* reference to local scope variable */
//}
//
//test();


//function functionName($val = '')
//{
//    if ($val) {
//        echo $val;
//    } else {
//        echo 10;
//    }

//echo $val ? $val : 10;

//}

//functionName();

$sampleArray = ['a', 'b', [['g', 'h']]];
//echo '<pre>';
//print_r($sampleArray);

foreach ($sampleArray as $key => $values) {
    if (is_array($values)) {
        foreach ($values as $key2 => $value2) {
            foreach ($value2 as $key3 => $value) {
                echo $value . '<br>';
            }
        }
    }
}

