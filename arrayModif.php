<?php
/*
  $days = ["Monday", "Tuesday", "Wednesday"];
  
  // Menambahkan item baru
  $days[] = "Sunday";
  
  // Menghapus item kedua
  unset($days[1]);

  // Nge-print hasilnya
  print_r($days);
  var_dump($days);
*/

// Multidimensional + Basic Array
  $students = [
    ["Budi", 17, 85.5],
    ["Siti", 18, 90.0],
    ["Andi", 15, 78.0]
  ];
  echo $students[1][0] . " berumur " . $students[2][1] . ", dan memiliki nilai " . $students[0][2];
  // Output: Budi berumur 18, dan memiliki nilai 90.0
  echo "<br><br>";
// Multidimensional + Associative Array
$students = [
    [
        "name" => "Budi",
        "age" => 17,
        "score" => 85.5
    ],
    [
        "name" => "Siti",
        "age" => 18,
        "score" => 90.0
    ],
    [
        "name" => "Andi",
        "age" => 16,
        "score" => 78.0
    ]
];
echo $students[2]["name"] . " berumur " . $students[2]["age"] . ", dan memiliki nilai " . $students[2]["score"];
// Output: Budi berumur 18, dan memiliki nilai 90.0
?>