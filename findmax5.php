<?php 



 function findMax5($b){
     rsort($b);
    for($c=0;$c<count($b);$c++){
        if($c<5){
            print_r($b[$c] ." ") ;
             
        }
       
    }
    
     
 }
 $b = [14,12,38,17,10,36,12,29,45,34,48,22];  
 print_r(findMax5($b));


 

?>