<?php
echo "<h1>Mencari Pasangan Terbesar</h1>";
function pasangan_terbesar($angka){
    echo "<br>";
    echo "Pasangan terbesar dari angka ".$angka." = ";
     $max=0;
     for($i=0;$i<strlen($angka)-1;$i++){
        $data=substr($angka,$i,2);
        if($data>$max){
            $max=$data;
        }
    }
    return $max ;
}
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>