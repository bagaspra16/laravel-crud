<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Simple Laravel CRUD

Simple CRUD method with authentication login & regist

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP >= 7.4
- Composer
- Node.js (for Laravel Mix)
- MySQL or any other database of your choice
- XAMPP

### Installing

1. Clone the repository:

   ```bash
   git clone https://github.com/bagaspra16/laravel-crud.git

2. Navigate into the project directory:

    ```bash
    cd project-name

3. Install Composer dependencies:

   ```bash
   composer install
   
4. Copy .env.example to .env and configure your environment variables, especially the database connection settings:

   ```bash
   cp .env.example .env

5. Generate the application key:

   ```bash
   php artisan key:generate

6. Run the database migrations (Ensure your database connection is configured in .env):

   ```bash
   php artisan migrate

7. Install npm dependencies and compile assets:

   ```bash
   npm install && npm run dev

### Running Project

```bash
php artisan serve
```
### Login Information!

Find the email & password login in seeders folder.
