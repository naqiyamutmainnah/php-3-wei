<?php
function tentukan_deret_geometri($arr) {
    echo "<br><br>";
    print_r($arr);
    echo "<br>Apakah deret Geometri ? ";
    $ratio=abs($arr[1]/$arr[0]);
    $cek=1;
    for($i=1; $i<count($arr)-1; $i++){
        if(abs($arr[$i+1]/$arr[$i])==$ratio){
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
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>