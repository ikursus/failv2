<?php
try {
    require_once(__DIR__ . '/../../includes/DB.php');

    // User Input Page Data
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalPerPage = 15;
    $limit = ( $page > 1 ) ? ($page * $totalPerPage) : 0;

    // Data Surat
    $sql = "SELECT * FROM `surat` LIMIT $limit, $totalPerPage";

    $result = $pdo->query($sql);

    // Pagination
    $total = $pdo->query('SELECT * FROM surat')->fetchAll();
    
    $pages = ceil(count($total) / $totalPerPage);

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}

$assetPath = dirname(dirname(dirname($_SERVER["PHP_SELF"])));

require( dirname(dirname(__DIR__)) . '/template/surat.html.php');