# legacy app

## Setup

```shell
docker compose up -d
```

```shell
docker compose exec app bash

# in app container
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
## Testing

```shell
docker compose exec app bash
php artisan test
```
