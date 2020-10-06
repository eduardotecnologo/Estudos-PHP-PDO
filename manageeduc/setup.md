## Projeto Gerenciamento Educacionl - Laravel - VueJS
## Laravel IDE Helper Generator
# https://github.com/barryvdh/laravel-ide-helper#installation
▶ composer require --dev barryvdh/laravel-ide-helper
▶ php artisan ide-helper:generate

## Create Auth
# For Laravel >=6

composer require laravel/ui
php artisan ui vue --auth
php artisan migrate

// Create User Seeder
php artisan make:seeder UserSeeder

// Correção Helpers
▶ composer require laravel/helpers

// Correção laravel-call-to-undefined-function-database-seeders-factory
▶ composer require laravel/legacy-factories