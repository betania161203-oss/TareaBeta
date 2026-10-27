# Tienda

## Levantar el proyecto
```bash
cp .env.example .env
docker compose up -d --build
docker compose exec app composer install
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed
```

Abrir http://localhost:8080/productos

phpMyAdmin: http://localhost:8081 (usuario `root`, clave `secreto`)

## ¿Por qué `PMA_HOST` es `db` y no `localhost`?

Cada contenedor es como una computadora aparte. Dentro del contenedor de phpMyAdmin,
`localhost` es el propio contenedor de phpMyAdmin, donde no hay ningún MySQL.
Docker Compose crea una red interna donde cada servicio se alcanza por su nombre, así que
el servidor MySQL se llama `db`, igual que el servicio en `compose.yaml`.
Por la misma razón Laravel usa `DB_HOST=db`.
