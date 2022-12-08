<?php 
function diamond(float $diagonal1, float $diagonal2):float {
   return  $diagonal1 * $diagonal2 / 2;
}
print '菱形の面積は'.diamond(4,6).'です。';

function product(float ...$areas):float {
    $result = 1;
    foreach($areas as $arg) {
        $result *=$arg;
    }
    return $result;
}

print product(-1,5,10);

$data = [3,7,9];
// $result = array_map(function($v) {
//     return sqrt($v);
// },$data);
// print_r($result);

$result = array_map(fn($v)=>
    sqrt($v)
,$data);

// <?php
// $data = [3, 7, 9];
// $result = array_map(function($v) {
//   return sqrt($v);
// }, $data);
// $result = array_map(fn($v) => sqrt($v), $data);
print_r($result);

function square($base=1,$height=1):float {
    return $base * $height;
}

print_r(square());

// @include 

// @include_once

// @require

// @require_once 

function processNumber($num・・・＄func) {

}