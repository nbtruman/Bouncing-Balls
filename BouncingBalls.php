<?php

function bouncingBall($h, $bounce, $window) {
    // your code
  $in_range = ($bounce > 0) && ($bounce < 1);
  
  if($h > 0 && $in_range == 1 && $window < $h){
    $bounces = 1;
    $remaining_height = $h * $bounce;
    while($remaining_height > $window){
      $bounces = $bounces + 2;
      echo $bounces . "\n";
      $remaining_height = $remaining_height * $bounce;
      echo $remaining_height . "\n";
    }
    return $bounces;
  }else{
    return -1;
  }
}

echo bouncingBall(3.0, 0.66, 1.5) . "\n";
echo bouncingBall(30.0, 0.66, 1.5) . "\n";
echo bouncingBall(10, 0.6, 10) . "\n";

?>