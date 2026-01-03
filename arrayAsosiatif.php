<?php
/*
  $students = [
    "name" => "Budi",
    "age" => 17,
    "score" => 85.5
  ];

  // Mengakses nilai array asosiatif
  echo "Student's name: " . $students["name"] . "<br>";           // Output: Student's name: Budi
  echo "Student's age: " . $students["age"] . " years old<br>";   // Output: Student's age: 17 years old
  echo "Student's score: " . $students["score"];                  // Output: Student's score: 85.5

  $umur = 17;
  if($umur >= 18){
    echo "Anda sudah dewasa, wayahe gawe ktp.";
  } else {
    echo "Anda masih bocah, dadi raiso gawe ktp.";
  }

  echo "<br>";

  //$umur = 20;
  
  $a = true;
  $b = false;

  echo ($a && $b)? "ya" : "tidak";  // Output: (false)
  echo "<br>";
  echo ($a || $b)? "ya" : "tidak";  // Output: (true)
  echo "<br>";
  echo (!$a)? "ya" : "tidak";       // Output: (false)
  echo "<br>";
  echo ($a xor $b)? "ya" : "tidak"; // Output: (true)
*/
// Version 1
  $months = array("January", "February", "March");
  // Version 2
  $days = ["Monday", "Tuesday", "Wednesday"];

  echo "My favorite month is " . $months[0] . ".<br>"; // Output: My favorite month is January
  echo "My favorite day is " . $days[2] . ".";         // Output: My favorite day is Wednesday
  ?>