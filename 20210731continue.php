<?php
//演習問題１

// $count = 0;
// $skip = [10,15,33];

// while($count < 100){
//     if(in_array($count , $skip)){
//         $count++;
//         continue;
//     }
//     echo "{$count}\n";
//     $count++;
// }
// echo "処理終了";

// echo '<br><br>';


//演習問題２

// $first_date = date("Ym01",strtotime('d'));
// $last_date = date("Ym10");
// $youbi = ['日','月','火','水','木','金','土'];
// $skip = [0,6];
// for($i = $first_date; $i <= $last_date; $i = date("Ymd",strtotime($i.'+1 day'))){
//     $date = date('d',strtotime($i));
//     $week = date("w",strtotime($i));
//     if(in_array($week , $skip)){
//         continue;
//     }
//     echo $date.'日 ';
//     echo $youbi[$week].'曜日<br>';
// }


//二次元配列　演習問題
// $unit = array(
//     array('name' =>'うえ' , 'hp' => '45' , 'op' => '5' , 'dp' => '12'),
//     array('name' =>'くわ' , 'hp' => '60' , 'op' => '7' , 'dp' => '9'),
//     array('name' =>'かみ' , 'hp' => '80' , 'op' => '15' , 'dp' => '3'),
// );
// var_dump($unit);

$array = array(
    array('名前' => '狩山', '住所'=> '愛媛', '年齢' => '20歳'), //0番目の配列
    array('名前' => '永井', '住所'=> '香川', '年齢' => '30歳'), //1番目の配列
    array('名前' => '森', '住所'=> '広島', '年齢' => '26歳'),   //2番目の配列
    array('名前' => '櫻井', '住所'=> '愛媛', '年齢' => '35歳')  //3番目の配列
);
var_dump($array);
?>