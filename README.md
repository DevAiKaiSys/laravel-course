# Laravel Docker Environment

This repository contains a Dockerized Laravel application, providing a consistent and easy-to-manage development environment.

## Table of Contents

- [Environment](#environment)
- [Getting Started](#getting-started)
- [Running the Project](#running-the-project)
- [Database](#database)
- [Running Tests](#running-tests)
- [Dependencies](#dependencies)
- [References](#references)

## Environment

-   **PHP:** 8.4.x
-   **Laravel:** 12.x.x
-   **Docker**
-   **MySQL:** 8.0

## Getting Started

1.  **Clone the repository:**

    ```bash
    git clone <repository-url>
    cd laravel-docker
    ```

2.  **Set up the environment file:**

    ```bash
    cp firstwebsite/.env.example firstwebsite/.env
    ```

3.  **Update the `.env` file in the `firstwebsite` directory with your database credentials.**

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laravel
    DB_PASSWORD=password
    ```

## Running the Project

To run the project using Docker, follow these steps:

1.  **Navigate to the `docker` directory:**

    ```bash
    cd docker
    ```

2.  **Build and start the Docker containers:**

    ```bash
    docker-compose up --build
    ```

3.  **Access the application in your browser at [http://localhost:8000](http://localhost:8000).**

## Database

The project uses a MySQL database running in a Docker container.

-   **To run database migrations:**

    ```bash
    docker-compose exec app php artisan migrate
    or
    docker exec -it laravel-app bash
    php artisan migrate
    ```

-   **To seed the database:**

    ```bash
    docker-compose exec app php artisan db:seed
    ```

## Running Tests

To run the application tests, use the following command:

```bash
docker-compose exec app php artisan test
```

## Dependencies

Project dependencies are managed by Composer (PHP) and NPM (JavaScript).

-   **To install Composer dependencies:**

    ```bash
    docker-compose exec app composer install
    ```

-   **To install NPM dependencies:**

    ```bash
    docker-compose exec app npm install
    ```

## References

-   [Laravel 12 Full Course – Complete Tutorial](https://www.youtube.com/playlist?list=PLWiQT7FWaG1jG8RQq1dFiSE7O-g9HQuYE)
