#!/bin/bash

echo "🛠️  Menyiapkan environment Laravel..."

# Salin .env jika belum ada
if [ ! -f .env ]; then
    cp .env.example .env
    echo "📄 .env dibuat dari .env.example"
else
    echo "📄 File .env sudah ada, dilewati."
fi

# Generate APP_KEY jika belum ada
if grep -q 'APP_KEY=$' .env || ! grep -q 'APP_KEY=' .env; then
    php artisan key:generate
    echo "🔑 APP_KEY berhasil dibuat."
else
    echo "🔑 APP_KEY sudah tersedia."
fi

# Buat database SQLite jika belum ada
if [ ! -f database/database.sqlite ]; then
    mkdir -p database
    touch database/database.sqlite
    echo "🗃️  File database.sqlite berhasil dibuat."
else
    echo "🗃️  File database.sqlite sudah ada."
fi

# Set permission
chmod -R 775 storage bootstrap/cache
echo "📂 Permission folder storage dan bootstrap/cache disesuaikan."

echo "✅ Setup selesai. Kamu bisa langsung jalankan Laravel."
