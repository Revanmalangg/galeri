# 📸 Galeri Foto Produk - UKK 2026
[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
[![School](https://img.shields.io/badge/SMKN_11-Malang-orange.svg)](https://smkn11malang.sch.id)

Aplikasi Galeri Foto Produk adalah platform berbasis web untuk manajemen katalog produk digital. Dibangun dengan fokus pada kecepatan akses dan antarmuka **Minimalis**, aplikasi ini dirancang untuk memenuhi standar Uji Kompetensi Keahlian (UKK) Rekayasa Perangkat Lunak.

---

## 🎯 Fitur Sistem
Aplikasi ini menerapkan sistem **Role-Based Access Control (RBAC)**:

### 👤 Pengguna (User)
- [x] **Registrasi & Login**: Keamanan akun dengan enkripsi Bcrypt.
- [x] **Exploration**: Menjelajahi galeri produk terbaru.
- [x] **Interaction**: Memberikan komentar pada setiap foto produk.
- [x] **Self-Management**: Menghapus komentar milik sendiri.

### 🛡️ Administrator (Admin)
- [x] **Product Management**: Menambah, mengedit, dan menghapus foto produk.
- [x] **Moderation**: Menghapus komentar yang tidak pantas dari pengguna manapun.
- [x] **Storage Control**: Otomatis membersihkan file gambar lama saat data dihapus/diedit.

---

## 🏛️ Arsitektur & Database

### Entity Relationship Diagram (ERD)
Sistem ini menggunakan relasi database *One-to-Many* yang efisien.



### Struktur Tabel (Data Dictionary)

| Nama Tabel | Deskripsi | Kolom Utama | Tipe Data |
| :--- | :--- | :--- | :--- |
| `users` | Akun pengguna | `id`, `name`, `email`, `password`, `role` | PK, String, String, String, Enum |
| `photos` | Katalog produk | `id`, `judul`, `image_path`, `deskripsi`, `user_id` | PK, String, String, Text, FK |
| `comments` | Diskusi produk | `id`, `content`, `photo_id`, `user_id` | PK, Text, FK, FK |



---

## 🖼️ Dokumentasi Antarmuka (Output)

> **Catatan:** Tampilan menggunakan tema **Minimalist Design** untuk meningkatkan User Experience (UX).

| Halaman | Deskripsi Visual |
| :--- | :--- |
| **Login & Register** | Form bersih tanpa card/shadow untuk kecepatan load. |
| **Dashboard** | Grid sistem responsif (4 kolom desktop, 2 kolom mobile). |
| **Detail Foto** | Preview gambar resolusi tinggi dengan panel komentar di sisi kanan. |
| **Admin Panel** | Formulir input dengan validasi tipe file (JPG, PNG, JPEG). |



---

## 🛠️ Stack Teknologi
- **Backend:** PHP 8.2 & Laravel 11.x
- **Frontend:** Bootstrap 5 (Custom Spacing)
- **Database:** MySQL / MariaDB
- **Tools:** Git, Composer, Artisan Tinker

---

## ⚙️ Petunjuk Instalasi

1. **Clone & Install**
   ```bash
   git clone [https://github.com/Revanmalangg/galeri.git](https://github.com/Revanmalangg/galeri.git)
   cd galeri
   composer install
