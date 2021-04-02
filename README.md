# Import contacts

Web application based on Laravel. Koombea's technical assestment


## Instrucciones

### Setup del proyecto

Por favor descargue o clone este repositorio, una vez lo haya hecho, al ser un proyecto laravel, por favor ejecute
`composer update`

Para ejecutar las migraciones y seeder por favor ejecute
`php artisan:migrate --seed`

Para el procesamiento en batch del archivo csv se utiliza un Job que se ejecuta de manera asincrona 
(se debe configurar en el .env el driver a database u otro), para ejecutar
la cola por favor realizar `php artisan queue:work`

### Usuario
Usuario de prueba mario@test.com y contraseña test2021, tambien puede crear uno mediante el formulario de registro

### Archivo de pruebas
En la raíz del proyecto se puede encontrar el archivo `test2.csv` con data de ejemplo para realizar la carga del archivo
