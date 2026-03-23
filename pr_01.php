<?php
// echo "hello world!";



// array 
// $fruite = array('apple' , 'orange' , 'grapes');
// var_dump($fruite);

// it's means there is nothing value inside it
// $var1 = null;
// var_dump($var1);


// $str1 = "BCA";
// length
// echo strlen($str1);
// echo PHP_EOL;
// word count function
// echo str_word_count($str1);



// echo strrev($str1);
// for searching word, return the index of the word
// echo strpos($str1,"name"); 

// for reverse
// echo strrev($str1);


// for replace
// echo str_replace("sayan","sonu", $str1);




// constant
// define("PI" , 3.14);
// echo PI;




// operator
// echo "the value of 3 + 4 is", 3+4;
// echo PHP_EOL;
// echo "the value of 3 - 4 is", 3-4;
// echo PHP_EOL;
// echo "the value of 3 * 4 is", 3*4;
// echo PHP_EOL;
// echo "the value of 3 / 4 is", 3/4;
// echo PHP_EOL;
// echo "the value of 3 % 4 is", 3%4;
// echo PHP_EOL;
// echo "the value of 3 ** 4 is", 3**4;



// $x = 4;
// echo $x;
// echo PHP_EOL;
// // $x++;
// $x--;
// echo $x;



// return Hour of time
// date("H") returns the current hour in 24-hour format with leading zeros.
// So PHP always gives a 2-digit hour.
// Examples:
// 8 AM → 08
// 9 AM → 09
// 3 PM → 15
// 11 PM → 23




// $t = date("H");
// // echo $t; //08
// if((int)$t < '20'){
//     echo $t . ' is a good time ';
// }
// else{
//     echo "bad time";
// }

// // It prints your current PHP timezone, for example
// echo date_default_timezone_get();









// question of NDLI
// Flatten a multidimensional      ([1, [2, 3], [4, [5, 6]]])
// Rotate array right by 1


// $arr = [1, [2, 3], [4, [5, 6]]];

// $result = [];

// for ($i = 0; $i < count($arr); $i++) {
    
//     if (is_array($arr[$i])) {
        
//         for ($j = 0; $j < count($arr[$i]); $j++) {
            
//             if (is_array($arr[$i][$j])) {
                
//                 for ($k = 0; $k < count($arr[$i][$j]); $k++) {
//                     $result[] = $arr[$i][$j][$k];
//                 }
                
//             } else {
//                 $result[] = $arr[$i][$j];
//             }
//         }
        
//     } else {
//         $result[] = $arr[$i];
//     }
// }

// print_r($result);







// $var1 = 1;
// while($var1 <= 4){
//     echo PHP_EOL;
//     echo "The current value of the variable is " .$var1;
//     $var1++;
// };


// for( $i = 0; $i < 6; $i++ ){
//     echo ' Current value of i is '. $i;
// };


define("PI" , 3.14);
// /function
// function avarage_numbers($a, $b) {
//     $average = ($a + $b) /2;
//     return $average;
// }
// function area_circle($radius) {
//     $area = PI * $radius * $radius;
//     return $area; 

// }


// echo avarage_numbers(3,4);
// echo PHP_EOL;
// echo "the area of our circle is ". area_circle(1);



// $number = array(4,6,2,22,11);
// $sort_number = sort($number);
// reverse sort
// $sort_number = rsort($number);
// print_r ($number);
    
// $leng = count($number);
// echo $leng; // 5
// for ($i = 0; $i < $leng; $i++){
//     echo PHP_EOL;
//     echo ($number[$i]);
// }



