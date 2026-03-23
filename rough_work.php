<?php
foreach($students as $student) {
    print_r($student['name']);
    print_r($student['id']);
    print_r($student['details']['course']);
    $marks_1 = $student['details']['marks']['math'];
    $marks_2 = $student['details']['marks']['eng'];
}