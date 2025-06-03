@echo off
echo
 Starting Vite...

:: Start Laravel backend in a new window


:: Add a small delay before starting Vite
timeout /t 1 >nul

:: Start Vite frontend in the current window
echo  Starting Vite frontend...
npm run dev


:: geschreven door onze handige Lucas
