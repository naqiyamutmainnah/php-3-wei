<?php
echo "<h2>Mencari Skor Terbesar</h2>";
function skor_terbesar($arr){
    //echo count($arr);
    for($i=0;$i<count($arr);$i++){
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$j]["nilai"]>$arr[$i]["nilai"]){
                $temp=["nama"=> $arr[$i]["nama"],
                        "kelas"=> $arr[$i]["kelas"],
                        "nilai"=>$arr[$i]["nilai"]
                ];
                $arr[$i]=[
                    "nama"=> $arr[$j]["nama"],
                    "kelas"=> $arr[$j]["kelas"],
                    "nilai"=>$arr[$j]["nilai"]
                ];
                $arr[$j]=[
                    "nama"=> $temp["nama"],
                    "kelas"=> $temp["kelas"],
                    "nilai"=>$temp["nilai"]
                ];
            }
      }
        for($i=0;$i<count($arr);$i++){
          if(!isset($max[$arr[$i]["kelas"]])){
            $max[$arr[$i]["kelas"]]=[
                        "nama"=> $arr[$i]["nama"],
                        "kelas"=> $arr[$i]["kelas"],
                        "nilai"=>$arr[$i]["nilai"]
            ];
          }
        }
    }
    return $max;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>