<?php
function func(array $ary, string $str) {
    for ($i = 0; i < 10; $i+=1) {
        echo $i;
    }
    return "hello, world!";
}

func([1, 2, 3], "sample");
