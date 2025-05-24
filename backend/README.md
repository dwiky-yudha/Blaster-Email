# 🧰 SYARAT YANG HARUS DIPENUHI
## ✅ Komputer tujuan harus punya:

1. PHP (minimal versi 7.4 atau sesuai composer.json)

2. Composer (PHP package manager)

3. Node.js + npm (opsional, jika pakai frontend asset build)

4. Laravel dependencies (bisa di-install via composer install)

5. Web server (opsional): Laravel sudah bisa dijalankan via php artisan serve, tapi bisa juga pakai:

6. XAMPP, Laragon, atau nginx

# 🔀 CARA MENJALANKAN DI KOMPUTER LAIN
## ✅ Langkah 1: Salin Proyek Laravel
Pindahkan seluruh folder proyek Laravel ke komputer lain. Bisa pakai:

1. Flashdisk
2. ZIP file
3. Git clone (jika di-host)

## ✅ Langkah 2: Install Dependency
Buka terminal/command prompt di folder proyek, lalu jalankan:

<pre>composer install</pre>
Ini akan menginstal semua library Laravel yang dibutuhkan berdasarkan composer.lock.

## ✅ Langkah 3: Buat file .env
Jika belum ada file .env, buat dari contoh:

<pre>cp .env.example .env</pre>
Kemudian sesuaikan bagian ini jika tidak pakai database:

<pre>
APP_NAME=BlasterEmail
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

# Kosongkan database jika tidak digunakan
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
</pre>
## ✅ Langkah 4: Generate App Key
<pre>php artisan key:generate</pre>

## ✅ Langkah 5: Jalankan Server Laravel

<pre>php artisan serve</pre>