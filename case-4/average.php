<?php

require_once "student.php";

$group_scores= [];

if (isset($student_groups)) {
    foreach ($student_groups as $group => $students) {
        echo "<p>$group</p>" ;
        foreach ($students as $student) {
            echo $student->score ."<br>";
            $group_scores[$group][] = $student->score;
        }
    }
}

foreach ($group_scores as $group => $scores) {
    $students_number = count($scores);
    $sum = array_reduce($scores, function ($total, $score) {
        $total += $score;
        return $total;
    }, 0);

    $average = $sum/$students_number;

    echo "<br>".$group . ' average : ' . $sum . "<br>"."<br>";
    echo  ' average : ' . $average . "<br>"."<br>";
}