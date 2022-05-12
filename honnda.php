<?php
//自動販売機を例えてみましょう
//お金を入れたら
function vending($price = 120){
    if($price < 120){
        $juice = "購入できません。";
    } else {
        $juice = "coffee";
    }
//ジュースが出てくる    
    return $juice;
}
echo vending(120) . "\n";
echo vending(100) . "\n";
echo vending() . "\n";

//配列について
$array = ["appelejuice", "water", "coffee"];
echo $array[1] . "\n";

//連想配列について
$juice_name = [
    "appelejuice" => "りんごジュース",
    "water" => "お水",
    "coffee" => "コーヒー"
    ];
echo $juice_name["appelejuice"] . "\n";