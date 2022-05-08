<?php
//echo 'hello php!';
//課題1
$a = 3;
//echo $a;
//課題2
$array_month = [
    "January" => "１月",
    "February" => "２月",
    "March" => "３月",
    "April" => "４月",
    "May"  => "５月",
    "June" => "６月",
    "July" => "７月",
    "August" => "８月",
    "September" => "９月", 
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];

///課題3
//echo $array_month["August"];
$hello = "Hello,";
$name = "本田";
$world = "'s World";
//echo $hello.$name.$world;

//課題4
$tech_boost = "tech";
$tech_boost .= '_boost';
//echo $tech_boost;

///課題5
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",  
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月",
];

// 12月を表示する
//echo $calendar_2018["December"];

///PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう
///課題１
$name = "本田";
if ($name == "本田") {
    echo "私は　本田です";
} else {
    echo "本田ではありません";
}  
///課題２
function sum(){
    $result = 0;
    for($i = 1; $i <= 10000; $i++){
        $total += $i;
    }
    echo $total;
}
 ///課題３
$fruits = array("apple", "orange", "lemon", "grape", "melon");
foreach($fruits as $fruits){
    echo "$fruits \n" ;
}

///課題５
 
// for文の始めの値を定義する 
$start = 1;
// for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo "$i \n";
  }
}


