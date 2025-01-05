# Task Manager

A simple task management application built with Laravel, PHP, and MySQL.

## Features
- Add tasks to the list.
- Delete tasks from the list.
- Persistent storage using MySQL.
- Clean and responsive user interface with Bootstrap.

## Requirements
- PHP 8.2 or higher
- Composer
- Laravel 11.x
- MySQL or other supported database

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repository-name.git
   cd your-repository-name
Install dependencies:

composer install

Configure environment:

    Copy .env.example to .env:

cp .env.example .env

Set database credentials in .env:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=task_manager
    DB_USERNAME=root
    DB_PASSWORD=

Run migrations to create database tables:

php artisan migrate

Start the development server:

php artisan serve

Open the application in your browser:

http://localhost:8000