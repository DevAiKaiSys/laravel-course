# Laravel Docker Environment

## Environment

-   **PHP:** 8.4.x
-   **Laravel:** 12.x.x
-   **Docker**
-   **MySQL:** 8.0

## Getting Started

```bash
git clone <repository-url>
cd laravel-docker
```

```bash
cp firstwebsite/.env.example firstwebsite/.env
```

```dotenv
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=password
```

## Running the Project

```bash
cd docker
```

```bash
docker-compose up --build
```

Access the application at [http://localhost:8000](http://localhost:8000).

## Database

-   **Run database migrations:**

    ```bash
    docker-compose exec app php artisan migrate
    # or
    docker exec -it laravel-app bash
    php artisan migrate
    ```

-   **Rollback the last batch of migrations:**

    ```bash
    docker-compose exec app php artisan migrate:rollback
    # or
    docker-compose exec app php artisan migrate:rollback --step=2
    ```

-   **Seed the database:**

    ```bash
    docker-compose exec app php artisan db:seed
    # or
    docker-compose exec app php artisan db:seed --class=CountriesSeeder
    ```

-   **Create a new model:**

    ```bash
    docker-compose exec app php artisan make:model ModelName
    ```

    -   `-m`: Creates a migration file for the model.
    -   `-c`: Creates a controller for the model.
    -   `-s`: Creates a seeder for the model.

### Database Migrations

-   **Creating a new table:**

    ```bash
    php artisan make:migration create_flights_table
    ```

-   **Adding a column to an existing table:**

    ```bash
    php artisan make:migration add_price_to_flights_table
    ```

-   **Running migrations:**

    ```bash
    php artisan migrate
    ```

## Running Tests

```bash
docker-compose exec app php artisan test
```

## Dependencies

-   **Install Composer dependencies:**

    ```bash
    docker-compose exec app composer install
    ```

-   **Install NPM dependencies:**

    ```bash
    docker-compose exec app npm install
    ```

## References

-   [Laravel 12 Full Course – Complete Tutorial](https://www.youtube.com/playlist?list=PLWiQT7FWaG1jG8RQq1dFiSE7O-g9HQuYE)
-   [Database: Query Builder](https://laravel.com/docs/12.x/queries#main-content)