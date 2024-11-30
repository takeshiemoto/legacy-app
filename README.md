# legacy app

## Setup

```shell
docker compose up -d
```

```shell
docker compose exec app bash

# in app container
composer install
php artisan migrate
```
## Testing

```shell
docker compose exec app bash
php artisan test
```
