<?php
// $pass = 60;
// $re = 0;
// while($re <10){
//     $point = rand(1, 100);
//     echo $point;
//     if($point >= $pass){
//         echo"やったね！合格！<br>";
//     }else{
//         echo"ざんねん、不合格。<br>";
//     }
//     $re++;
// }

echo'<br>';

$pass = 60;
for($re =0 ; $re <10 ; $re++){
    $point = rand(1, 100);
    echo $point;
    if($point == 100){
        echo"満点<br>";
    }elseif($point >= $pass){    
        echo"やったね！合格！<br>";
    }else{
        echo"ざんねん、不合格。<br>";
    }
}

?>