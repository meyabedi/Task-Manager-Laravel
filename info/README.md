# Task Manager

A simple and efficient task management application built with **Laravel**, **PHP**, and **MySQL**.

## Features
- Add tasks to the list.
- Delete tasks from the list.
- Persistent storage using MySQL.
- Clean and responsive user interface with **Bootstrap**.

## Requirements
- **PHP** 8.2 or higher
- **Composer**
- **Laravel** 11.x
- **MySQL** or other supported database

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/meyabedi/Task-Manager-Laravel.git
    cd Task-Manager-Laravel
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Configure environment:
    - Copy `.env.example` to `.env`:
      ```bash
      cp .env.example .env
      ```
    - Set database credentials in `.env`:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=task_manager
      DB_USERNAME=root
      DB_PASSWORD=
      ```

4. Run migrations to create database tables:
    ```bash
    php artisan migrate
    ```

5. Start the development server:
    ```bash
    php artisan serve
    ```

6. Open the application in your browser:
    ```
    http://localhost:8000
    ```


