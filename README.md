<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## Proyecto 4040

  Ejercicio Laravel

Una vista que tenga un listado con los siguientes datos:
~~~
CREATE TABLE `clientes` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `fecha_nac` date NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
~~~
Y que se visualicen todos los datos.


## Base de datos

Tipo de base de datos mysql con los datos de conexión siguientes, configurar archiv env para la conexión
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 //host de base de datos
DB_PORT=3308 // modifica el puesto origen a 3306
DB_DATABASE=practica4040 // nombre de la base de datos creado
DB_USERNAME=root // datos de base de datos de origen
DB_PASSWORD=g, and JavaScript. Boost your skills by digging into our comprehensive video library.
~~~
## Controlador Clients

Se creo el controlador ClietsController donde se utiliza el metodo index y para desplegar los clientes del modelo de datos clients

## Migracion y modelos

Se creo la migración con los datos descritos en el apartado proyecto4040

## Ruta Principal

http://localhost:8000/clientes

http://localhost:8000/clientes/create

## Imagenes 

<p align="center"><img src="https://dospuntas.com.mx/4040/1.png" width="600"></p>
<p align="center"><img src="https://dospuntas.com.mx/4040/2.png" width="600"></p>
<p align="center"><img src="https://dospuntas.com.mx/4040/3.png" width="600"></p>
<p align="center"><img src="https://dospuntas.com.mx/4040/4.png" width="600"></p>
<p align="center"><img src="https://dospuntas.com.mx/4040/5.png" width="600"></p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
