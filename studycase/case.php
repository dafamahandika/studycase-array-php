<?php
$siswa = [
     'Dafa Mahandika',
     '12108365',
     'PPLG XI-1',
     'Cisarua 4',
];


foreach ($siswa as $value) {
     echo "$value <br>";
};
echo "<hr>";

$search = array_search('Cisarua 4', $siswa);

var_dump($search);

echo "<hr>";

echo ($search) ? "OK" : "DATA TIDAK DI TEMUKAN"; 

echo "<hr>";

unset($siswa[3]);

$str = implode(',', $siswa);

echo "$str <hr>";

$nilai = [
     'indo' => 90,
     'eng' => 75.5,
     'math' => 90,
     'pkn' => 85
];

echo "Indonesia = ".$nilai['indo']."<br>";
echo "Inggris = ".$nilai['eng']."<br>";
echo "Matematika = ".$nilai['math']."<br>";
echo "PKN = ".$nilai['pkn']."<br>";

var_dump($nilai);

echo "<hr>";

$jml = count($nilai);

echo "Terdapat $jml nilai yang dapat di olah";

echo "<hr>";

asort($nilai);
print_r($nilai);

echo "<hr>";

arsort($nilai);
print_r($nilai);

echo "<hr>";

array_push($nilai, 65);
arsort($nilai);

$int = implode('<br>', $nilai);
echo "$int <hr>";

array_splice($siswa, 0,1,'Mahandika');

foreach ($siswa as $value) {
     echo "$value <br>";
}

echo "<hr>";

$search = array_search('12108365', $siswa);

var_dump($search);

echo "<hr>";


if($search > 0 ) {
     foreach ($siswa as $value) {
          echo "$value <br>";
     }
     echo "<br> $int";
} else {
     echo "DATA TIDAK DI TEMUKAN";
}

echo "<hr>";

echo $nilai['eng'];


?>
