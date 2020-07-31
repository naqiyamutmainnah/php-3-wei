<?php
echo "<h2>Angka Palindrome </h2>";
function palindrome_angka($angka){
    echo "<br>";
    echo "Angka palindrome terdekat dari ".$angka." adalah : ";
  do{
    $angka++;
  }while(strrev($angka)!=$angka);
  return $angka;
}

// TEST CASES
echo palindrome_angka(8);// 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>