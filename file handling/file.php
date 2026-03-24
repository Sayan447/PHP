<?php

// $filename = "test_set.csv";
// $count = 0;


// if (!file_exists($filename)) {
//     die("CSV file not found!");
// }
// if (($file = fopen($filename, "r")) !== FALSE) {
//     while (fgetcsv($file) !== FALSE) {
//         $count++;
//     }
//     fclose($file);
// }

// echo "Total customers: " . $count;
// -----------------------------------------
$filename = "test_set.csv";
$countries = [];

// Open file
if (($file = fopen($filename, "r")) !== FALSE) {

    // Skip header row
    fgetcsv($file, 0, ",", "\"", "\\");

    // Read rows
    while (($row = fgetcsv($file, 0, ",", "\"", "\\")) !== FALSE) {

        // Country is in column index 2 (change if different)
        $country = trim($row[2]);

        if (!empty($country)) {
            $countries[] = $country;
        }
    }

    fclose($file);
}

// Get unique countries
$unique_countries = array_unique($countries);

// Display
echo "<pre>";
print_r($unique_countries);
echo "</pre>";

