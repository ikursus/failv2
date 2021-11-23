<?php
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

    $result = $pdo->query($sql);

    // Pagination
    $total = $pdo->query('SELECT * FROM surat')->fetchAll();
    $pages = ceil(count($total) / $totalPerPage);

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}

$assetPath = dirname(dirname(dirname($_SERVER["PHP_SELF"])));

require( dirname(dirname(__DIR__)) . '/template/surat.html.php');