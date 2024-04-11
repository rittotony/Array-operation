<?php

  $string = "Alice is eating burries"; 

  $checkArray = ["L", "E", "R"];

  function stringCheck($str, $arrayCheck)
  {
      $arrayLower = array_map('strtolower', $arrayCheck);
      $strLower = strtolower($str);
      $matchingWord = [];
      $strArrays = explode(" ", $strLower);
      foreach($strArrays as $strArray){
           foreach($arrayLower as $letter){
                if(strpos($strArray, $letter) !== false)
                {
                    $matchingWord[] = $strArray;
                    break;
                }
           }
      }
      return $matchingWord;
  }


  
  $results = stringCheck($string, $checkArray);
 
  $resultlength = count( $results);

  foreach($results as $result){

     echo $result.":".$resultlength."<br>";
     $resultlength = $resultlength-1;

  }
   


?>