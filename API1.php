<?php

    $String=$_GET["string"];
    $l = 0;
    $r = strlen($String) - 1;
    $flag = 0;
    while($r > $l){
      if ($String[$l] != $String[$r]){
        $flag = 1;
        break;
      }
      $l++;
      $r--;
    }
    
    if ($flag == 0){
      $result="this string is palindrome";
    } else {
      $result="this is not palindrome";
    }

    $data = ["result"=> $result];
    echo json_encode($data)
 
?>