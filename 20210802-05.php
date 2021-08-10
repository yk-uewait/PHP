<?php

//「こんにちは」という文字列が返ってくる関数

function sayhello(){
    return 'こんにちは';    //関数で処理を行なった際に、最終的な値を返すための記述
}

//実行
echo sayhello();

echo '<br><br>';

function myTodayString($aaa,$month,$day){
    // $month = date("n");
    // $day = date("j");
    $week = ['(日)','(月)'];
    $w = date('w');
    $honjitsu = $month.'月'. $day.'日';
    $youbimade = $month.'月'. $day.'日'. $week[$w];
    if($aaa == 0){
        return $honjitsu;
    }
    else {
        return $youbimade;
    }

};
// $aaa = 0;
// if($aaa == 0,)

echo myTodayString(1,date("n"),date("j"));
