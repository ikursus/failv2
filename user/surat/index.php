<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['suratmasuk']))
{
    require_once(__DIR__ . '/../../includes/DB.php');

    $sql = "INSERT INTO surat SET
    `norujukan` = :norujukan,
    `trksurat` = :trksurat,		
    `tajuk` = :tajuk,
    `lampiran` = :lampiran,
    `jabatan` = :jabatan,	
    `trksimpan` = :trksimpan,
    `filename` = :namafail,
    `pengirim` = :pengirim,
    `jenis` = :jenis,
    `nokerja` = :nokerja";

    $query = $pdo->prepare($sql);

    // Option 1 untuk bindValue
    $parameters = [
        ':norujukan' => $_POST['norujukan'] ?? 'DEFAULT VALUE',
        ':trksurat' => date ("Y/m/d H:i:s"),
        ':tajuk' => $_POST['tajuk'] ?? 'DEFAULT VALUE',
        ':lampiran' => $_POST['lampiran'] ?? 'DEFAULT VALUE',
        ':jabatan' => $_POST['jabatan'] ?? 'DEFAULT VALUE',
        ':trksimpan' => date ("Y/m/d H:i:s") ?? 'DEFAULT VALUE',
        ':namafail' => $_POST['namafail'] ?? 'DEFAULT VALUE',
        ':pengirim' => $_POST['pengirim'] ?? 'DEFAULT VALUE',
        ':jenis' => $_POST['jenis'] ?? '1',
        ':nokerja' => $_POST['nokerja'] ?? '1'
    ];

    foreach ($parameters as $key => $value)
    {
        $query->bindValue($key, $value);
    }

    // Option 2 untuk bindValue
    // $query->bindValue(':norujukan', $_POST['norujukan']);
    // $query->bindValue(':trksurat', date ("Y/m/d H:i:s"));
    // $query->bindValue(':tajuk', $_POST['tajuk']);
    // $query->bindValue(':lampiran', $_POST['lampiran']);

    // Simpan data ke table
    $query->execute();

    header('Location: index.php?success');
    exit();

}

// Request method jenis GET
try {
    require_once(__DIR__ . '/../../includes/DB.php');

    // User Input Page Data
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalPerPage = isset($_GET['total']) ? (int)$_GET['total'] : 10;
    $limit = ( $page > 1 ) ? ($page * $totalPerPage) : 0;
    $pagePrevious = $page -1;
    $pageNext = $page +1;

    // Data Surat
    $sql = "SELECT * FROM `surat` LIMIT $limit, $totalPerPage";
    $sqlJabatan = "SELECT * FROM `jabatan`";
    
    
    $result = $pdo->query($sql);
    $resultJabatan = $pdo->query($sqlJabatan);

    // Pagination
    $total = $pdo->query('SELECT * FROM surat')->fetchAll();
    $pages = ceil(count($total) / $totalPerPage);

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}

$assetPath = dirname(dirname(dirname($_SERVER["PHP_SELF"])));

require( dirname(dirname(__DIR__)) . '/template/surat.html.php');