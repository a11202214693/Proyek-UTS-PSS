<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Step by step mengerjakan project ini

install Laravel 11
setup database
create migration
create model for the table
create seeder
create api controller
create api endpoint
setup docker-compose.yml dan dockerfile dengan image MySQL 8.0


# Items
### ENDPOINT
http://localhost:8000/api/suppliers
### POST JSON PAYLOAD
{
  "name": "Headphone Bluetooth",
  "description": "Headphone nirkabel bass boost",
  "price": 325000,
  "quantity": 15,
  "category_id": 1,
  "supplier_id": 1,
  "created_by": 1
}


# Categories
### ENDPOINT
http://localhost:8000/api/categories
### JSON PAYLOAD
{
  "name": "PHONE",
  "description": "This is a new phone.",
  "created_by": 1
}


# Suppliers
### ENDPOINT
http://localhost:8000/api/suppliers
### POST PAYLOAD
{
  "name": "New Supplier",
  "contact_info": "123-456-7890",
  "created_by": 1
}

# Stock Summary
### ENDPOINT
http://localhost:8000/api/stock-summary


# Low Stock
### ENDPOINT
http://localhost:8000/api/low-stock/{stock}
### Example
http://localhost:8000/api/low-stock/20


# How to Clone
- git clone
- php artisan key:generate
- setup env ganti driver dengan MySQL dan nama database dengan nama yang diiginkan
- Contoh : 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uts-pss
DB_USERNAME=root
DB_PASSWORD=
DB_CHARSET=utf8mb4
DB_COLLATION=utf8mb4_unicode_ci
- buat database dengan nama yang sama seperti di env
- php artisan migrate
- php artisan db:seed
- php artisan serve
- gunakan endpoint api
