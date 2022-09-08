<?php
$network = [
     '3G',
     '4G',
     '5G'
];

unset($network[0]);
var_dump($network);

echo "<hr>";

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0]."<br>";
// echo $hewan[1]."<br>";
echo $hewan[2]."<br>";

echo "<hr>";

print_r($hewan);
?>