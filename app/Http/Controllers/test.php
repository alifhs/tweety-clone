<?php



// function f() {
//     return 1;
// }

// $arr = [f(), f()];

// var_dump($arr);

class A {
    public $f;
    public function f() {
        echo "Hello World";
    }
    
}

$a = new A();
$a->t = 3;

$n = new A();

$n->t = 3;

echo $a ==  $n;

