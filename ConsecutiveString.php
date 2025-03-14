<?php


// You are given an array(list) strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.

// Example
// strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], k = 2

// Concatenate the consecutive strings of strarr by 2, we get:

// treefoling   (length 10)  concatenation of strarr[0] and strarr[1]
// folingtrashy ("      12)  concatenation of strarr[1] and strarr[2]
// trashyblue   ("      10)  concatenation of strarr[2] and strarr[3]
// blueabcdef   ("      10)  concatenation of strarr[3] and strarr[4]
// abcdefuvwxyz ("      12)  concatenation of strarr[4] and strarr[5]

// Two strings are the longest: "folingtrashy" and "abcdefuvwxyz".
// The first that came is "folingtrashy" so 
// longest_consec(strarr, 2) should return "folingtrashy".

// In the same way:
// longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
function longestConsec($strarr, $k)
{
    $n = count($strarr);
    // echo $n;
    if ($n === 0 || $k > $n || $k <= 0) {
        return '';
    }
    $result = 0;
    $str_result = "";
    for ($i = 0; $i <= $n - $k; $i++) {
        $arr = [];
        for ($j = 0; $j < $k; $j++) {
            $arr[] = $strarr[$i + $j];
        }
        var_dump($arr);
        $string = implode('', $arr);
        $count_str = strlen($string);
        if ($count_str > (int) $result) {
            $result = $count_str;
            $str_result = $string;
        }
    }
    return $str_result;
}

$strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"];
// $strarr = ["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"];
// $strarr = ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"];
// $strarr = [];
$k = 2;

var_dump(longestConsec($strarr, $k));
