<?php
//課題１
$a = 3;
$b = 7;
echo $a + $b . "\n";

//課題２
$array_month = ["１月", "２月", "３月", "４月", "５月", "６月", "７月" ,"８月", "９月","１０月", "１１月", "１２月"];
echo $array_month[7] . "\n";

//課題３
$hello = "hello";
$name = "本田";
$world = "'s world";
echo $hello . $name . $world . "\n";

//課題４
$tech_boost = "tech";
$tech_boost .= "_boost";
echo $tech_boost . "\n";

//課題５
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
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"] . "\n";

///PHP/Laravel 03
///課題１
$name = "本田";
  if ($name == "本田"){
    echo "私は本田です。";
    } else {
    echo "私は本田ではありません。";  
    }
  
///課題２
$total = 0;
for ($i = 1; $i <=10000; $i++) {
  $total += $i;
}
echo $total . "\n";

///課題３
$fruits = array("melon", "apple", "orange", "grape", "peach");
foreach ($fruits as $fruits) {
  echo $fruits;
  echo "\n";
}

///課題４
//for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

