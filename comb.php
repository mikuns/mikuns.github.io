<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/26/2018
 * Time: 11:36 AM
 */

//$final      = array();
//$comb       = array();
//$numbers    = array(2,8,16,30,44,48,33,11,17,21);
//$number     = $numbers;
//$x          = 1;
//echo implode("|", $numbers)."<br>";
//
//
//array_push($final, $comb);

//print_r($final);


//echo implode(",", $comb)."<br>";
//print_r($comb);
//echo "Total Combinations of 3's: ".$x."<br>";

//$input = array(1,2,3,4,5);
//$output = $combinatorics->


$array = array('12', '4', '99', '32');

function depth_picker($arr, $temp_string, &$collect) {
    if ($temp_string != "")
        $collect []= $temp_string;

    for ($i=0; $i<sizeof($arr);$i++) {
        $arrcopy = $arr;
        $elem = array_splice($arrcopy, $i, 1); // removes and returns the i'th element
        if (sizeof($arrcopy) > 0) {
            depth_picker($arrcopy, $temp_string ." " . $elem[0], $collect);
        } else {
            $collect []= $temp_string. " " . $elem[0];
        }
    }
}

$collect = array();
depth_picker($array, "", $collect);
print_r($collect);
//echo json_encode($collect, JSON_PRETTY_PRINT);
