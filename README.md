### Instalacion

- Una vez clonado el repositorio correr el siguiente comando para copiar el archivo .env .
`cp .env.example .env`

- Inatalar dependencias de composer con
`composer install`

- En el archivo .env agregar las credenciales para nuestra base de datos .
`DB_DATABASE,
DB_USERNAME,
DB_PASSWORD`

- Correr migraciones y seeders con el comando:
`php artisan migrate:fresh --seed`

- Generar el key con el comando:
`php artisan key:generate`

- Levantar servidor:
`php artisan serve`
