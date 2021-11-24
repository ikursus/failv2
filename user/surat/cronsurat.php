<?php

// Request method jenis GET
try {
    require_once(__DIR__ . '/../../includes/DB.php');

    // Data Surat
    $sql = "SELECT * FROM `surat`";
    
    $result = $pdo->query($sql);

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}


$tarikhToday = date('Y-m-d');
//$tarikhToday = '2019-08-30';

$sql = "UPDATE `surat` SET `tag` = :tag WHERE `trksurat` = :tarikhsurat";

$query = $pdo->prepare($sql);
$query->bindValue(':tag', 'B');
$query->bindValue(':tarikhsurat', $tarikhToday);
$query->execute();

echo 'done!';
exit();