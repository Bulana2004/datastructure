<?php

function dump($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

class stack{
    private $_size;
    private $arr = [];

    function __construct($size){
        echo "stacks\n";
        echo "test";
    }
}

new stack(15);