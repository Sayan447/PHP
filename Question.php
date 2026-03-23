<?php
$students = [
    [
        "id" => 1,
        "name" => "Rohit Sharma",
        "details" => [
            "age" => 21,
            "course" => "BCA",
            "marks" => [
                "math" => 95,
                "english" => 88,
                "computer" => 91
            ]
        ]
    ],
    [
        "id" => 2,
        "name" => "Virat Kohli",
        "details" => [
            "age" => 22,
            "course" => "BSc IT",
            "marks" => [
                "math" => 72,
                "english" => 69,
                "computer" => 75
            ]
        ]
    ],
    [
        "id" => 3,
        "name" => "KL Rahul",
        "details" => [
            "age" => 20,
            "course" => "BCA",
            "marks" => [
                "math" => 40,
                "english" => 35,
                "computer" => 50
            ]
        ]
    ],
    [
        "id" => 4,
        "name" => "Hardik Pandya",
        "details" => [
            "age" => 23,
            "course" => "BSc IT",
            "marks" => [
                "math" => 85,
                "english" => 92,
                "computer" => 88
            ]
        ]
    ]
];

// total marks
// average marks

// <!-- Apply Grade System
//     Average    Grade
//     90+    A
//     75–89    B
//     60–74    C
//     40–59    D
//     <40    F

// Find Topper Student

// Print Only BCA Students with Grade -->


function getGrade($average) {
   if ($average >= 90) {
       return "A";
   } elseif ($average >= 75) {
       return "B";
   } elseif ($average >= 60) {
       return "C";
   } elseif ($average >= 40) {
       return "D";
   } else {
       return "F";
   }
};

$topper = "";
$highestAvg = 0;


//echo PHP_EOL;
$Bca = [];
foreach ($students as $student){




   $marks = $student['details']['marks'];
   // print_r($marks);


   // Calculate total marks
   $total = $marks['math'] + $marks['english'] + $marks['computer'];
   //echo PHP_EOL;
  // echo $total;
   // print_r (count($marks));
  


   // Calculate average marks


   $average = round(($total / 3),2);


   // Grade
   $grade = getGrade($average);






   // echo PHP_EOL;
   // echo "Student: " . $student['name'] ;
   // echo PHP_EOL;
   // echo "Total Marks: " . $total;
   // echo PHP_EOL;
   // echo "Average Marks: " . $average ;


   //echo PHP_EOL;
if ($average > $highestAvg) {
       $highestAvg = $average;
       $topper = $student['name'];
   }


   if ($student['details']['course'] === "BCA") {


       // $marks = $student['details']['marks'];
       // $total = array_sum($marks);
       // $average = round($total / count($marks),2);
       // $grade = getGrade($average);


       // echo "\nStudent: " . $student['name'];
       // echo "\nCourse: BCA";
       // echo "\nAverage: $average";
       // echo "\nGrade: $grade\n";


       $Bca[] = [
           "name"=>$student['name'],
            "id"=>$student['id'],
           "grade"=>$grade

       ];
   };


};
print_r($Bca);

// csv file
$filename = "bca_students.csv";

// open file
$file = fopen($filename, "w");

// add header row
fputcsv($file, ["ID", "Name", "Grade"]);

// write data
foreach ($Bca as $student) {
    fputcsv($file, [
        $student['id'],
        $student['name'],
        $student['grade']
    ]);
}

// close file
fclose($file);

echo "CSV file created successfully!";