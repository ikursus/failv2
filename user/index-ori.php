<?php
try {
    require_once(__DIR__ . '/../includes/DB.php');

    $sql = 'SELECT * FROM `pengguna`';
    $sqlJabatan = 'SELECT * FROM `jabatan`';

    $result = $pdo->query($sql);
    $resultJabatan = $pdo->query($sqlJabatan);

    while ($row = $result->fetch()) {
        $senaraiPengguna[] = $row;
    }

    while ($rowJabatan = $resultJabatan->fetch()) {
        $senaraiJabatan[] = $rowJabatan;
    }

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}


$assetPath = dirname(dirname($_SERVER["PHP_SELF"]));
//var_dump($senaraiPengguna);
require('../template/dashboard.html.php');

