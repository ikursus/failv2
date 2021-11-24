<?php
try {
    require_once(__DIR__ . '/../includes/DB.php');

    $password = password_hash($_POST['katalaluan'], PASSWORD_DEFAULT);

    $sql = 'UPDATE `pengguna` SET katalaluan = :katalaluan WHERE nokerja = :nokerja';
    $query = $pdo->prepare($sql);
    $query->bindValue(':katalaluan', $password);
    $query->bindValue(':nokerja', '137257');
    $query->execute();

} catch (PDOException $e) {
    $message = 'Masalah sambungan ke database: ' . $e->getMessage();
}

echo 'Sukses';
exit();