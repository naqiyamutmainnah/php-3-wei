<?php
echo "<h1>Mencari Rata - Rata</h1>";
function cari_mean($arr){
    echo "<br><br>";
    print_r($arr);
    echo "<br>";
    $total=0;
    foreach($arr as $array){
        $total += $array;
    }
    echo "Rata -rata = ";
    return round($rate=$total/count($arr));
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>