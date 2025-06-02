@echo off
echo 🚀 Starting Laravel and Vite...

REM Start Laravel backend in a new window
start "Laravel Server" cmd /k "php artisan serve"

REM Add a small delay before starting Vite
timeout /t 2 >nul

REM Start Vite frontend in the current window
echo 🎨 Starting Vite frontend...
npm run dev
