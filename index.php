<?php
$array = [[1,2,3], [3,4,5], [5,6,7]];
$sum = 0;
for ($i = 0; $i < count($array);$i++){
        $sum += ($array[$i][0] + $array[$i+1][0] + $array[$i+2][0]);
        break;
}
echo $sum;
