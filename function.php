<?php
function tickets($numbers){

  sort($numbers,1);
  $m = [];
  $r = 0;
  $maxSize = 0;
  
  foreach($numbers as $n){
    if(is_numeric($n)){
       if(in_array($n, $m["result$r"]) || in_array($n-1, $m["result$r"])){
          $m["result$r"][] = $n;
        } else {
          $r++;
          $m["result$r"][] = $n;
        }
    }
  }
 
  for($i=0; $i<=sizeOf($m);$i++){
    $size = sizeOf($m["result$i"]);
    $size > $maxSize ? $maxSize = $size : "";
  }
   print_r($m);
  return $maxSize;
}
?>
