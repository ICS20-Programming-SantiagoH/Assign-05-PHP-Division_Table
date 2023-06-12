<?php

//message for user
$message = "";

//User input
  $userNumber = $_POST['userNumber'];

  $min = $_POST['min'];

  $max = $_POST['max'];

  $display = $_POST['display'];

//initialize couter and remainder

$counter1 = $min;

$remainder = 0;

//statement for when a string is entered
  
 if ($min == "" || $max == "" || $userNumber == ""){
    $message = "Please Enter a Min, Max and/or Number.";
  }

   //statement for when min is larger than max

else if ($min > $max){
    $message = "Please enter a valid min.";
  }

   //loops for min to max and max to min
  
  else {
    //min to max loop
    if ($display == "Min to Max"){
      while ($counter1 <= $max){

        $remainder = $userNumber % $counter1;

        $message = $message . $userNumber . " % " . $counter1 . " = " . $remainder . "<br>";

        $counter1 = $counter1 + 1;     

        if ($counter1 == 0){
          $counter1++;
            }
      }
    }
      else {
        for ($counter = $max ;$counter >= $min; $counter = $counter - 1){

          if ($counter == 0){
          $counter--;
            }

          $remainder = $userNumber % $counter;

          $message = $message . $userNumber . " % " . $counter . " = " . $remainder . "<br>";

          
        }
      }
  }

  // Display Results back to User
  echo $message;
?>