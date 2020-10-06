https://laravel.com/docs/7.x/sanctum#issuing-mobile-api-tokens
▶ php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
▶ php artisan migrate:refresh --seed

// Create Token
http://127.0.0.1:8000/api/sanctum/token