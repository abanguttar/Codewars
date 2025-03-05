<?php

// Several people are standing in a row divided into two teams. The first person goes into team 1, the second goes into team 2, the third goes into team 1, and so on.

// Task
// Given an array of positive integers (the weights of the people), return a new array / tuple of two integers (depending on your language), 
// whereby the first one is the total weight of team 1, and the second one is the total weight of team 2. Note that the array will never be empty.

function rowWeights(array $arr): array
{
    $team_1 = 0;
    $team_2 = 0;
    foreach ($arr as $key => $value) {
        $key % 2 === 1 ? $team_2 += $value : $team_1 += $value;
    }

    return [$team_1, $team_2];
}

var_dump(rowWeights([13, 27, 49])); //[62,27]