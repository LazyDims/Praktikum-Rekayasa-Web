<?php
// Variabel JSON
$jsonString = '{"nama":"John Smith","umur":21,"jurusan":"Ekomomi"}';

// Decode ke PHP Object
$obj = json_decode($jsonString);
echo "Akses dari Object: " . $obj->nama . " - " . $obj->jurusan . "<br>";

// Decode ke PHP Array
$arr = json_decode($jsonString, true);
echo "Akses dari Array: " . $arr["nama"] . " - " . $arr["jurusan"];
?>
