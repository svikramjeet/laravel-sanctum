## About 

Laravel sanctum with vue(for testing cors and working)

## Version

- Laravel : 7
- vue : 2

## How to set up on project
  
   Open CLI and run following commands to set up at local:
   
  - **Clone the project**
       >
        git clone https://github.com/svikramjeet/laravel-sanctum.git

  - **Go to project directory**
       >
        cd laravel-sanctum/laravel
        cp .env.example .env

  - **Run migrations 
       >
        composer install

# Post Installation steps 

 - **Run database migrations**
    >
        php artisan migrate

 - **Start server**
    >
        php artisan serve

# Steps for Vue

  - **Go to vue directory**
       >
        cd laravel-sanctum/client

 - **Server for vue**
    >
        npm run serve

## Sanctum Installation setps


* https://laravel.com/docs/7.x/sanctum#installation

## Changes in default Laravel


* **config/sanctum.php**
* **config/cors.php**
* **app/Http/Auth/Logincontroller.php**
