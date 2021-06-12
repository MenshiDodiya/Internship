<?php  
if($_POST)  
{  
    $n=$_POST['input'];  
    for ($i = 2; $i <= $n-1; $i++) {  
      if ($n % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo 'The Number '. $n . ' is not prime';  
}  else {  
   echo 'The Number '. $n . ' is prime';  
   }   
}  
?>
