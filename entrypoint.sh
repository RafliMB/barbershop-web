#!/bin/bash

echo "🚀 Menjalankan setup Laravel di Railway..."

# Pastikan database.sqlite ada
if [ ! -f /var/www/database/database.sqlite ]; then
    touch /var/www/database/database.sqlite
    echo "📦 database.sqlite berhasil dibuat."
fi

# Clear & cache
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan migrasi
php artisan migrate --force

# Start php-fpm dan nginx
echo "✅ Laravel siap jalan..."
service php8.2-fpm start
nginx -g "daemon off;"
