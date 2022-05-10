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