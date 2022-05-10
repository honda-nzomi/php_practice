<?php
///PHP/Laravel 04 関数を理解しよう
///課題１
//２倍にするという関数
function nibai($n) {
//掛け算=>アスタリスクを使う    
    return 2 * $n;
}
echo nibai(3) . "\n";

///課題２
function add($a, $b){
//処理したい内容
    return $a + $b;
}
echo add(3, 4) . "\n";

///課題３
function mul($arr) {
    $val = 1;
    foreach($arr as $a){
        $val = $val * $a;    
    }
    return $val;
}
echo mul([1, 3, 5, 7, 9]) . "\n";

///課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array([9, 10, 8, 1, 5, 2, 3]) . "\n";

