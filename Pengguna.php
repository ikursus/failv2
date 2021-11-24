<?php

class Pengguna {

    public function paparSenarai()
    {
        include('includes/DB.php');

        $sql = 'SELECT * FROM `pengguna`';

        $result = $pdo->query($sql);

        while ($row = $result->fetch()) {
            $senaraiPengguna[] = $row;
        }

        return $senaraiPengguna;
    }
}