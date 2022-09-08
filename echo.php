<?php
// $nama = ['Dafa ', 'Mahandika'];


// $language [0] = 'Java';
// $language [1] = 'Go';
// $language [2] = 'Kotlin';
// $language [3] = true;


// var_dump($language[3]);


// var_dump($nama);
// echo "<br>";
// echo $nama[0] .$nama[1];

$hewan = ['ayam', 'kucing', 'burung', 'ular'];

foreach ($hewan as $index => $value) {
     echo "$index . $value <br>";
}

echo "<hr>";

for ($i=0; $i < count($hewan) ; $i++) { 
     echo $hewan[$i]."<br>";
}

echo "<hr>";

$i = 0 ;

while ($i < count($hewan)) {
     echo $hewan[$i] . "<br>";
     $i++;
}
?>