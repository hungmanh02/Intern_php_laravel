<?php 


// $arr=[3, 7, 3,3];
$arr=["false", "up", "down", "left", "right", "true", "false"];

function findFrequent($arr=[]){ 
        $value='';
        $b=array_count_values($arr);
        foreach($b as $key => $value){
            if($value ===max($b)){
                $value=$key;
                break;
            }
        }
        return $value;
        
}

print_r(findFrequent($arr));



?>
