# Project Penerimaan Siswa Baru — SMP 1 Muhammadiyah Babat

Deskripsi
Rancang sistem informasi penerimaan siswa baru untuk SMP 1 Muhammadiyah Babat. Aplikasi ini dibangun menggunakan PHP untuk logika server, Bootstrap untuk styling (CSS), dan jQuery sederhana untuk interaksi sisi-klien.

Fitur utama
- Form pendaftaran online (data pribadi, alamat, data orang tua/wali, riwayat sekolah)
- Manajemen pendaftar: lihat, edit, hapus
- Dashboard/admin untuk verifikasi dan pengumuman status
- Pencarian dan filter pendaftar
- Ekspor data (CSV) dan cetak (opsional)
- Validasi form dasar menggunakan jQuery dan validasi sisi-server

Teknologi
- Backend: PHP
- Frontend: HTML, Bootstrap, jQuery
- Database: MySQL / MariaDB
- Web server: Apache / Nginx

Struktur proyek (umum)
- /index.php atau /public/index.php — titik masuk aplikasi
- /assets/css — file CSS (Bootstrap dan kustom)
- /assets/js — file JavaScript/jQuery kustom
- /inc, /app atau /config — file konfigurasi, koneksi DB, fungsi bersama
- /sql — skrip SQL untuk pembuatan tabel awal

Persyaratan
- PHP 7.4+ (sesuaikan jika perlu)
- MySQL atau MariaDB
- Web server (Apache/Nginx) atau PHP built-in server untuk development

Instalasi cepat (lokal)
1. Clone repo:
   git clone https://github.com/mahen4jk/project-ppsi-sim.git
2. Masuk ke folder proyek:
   cd project-ppsi-sim
3. Siapkan database:
   - Buat database baru (contoh: ppsi_db)
   - Import skrip SQL di folder sql/ jika tersedia
4. Konfigurasi koneksi database:
   - Salin file konfigurasi contoh (mis. config.sample.php → config.php) dan sesuaikan kredensial
5. Jalankan server development:
   php -S localhost:8000
6. Akses aplikasi di browser: http://localhost:8000

Contoh konfigurasi koneksi (config.php)
<?php
return [
  'db_host' => 'localhost',
  'db_name' => 'ppsi_db',
  'db_user' => 'root',
  'db_pass' => '',
  'charset' => 'utf8mb4'
];
?>

Contoh skrip SQL minimal
-- Buat database dan tabel dasar
CREATE DATABASE IF NOT EXISTS ppsi_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ppsi_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','staff') DEFAULT 'staff',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE applicants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(150) NOT NULL,
  nisn VARCHAR(20),
  tanggal_lahir DATE,
  alamat TEXT,
  sekolah_asal VARCHAR(150),
  nama_ortu VARCHAR(150),
  no_hp VARCHAR(30),
  status ENUM('pending','diterima','ditolak') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Keamanan & Praktik Baik
- Gunakan prepared statements (PDO) untuk mencegah SQL injection.
- Simpan password menggunakan password_hash() dan verifikasi dengan password_verify().
- Tambahkan validasi sisi-server dan CSRF token untuk form sensitif.
- Ubah kredensial default segera setelah instalasi.

Kontribusi
- Fork repo, buat branch fitur (mis. feat/nama-fitur), lalu ajukan pull request dengan deskripsi perubahan dan langkah pengujian.
- Sertakan skrip migrasi/SQL jika mengubah struktur database.

Lisensi
Lisensi belum ditentukan. Jika ingin memakai lisensi (mis. MIT), beri tahu saya agar saya tambahkan file LICENSE.

Kontak
Pemilik repo: @mahen4jk

---
