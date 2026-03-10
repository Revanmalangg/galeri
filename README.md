# <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Camera%20with%20Flash.png" alt="Camera" width="40" /> Galeri Foto Produk - UKK 2026

<p align="left">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
</p>

> **Platform Manajemen Katalog Digital** yang dirancang dengan prinsip *Minimalist UI* untuk performa maksimal. Dikembangkan khusus untuk Uji Kompetensi Keahlian (UKK) SMKN 11 Malang.

---

## 🚀 Fitur Unggulan
<table border="0">

 <tr>
    <td><img width="480" height="490" alt="Screenshot 2026-03-10 074207" src="https://github.com/user-attachments/assets/0ca55280-6aed-45f2-a99c-a64be3b8081a" />
 <b>CRUD Expert</b></td>
    <td>Struktur Database</td>
 </tr>
</table>

---

## 🏛️ Arsitektur Database
Sistem ini menggunakan relasi database yang dinormalisasi untuk menjaga integritas data.



### 📊 Data Dictionary
| Tabel | Primary Key | Foreign Key | Fungsi |
| :--- | :--- | :--- | :--- |
| `users` | `id` | - | Autentikasi & Role |
| `photos` | `id` | `user_id` | Katalog Produk |
| `comments` | `id` | `photo_id`, `user_id` | Interaksi User |

---

## 🖼️ Dokumentasi Visual (Output)

### 🔐 Autentikasi
Pintu masuk sistem dengan validasi keamanan tingkat tinggi.
<p align="center">
  <img src="https://github.com/user-attachments/assets/46c90775-83fc-4eea-b515-cb0cff771b66" width="800" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);" />
</p>

### 📱 Antarmuka Utama (User & Admin)
Perbandingan layout dashboard yang bersih dan responsif.
<p align="center">
  <img src="https://github.com/user-attachments/assets/b62862f5-fb75-4c1d-8489-cd891b2a085d" width="400" />
  <img src="https://github.com/user-attachments/assets/6501d916-915a-4f2d-8826-f1b74ce2477d" width="400" />
</p>

### 🛠️ Panel Manajemen (Admin Only)
Kontrol penuh bagi administrator untuk mengelola konten galeri.
<p align="center">
  <img src="https://github.com/user-attachments/assets/faec19dc-c146-4b7c-a8b5-d431e7b93169" width="260" />
  <img src="https://github.com/user-attachments/assets/3bf271cd-db93-4eea-9942-603044b8f0f8" width="260" />
  <img src="https://github.com/user-attachments/assets/0a5a5df7-354b-4bd7-9f03-dfad669ef364" width="260" />
</p>

---

## ⚙️ Instalasi Cepat
Cukup 4 langkah untuk menjalankan aplikasi di komputer lokal:

```bash
# 1. Clone Repositori
git clone [https://github.com/Revanmalangg/galeri.git](https://github.com/Revanmalangg/galeri.git) && cd galeri

# 2. Persiapan Environment
composer install && cp .env.example .env && php artisan key:generate

# 3. Migrasi Database
php artisan migrate && php artisan storage:link

# 4. Jalankan Aplikasi
php artisan serve
