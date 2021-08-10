

<?php
$name = "テック花子";
if($name == "テック太郎"){
echo "テック太郎さん、こんにちは";
}elseif($name == "テック花子"){
echo "テック花子さん、こんにちは";
}
    
    echo'<br>';

date_default_timezone_set('Asia/Tokyo');
$time = date('H');
if($time < 6){
echo "zzZ";
}elseif($time < 11){
echo "おはようございます";
}elseif($time < 16){
echo "こんにちは";
}elseif($time < 21){
echo "こんばんは";
}elseif($time < 25){
echo "お疲れ様です。<br>お早めにお休みください。";
}
?>

<?php

   echo'<br>';

$pref = "愛知";
switch ($pref) {
    case"広島":
        echo"名産品はレモンです。";
    break;
    case"愛知":
        echo"名産品は味噌煮込みうどんです。";
    break;
    default:
        echo"名産品はみかんです。";
    break;
}
?>

<?php

   echo'<br>';

$num = 0;
// while($num < 100){
//     $num = $num+1;
//     echo$num;
//     echo'<br>';
// }

$point = rand(1, 100);
$re = 0;
$ok = 0;
while($re <10){
    $re++;
    if($point > 59){
        $ok++;
    }else{
    }
}
if($ok >1){
    echo"やったね！合格！";
}else{
    echo"ざんねん、不合格。";
}

?>

<?php

   echo'<br>';

// $number = 0;
// for($num = 0 ; $num < 100 ; $num++){
//     $number ++;
//     echo $number;
//     echo '<br>';
// }

echo'<br>';

$number = 0;
for($num = 0 ; $num < 10 ; $num++){
    $number ++;
    echo $number;
    echo '<br>';
}

?>

<?php echo '<br>'; ?>

<?php
$count = 0;
$skip = 10;
$skipp = 15;
$skippp = 33;

while($count < 100){
 if($count == $skip){
    $count++;
    continue;
    break;
}
if($count == $skipp){
    $count++;
    continue;
    break;
}
if($count == $skippp){
    $count++;
    continue;
    break;
}

echo "{$count}.\n";
 $count++;
}
// echo "\n";
echo "処理終了";
?>

<?php echo '<br>'; ?>

<?php
date_default_timezone_set('Asia/Tokyo');
echo date("D");

?>

<?php echo '<br>' ?>

<?php
  $color = [
    'red' => '赤',
    'yellow' => '黄',
    'blue' => '青',
    'green' => '緑',
    'white' => '白',
    'black' => '黒',
  ];
  echo '1番目は' . $color['blue'] . '色です。';
  echo '2番目は' . $color['white'] . '色です。';
  echo '3番目は' . $color['red'] . '色です。';
?>


<?php echo '<br>' ?>

<?php
  $color_name = [
    'red' => '赤',
    'yellow' => '黄',
    'blue' => '青',
    'green' => '緑',
    'white' => '白',
    'black' => '黒',
  ];
  $color = [
    'red' => '#FF0000',
    'yellow' => '#00FFFF',
    'blue' => '#0000FF',
    'green' => '#00FF00',
    'white' => '#FFFFFF',
    'black' => '#000000',
  ];
 $key = "blue";
 echo  "<div style='color:{$color[$key]}'>{$color_name[$key]}</div>";
?>


<?php

$unit = array(
    array('name' =>'うえ' , 'hp' => '45' , 'op' => '5' , 'dp' => '12'),
    array('name' =>'くわ' , 'hp' => '60' , 'op' => '7' , 'dp' => '9'),
    array('name' =>'かみ' , 'hp' => '80' , 'op' => '15' , 'dp' => '3'),
);
var_dump($unit);
?>

<?php echo'<br><br>' ?>

<?php
date_default_timezone_set('Asia/Tokyo');

$first_date = date("1989-06-01");
$last_date = date("2089-06-01");
$week = ['日','月','火','水','木','金','土'];
$count = 0;

$Sunday = 0;
$Monday = 0;
$Tuesday = 0;
$Wednesday = 0;
$Thursday = 0;
$Friday = 0;
$Saturday = 0;

// 誕生日
$birth_date = "06-01";
for($i = $first_date; $i <= $last_date; $i = date("Y-m-d",strtotime($i.'+1 day'))){

    // 月と日
    $day = date("m-d",strtotime($i));

    if($birth_date == $day){
        $month_week = date('w',strtotime($i));
        switch($month_week){
            case 0 :
                $Sunday++;
                break;
            case 1 :
                $Monday++;
                break;
            case 2 :
                $Tuesday++;
                break;
            case 3 :
                $Wednesday++;
                 break;
            case 4 :
                $Thursday++;
                break;
            case 5 :
                $Friday++;
                break;
            case 6 :
                $Saturday++;
                break;
    }
    }
    // if($month_week == 3 && date('d',strtotime($ii)){

    //     echo date('Y-m-d ' , strtotime($i));
    //     echo $week[$month_week].'曜日';
    //     echo '<br>';
    // }
};
echo '日 '.$Sunday.'回<br>';
echo '月 '.$Monday.'回<br>';
echo '火 '.$Tuesday.'回<br>';
echo '水 '.$Wednesday.'回<br>';
echo '木 '.$Thursday.'回<br>';
echo '金 '.$Friday.'回<br>';
echo '土 '.$Saturday.'回<br>';

// echo $count;
?>

 <?php echo '<br><br>';?>
