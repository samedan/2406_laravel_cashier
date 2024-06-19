## Source

> https://www.youtube.com/watch?v=nf3Z_NXtTk4&list=PLDc9bt_00KcJaSZXhpCqT6J05HP2qt5JQ&index=3

> https://medium.com/fabcoding/laravel-7-create-a-subscription-system-using-cashier-stripe-77cdf5c8ea5d

## Install Laravel

> composer create-project laravel/laravel

# DBB

> php artisan migrate:fresh

# Breeze

> https://laravel.com/docs/10.x/starter-kits#laravel-breeze
> composer require laravel/breeze --dev

> php artisan breeze:install

# Cashier

> composer require laravel/cashier
> php artisan vendor:publish --tag="cashier-migrations"
> php artisan migrate
> User.php model add "use Billable;"

# Stripe

> composer require stripe/stripe-php
