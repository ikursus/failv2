<?php
// include('../Pengguna.php');
// include('../Jabatan.php');

// $senaraiPengguna = new Pengguna;
// $senaraiJabatan = new Jabatan;


// echo password_hash('password', PASSWORD_BCRYPT)


$assetPath = dirname(dirname($_SERVER["PHP_SELF"]));
require('../template/userprofile.html.php');