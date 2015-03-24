## Proyecto Cilindros

Aplicación desarrollada paso a paso en video, puedes encontrar los videos en [Youtube](https://www.youtube.com/user/danielromeroauk) y en [http://laravel.com.mx](http://laravel.com.mx)

Para configurar varios hosts virtuales, puedes usar un código similar al siguiente al final del archivo de configuración de Apache, si estás usando MAMP, se encuentra en <code>C:/MAMP/conf/apache/httpd.conf</code>:

```
## MIS HOSTS VIRTUALES #

NameVirtualHost *:80

# Proyecto llamado cilindros
<VirtualHost *:80>
    DocumentRoot "C:\Proyectos\cilindros\public"
    ServerName cilindros.app

    <Directory "C:\Proyectos\cilindros\public">
        AllowOverride All
    </Directory>
</VirtualHost>

# Otro proyecto llamado cartera
<VirtualHost *:80>
    DocumentRoot "C:\Proyectos\cartera\public"
    ServerName cartera.app

    <Directory "C:\Proyectos\cartera\public">
        AllowOverride All
    </Directory>
</VirtualHost>

## FIN DE MIS HOST VIRTUALES #
```

Luego, configuras el archivo hosts, si estás usando Windows, está ubicado en <code>C:/Windows/System32/drivers/etc/hosts</code>, recuerda ejecutar sublime text 2 (o el editor que uses) como administrador o no te dejará guardar los cambios:

```
## MIS HOSTNAME #

127.0.0.1 cilindros.app
127.0.0.1 cartera.app

## FIN DE MIS HOSTNAME #
```

Por último, reinicias apache (detener el servidor y volver a iniciarlo).

Listo, ahora ya puedes acceder desde el navegador tanto a http://cilindros.app como a http://cartera.app