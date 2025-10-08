<?php
// Buat array
$mahasiswa = [
    "nama" => "John Smith",
    "umur" => 21,
    "jurusan" => "Hukum"
];

// Encode array ke JSON
$jsonData = json_encode($mahasiswa);

echo "Hasil: " . $jsonData;
?>
