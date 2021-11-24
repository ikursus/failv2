<?php

$array = [];
$array = array();

// Index array
$arrayIndex = ['value A', 'value B', 'Value C'];
// Dapatkan value C
echo "Ini adalah value untuk index key bernombor 2: $arrayIndex[2] <br>";

foreach ($arrayIndex as $value)
{
    echo "Ini adalah foreach untuk index array: $value <br>";
}

// Associative Array

$arrayAcc = ['A' => 'value A', 'B' => 'value B', 'C' => 'Value C'];

foreach ($arrayAcc as $key => $value)
{
    echo "$key mempunyai value $value<br>";
}

// Multidimensional Array
$arrayMulti = [
    ['nama' => 'Ahmad', 'umur' => '3 Tahun'],
    ['nama' => 'Ali', 'umur' => '4 Tahun'],
    ['nama' => 'Abu', 'umur' => '5 Tahun'],
    ['nama' => 'Siti', 'umur' => '6 Tahun']
];

echo $arrayMulti[3]['umur'];

// Keluarkan semua rekod
foreach ($arrayMulti as $key => $value)
{
    echo '<p>Umur ' . $value['nama'] . ' adalah ' . $value['umur'] . '.</p>';
}