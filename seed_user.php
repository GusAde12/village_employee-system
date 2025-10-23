<?php
include 'includes/db.php';

$password = password_hash('admin123', PASSWORD_DEFAULT);
$nama = 'Administrator Desa';

$koneksi->query("INSERT INTO users (username, password, role, nama_lengkap) VALUES 
('admin', '$password', 'admin', '$nama')");
echo "User admin ditambahkan!";
?>
