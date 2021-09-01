<?php
class Occurance {
    static function occuranceCount($value, $array){
        $count=0;
        for ($i=0; $i < count($array); $i++){
            if ($value==$array[$i]){
                $count++;
            } 
        }
        return $count;
    }
    function value($array){
        for ($i = 0; $i < count($array); $i++){
            if ($i==0){
                $count_value=self::occuranceCount($array[$i],$array);
                echo "Occurance of ".$array[$i]." is ".$count_value."\n";
            }
            for ($k = $i-1; $k >=0; $k--){
                if ($array[$i]==$array[$k]) {
                   break;
                } else if ($k==0) {
                    $count_value=self::occuranceCount($array[$i],$array);
                    echo "Occurance of ".$array[$i]." is ".$count_value."\n";
                }
            }
        }
    }
}
$array = array(2,3,1,2,3,2,9,3,9,1,2,9,4);
$countOccurance = new Occurance();
$countOccurance->value($array);
?>