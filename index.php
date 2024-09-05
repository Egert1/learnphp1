<?php

$a = 1;
$a++;
$a--;
$a+=2;
$a-=2;
$a*=2;
$a/=2;
$a%=2;

$a = 'hello' . 'world';
$a .= 'agahh';
$array = array(1,2,3,);
$array = [1,2,3,];
var_dump($array1[1]);
$array = [
    'essa' => 1,
    'tessa' => 2,
    'kossa' => 3,
    2 => 4,
    'y32yõ',
    7 => 8.5,
    true
];
var_dump($array['kossa']);
var_dump($array);
foreach($array as $key => $value){
    //echo $key . '=>'. $value . "\n";
    echo "$key=>$value\n";
}
$name = 'Egert';

$string = "hello $name\n";
var_dump($string);
$char = 'a';

for($i=0;$i<100;$i++){
    var_dump($char);
    $char++;
}