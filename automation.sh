#!/bin/bash

echo "🚀 Starting Laravel and Vite..."

# Start Laravel backend
echo "🔧 Starting Laravel backend on http://127.0.0.1:8000"
php artisan serve &

# Wait a moment before starting Vite
sleep 2

# Start Vite frontend
echo "🎨 Starting Vite frontend on http://localhost:5173"
npm run dev
