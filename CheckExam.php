<?php
// The first input array is the key to the correct answers to an exam, 
// like ["a", "a", "b", "d"]. The second one contains a student's submitted answers.
// The two arrays are not empty and are the same length. 
// Return the score for this array of answers, giving +4 for each correct answer, -1 for each incorrect answer,
//  and +0 for each blank answer, represented as an empty string (in C the space character is used).

// If the score < 0, return 0.

function checkExam(array $array1, array $array2): int
{
    $score = 0;
    $correct = 4;
    $incorrect = 1;
    $blank = 0;
    for ($i = 0; $i < count($array1); $i++) {
        $key = $array1[$i];
        $answer = $array2[$i];
        if ($answer === '') {
            $score += $blank;
        } elseif ($key === $answer) {
            $score += $correct;
        } else {
            $score -= $incorrect;
        }
    }

    return $score < 0 ? 0 : $score;
}


var_dump(checkExam(["a", "a", "b", "b"], ["a", "c", "b", "d"]));
var_dump(checkExam(["a", "a", "c", "b"], ["a", "a", "b", ""]));
var_dump(checkExam(["b", "c", "b", "a"], ["", "a", "a", "c"]));
