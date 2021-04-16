<?php



function f() {
    return 1;
}

$arr = [f(), f()];

var_dump($arr);