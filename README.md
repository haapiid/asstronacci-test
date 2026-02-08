# Membership Information System - Technical Test

<p align="center">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

Sistem Membership sederhana ini dibangun untuk memenuhi kriteria tes teknis pemilihan developer. Aplikasi ini mengelola hak akses konten (artikel dan video) berdasarkan tiga tingkatan membership yang berbeda secara dinamis.

## 🚀 Fitur Utama
- **Multi-Tier Membership**: Pembatasan akses konten otomatis berdasarkan tipe akun.
  - **Tipe A**: Akses terbatas ke 3 Artikel & 3 Video (Default pendaftar baru).
  - **Tipe B**: Akses menengah ke 10 Artikel & 10 Video.
  - **Tipe C**: Akses penuh ke seluruh konten artikel dan video.
- **OAuth Social Login**: Integrasi login menggunakan pihak ketiga (**Google** & **Facebook**) menggunakan Laravel Socialite.
- **Manual Authentication**: Sistem registrasi dan login manual yang aman dengan redirect khusus setelah registrasi.
- **Responsive Dashboard**: Antarmuka modern dan bersih menggunakan **Tailwind CSS 3** dan **Plus Jakarta Sans** font.

## 🛠️ Tech Stack
- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Tailwind CSS 3, Blade Templating, Alpine.js
- **Database**: MySQL
- **Library**: Laravel Socialite (OAuth 2.0)

## 📖 Instruksi Instalasi

Pastikan Anda memiliki PHP 8.2+ dan Composer terinstal di sistem Anda.

1. **Clone Repository**
   ```bash
   git clone [https://github.com/haapiid/astronacci-test.git](https://github.com/haapiid/astronacci-test.git)
   cd astronacci-test
2. **Install Dependencies**
    ```bash
    composer install
    npm install && npm run build
3. **Konfigurasi Enviroment**
    - Salin .env.example menjadi .env
    - Sesuaikan DB_DATABASE, DB_USERNAME, dan DB_PASSWORD
    - Masukkan Client ID dan Secret untuk Google & Facebook Socialite di bagian bawah file .env.
4. **Setup Database & Seeding**
    jalankan migrasi untuk membuat struktur tabel dan membuat data awal artikel/video
    ```bash
    php artisan migrate:fresh --seed
5. **Jalankan Aplikasi**
    ```bash
    php artisan serve
**Dokumentasi Video**
Demonstrasi jalannya masing-masing fungsi (Register, Login, Social Login, dan Perubahan Tipe Membership) dapat dilihat melalui tautan berikut:
https://drive.google.com/file/d/1CNgjYCw3iKi1pKqOUI6WxNWW412Bshm0/view?usp=sharing
**Catatan Teknis Facebook Login**
Implementasi kode untuk Facebook Login sudah tersedia sepenuhnya pada SocialiteController.php. Namun, karena kebijakan verifikasi akun developer Meta yang memerlukan waktu, demonstrasi login sosial difokuskan pada Google Login yang sudah berjalan 100%.
