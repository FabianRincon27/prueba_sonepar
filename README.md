#### Requisitos

- PHP >= 8.1
- Composer

#### Instalación

1. Clona este repositorio en tu máquina local:
```
    $ git clone https://github.com/FabianRincon27/prueba_sonepar.git
```

2. Accede al directorio del proyecto:
```
    $ cd prueba_sonepar
```

3. Instala las dependencias del proyecto utilizando Composer:
```
    $ composer update
```

4. Crea un archivo .env basado en el archivo .env.example y configura la conexión a la base de datos.
```
    $ cp .env.example .env
```

4. Crea la key del proyecto
```
    $ php artisan key:generate
```

6. Ejecuta las migraciones para crear las tablas de la base de datos

```
    $ php artisan migrate
```
