# README.txt

## Deskripsi

Proyek ini berisi formulir pendaftaran mahasiswa berbasis web menggunakan PHP dan MySQL. Aplikasi ini memungkinkan pengguna untuk mengisi formulir pendaftaran yang terdiri dari NIM, nama, kelas, jenis kelamin, email, dan pesan. Data yang dimasukkan akan disimpan dalam database MySQL.

## Struktur File

1. **index.php**: File ini berisi formulir pendaftaran mahasiswa dengan antarmuka pengguna. Pengguna dapat mengisi data pendaftaran dan mengirimkannya melalui formulir ini.

2. **proses.php**: File ini bertanggung jawab untuk memproses data yang dikirim dari `index.php`. Ini melakukan validasi, menyimpan data ke database, dan memberikan umpan balik kepada pengguna tentang hasil operasi.

## Petunjuk Penggunaan

### 1. Persiapan Database

Sebelum menjalankan aplikasi, Anda perlu membuat database dan tabel di MySQL. Gunakan skrip SQL berikut untuk membuat database dan tabel:

```sql
CREATE DATABASE formulir;

USE formulir;

CREATE TABLE pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(10) NOT NULL,
    jenis_kelamin ENUM('laki-laki', 'perempuan') NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT
);

2. Konfigurasi Koneksi Database
Pastikan Anda mengatur kredensial database di file proses.php. Ubah parameter mysqli_connect sesuai dengan pengaturan server database Anda:
$db = mysqli_connect('localhost', 'root', 'root', 'formulir');

localhost: Alamat server database
root: Nama pengguna database
root: Kata sandi database
formulir: Nama database

3. Menjalankan Aplikasi
Letakkan File di Server: Upload index.php dan proses.php ke server web Anda (misalnya, menggunakan XAMPP atau LAMP).

Akses Formulir: Buka browser dan akses index.php melalui URL server web Anda, seperti http://localhost/index.php.

Isi Formulir: Isi formulir dengan data pendaftaran yang sesuai.

Kirim Data: Klik tombol "Kirim" untuk mengirim data ke server. Data akan diproses oleh proses.php dan disimpan dalam database.

4. Memeriksa Hasil
Sukses: Jika data berhasil ditambahkan, Anda akan mendapatkan pesan sukses dan diarahkan kembali ke formulir.
Gagal: Jika terjadi kesalahan, Anda akan mendapatkan pesan kesalahan dan diarahkan kembali ke formulir.
Catatan
Pastikan server web Anda (seperti Apache) dan server database (seperti MySQL) berjalan dengan baik.
Untuk keamanan tambahan, pertimbangkan untuk menggunakan SSL jika aplikasi ini akan digunakan dalam lingkungan produksi.
Kontak
Jika Anda memiliki pertanyaan atau masalah, silakan hubungi [Nama Anda] di [Alamat Email Anda].

### Cara Membuat File `README.txt`

1. **Buka Editor Teks**: Gunakan editor teks seperti Notepad (Windows), TextEdit (macOS), atau editor kode seperti VSCode atau Sublime Text.
   
2. **Salin dan Tempel**: Salin teks di atas dan tempelkan ke dalam editor teks.

3. **Simpan File**: Simpan file dengan nama `README.txt`.

Jika Anda memerlukan penyesuaian lebih lanjut atau informasi tambahan, beri tahu saya!
