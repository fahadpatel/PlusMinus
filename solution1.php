<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    //Count N
    
    $n=count($arr);
    $positive_count=0;
    $nagative_count=0;
    $zero_count=0;
    
    for($i=0; $i<$n;$i++){
      
      if($arr[$i]>0){
        
        $positive_count++;
      }else if($arr[$i]<0){
        $nagative_count++;
      }else{
        $zero_count++;
      }
    }
    $positive_ratio=floatval($positive_count/$n);
      $negative_ratio=floatval($nagative_count/$n);
      $zero_ratio=floatval($zero_count/$n);
      
      $positive_ratio=number_format($positive_ratio,6,'.','');
      $negative_ratio=number_format($negative_ratio,6,'.','');
      $zero_ratio=number_format($zero_ratio,6,'.','');
      
      
      echo $positive_ratio."\n".$negative_ratio."\n".$zero_ratio;

}
?>
