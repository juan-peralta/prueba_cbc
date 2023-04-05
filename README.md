

1. Debe instalar XAMPP como servidor web local para levantar la app
2. Descargue el proyecto y descomprimalo en la carpeta "htdocs" de XAMPP
3. En http://localhost/phpmyadmin/ cree la base de datos "cbc" e importe el script "cbc.sql" el cual contiene las tablas y proc. almacenados
3. En la carpeta del proyecto, debe levantar el servidor con el comando "php artisan serve" (debe tener composer instalado en el pc) 
4. Con los accesos a POSTMAN puede probar la app

![image](https://user-images.githubusercontent.com/49913741/229983091-92b52cce-f640-4115-a05d-ac11c2e4c36b.png)



5. configuracion .env

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:bpxXp3UCBPmzmUQbPyj/KfBWzHgl3h1gV4HElNnWdac=
APP_DEBUG=true
APP_URL=http://backendigle.test

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cbc
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


