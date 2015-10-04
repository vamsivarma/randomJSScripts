<?php
$str = '1,3,5,7,9';
$arr = explode(',', $str);
$result = array();
foreach($arr as $a){
  $x = explode('-', $a);
  if(count($x) === 2){
    $x = range($x[0], $x[1]);
  }
  $result = array_merge($result, $x);
}
print_r($result);
?>