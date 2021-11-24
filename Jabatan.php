<?php

class Jabatan {

    public function paparSenarai()
    {
        include('includes/DB.php');

        $sql = 'SELECT * FROM `jabatan`';

        $result = $pdo->query($sql);

        while ($row = $result->fetch()) {
            $senaraiJabatan[] = $row;
        }

        return $senaraiJabatan;
    }

    public function mesejBerjaya()
    {
        echo 'Sukses';
    }
}

// Visibility
// public
// protected
// private