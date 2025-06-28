#!/bin/bash

echo "🚀 Menjalankan setup Laravel di Railway..."

# Generate APP_KEY jika belum ada
if [ -z "$(grep ^APP_KEY= .env | cut -d '=' -f2)" ]; then
    php artisan key:generate
    echo "🔑 APP_KEY berhasil dibuat."
fi

# Jalankan cache dan migrasi
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Jalankan php-fpm & nginx
echo "✅ Memulai PHP-FPM & Nginx..."
php-fpm -D               # ✅ FIX utama: jalankan PHP-FPM
nginx -g "daemon off;"   # Tetap jalankan nginx seperti biasa
