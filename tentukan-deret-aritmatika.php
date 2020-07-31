<?php
function tentukan_deret_aritmatika($arr) {
    echo "<br><br>";
    print_r($arr);
    echo "<br>Apakah deret aritmatika ? ";
    $beda=abs($arr[1]-$arr[0]);
    $cek=1;
    for($i=1; $i<count($arr)-1; $i++){
        if(abs($arr[$i+1]-$arr[$i])==$beda){
            $cek *=1;
        }else{
            $cek *=0;
        }
    }
    if($cek==0){
        return "false";
    }else{
        return "true";
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>