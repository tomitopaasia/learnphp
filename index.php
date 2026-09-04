<?php
$test = [1, 2, 'word', true];
var_dump($test[2]);
$test[2] = 'another word';
var_dump($test);
$test[4] = 'new value';
var_dump($test);
$test[] = 'last value';
var_dump($test);
array_push($test, 'pushed value');
var_dump($test);
$test = [ 
            'name' => 'Tomi', 
            'age' => 20,
            1,
            3,
            'word',
            100 => 'new value',
            5,  
        ];
var_dump($test['name']);
var_dump($test);
$test = [

    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
var_dump($test[1][2]);