<?php
echo "<h2>Mengubah Huruf Ke alphabet selanjutnya</h2>";
 function ubah_huruf($string){
     echo "<br>";
     echo "Kata ".$string." = ";
     $str="";
    for($i=0;$i<strlen($string);$i++){
        $kata[$i]=chr(ord(substr($string,$i,1))+1);
        $str.=$kata[$i];
    }
    return $str;
}
// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>