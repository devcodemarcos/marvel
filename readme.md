## 1.-

- Clonar el proyecto marvel
- $ cd path/to/clone/project/marvel
- $ cp .env.example .env
- $ php artisan key:generate
- $ composer install

## 2.-

Agregar estas dos constantes con sus respectivos valores al final del archivo .env

- MARVEL_PUBLIC_KEY=your_public_key
- MARVEL_PRIVATE_KEY=your_private_key

## 3.-

Configura tus credenciales de la base de datos (mysql) en el archivo .env

- $ php artisan migrate
- Importa los datos a la DB que se acaba de generar