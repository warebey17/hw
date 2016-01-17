<?php
// Print fibonacci series upto 9 elements
 
$n = 9;

// Recursion function for fibonacci 
 
function fibonacci($n){

 
    if($n == 0){
 
       return 0;
 
    }else if($n == 1){
 
       return 1;
 
    }  else {
 
        return (fibonacci($n - 1) + fibonacci($n - 2));
    } 
 
}
 
// The call function
 
for ($i=1; $i<$n; $i++){
 
    echo fibonacci($i);
    echo "\n";
}				
