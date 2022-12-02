<?php

var_dump($_GET["pw_length"]);

  $pw_length = intval($_GET["pw_length"]);

  if(!empty($pw_length)){
    if($pw_length >= 8 && $pw_length <= 36){
      $sums_of_array = array_merge($symbols,$letters,$numbers);
      for($i = 0; $i <= $pw_length; $i++){
        $random_index = rand(0, count($sums_of_array) - 1);
        $pw_result[] = $sums_of_array[$random_index];
      }
    }
  }
  

  var_dump($pw_result);

  echo implode("",$pw_result);

  $pw_string = implode("",$pw_result);