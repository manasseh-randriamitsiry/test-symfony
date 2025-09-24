@echo off
echo 🚀 SMUR Pontoise Docker Setup
echo.

REM Check if containers are running
docker-compose ps | findstr "Up" >nul
if errorlevel 1 (
    echo Starting containers...
    docker-compose up -d
    timeout /t 10 /nobreak >nul
)

REM Wait for database to be ready with timeout
echo Waiting for database...
set /a count=0
:wait_db
set /a count+=1
if %count% GTR 30 (
    echo Database timeout! Check if containers are running: docker-compose ps
    goto end
)

docker-compose exec -T database mysqladmin ping -h"localhost" --silent >nul 2>&1
if errorlevel 1 (
    echo Attempt %count%/30 - Database not ready...
    timeout /t 3 /nobreak >nul
    goto wait_db
)

echo Database ready!
echo.
echo Running setup commands...

REM Run setup commands with error handling
docker-compose exec app php bin/console cache:clear --env=prod --no-interaction
docker-compose exec app php bin/console doctrine:migrations:migrate --no-interaction
docker-compose exec app php bin/console doctrine:fixtures:load --no-interaction
docker-compose exec app php bin/console app:create-user admin@smur-pontoise.fr admin123 --admin
docker-compose exec app chown -R www-data:www-data /var/www/html/var
docker-compose exec app chmod -R 775 /var/www/html/var

echo.
echo 🎉 SMUR Pontoise is ready!
echo.
echo Access URLs:
echo   Website: http://localhost:8080
echo   phpMyAdmin: http://localhost:8081
echo   Admin: admin@smur-pontoise.fr / admin123

:end
echo.
echo Press any key to exit...
pause >nul