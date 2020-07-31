<?php
function papan_catur($angka) {
    echo "Papan Catur".$angka."<br>";
    for($i=0;$i<$angka;$i++){
        if($i%2==0){
            for($j=0;$j<$angka; $j++){
                echo "#"."&nbsp";
            }
        }else{
            for($j=0;$j<$angka-1; $j++){
                echo "&nbsp"."#";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */
papan_catur(8);
/*
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
*/

papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/