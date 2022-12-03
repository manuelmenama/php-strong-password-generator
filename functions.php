<?php

function is_char_repeat($char_repeat){
  return ($char_repeat==="1")?true:false;
}

foreach($type_of_char as $type){


  if($type==="symbol"){
    $sums_of_array = array_merge($sums_of_array, $symbols);
  }
  if($type==="number"){
    $sums_of_array = array_merge($sums_of_array, $numbers);
    if((!in_array("letter", $type_of_char))&&(!in_array("symbol", $type_of_char))){
      $pw_length = 10;
    }
  }
  if($type==="letter"){
    $sums_of_array = array_merge($sums_of_array, $letters);
  }
  
}

if(!empty($pw_length)){

  $pw_result = [];

  if(($pw_length >= 8 && $pw_length <= 36)&&is_char_repeat($char_repeat)){
    $response = true;
    for($i = 0; $i <= $pw_length; $i++){
      $random_index = rand(0, count($sums_of_array) - 1);
      $pw_result[] = $sums_of_array[$random_index];
    }
  }elseif(($pw_length >= 8 && $pw_length <= 36)&&!is_char_repeat($char_repeat)){
    $response = true;

    do{
      $random_index = rand(0, count($sums_of_array) - 1);
      if(!in_array($sums_of_array[$random_index], $pw_result)){
  
        $pw_result[] = $sums_of_array[$random_index];
      }
    }while(count($pw_result) < $pw_length);
    
  }else{
    $response = false;
  }

}

echo implode("",$pw_result);

$pw_string = implode("",$pw_result);