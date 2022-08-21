<?php
define('DB_HOST', 'db');
define('DB_NAME', 'kas_masjid');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');

$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 3306) or die('Koneksi ke database gagal!');
