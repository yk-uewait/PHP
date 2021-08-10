<?php
$array = [2,3,5,7];
$count = 0;
for($num = 1 ; $num <= 100 ; $num++){
    $sosu = true;
        echo $num;
        if($num % 2 == 0){
            echo ' 2の倍数';
            $sosu = false;
        }
        if($num % 3 == 0){
            echo ' 3の倍数';
            $sosu = false;
        }
        if($num % 5 == 0){
            echo ' 5の倍数';
            $sosu = false;
        }
        if($num % 7 == 0){
            echo ' 7の倍数';
            $sosu = false;
        }

        if(in_array($num , $array)){
            $sosu = true;    
        }
        if($num == 1){
            $sosu = false;
        }

    if($sosu){
        echo ' 素数';
        $count++;
    }
        echo '<br>';
}
echo '素数の数：'.$count;



?>