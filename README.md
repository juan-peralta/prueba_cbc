

1. Debe instalar XAMPP como servidor web local para levantar la app
2. Descargue el proyecto y descomprimalo en la carpeta "htdocs" de XAMPP
3. En http://localhost/phpmyadmin/ cree la base de datos "cbc" e importe el script "cbc.sql" el cual contiene las tablas y proc. almacenados
3. En la carpeta del proyecto, debe levantar el servidor con el comando "php artisan serve" (debe tener composer instalado en el pc) 
4. Con los accesos a POSTMAN puede probar la app

![image](https://user-images.githubusercontent.com/49913741/229983091-92b52cce-f640-4115-a05d-ac11c2e4c36b.png)



5. configuracion .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cbc
DB_USERNAME=root
DB_PASSWORD=


DB_USERNAME=tu usuario bd
DB_PASSWORD=tu password 



