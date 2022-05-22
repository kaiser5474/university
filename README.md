<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tareas del Proyecto
- [x] Crear 2 Bases de Datos (university y university-rest)
- [x] Crear Migration de Estudiantes
- [x] Crear Migration de Profesores
- [x] Crear Login
- [x] Poder buscar por EPN en Estudiantes y que se carguen los valores en el formulario para crear el nuevo Estudiante
- [x] Poder buscar por EPN en Profesores y que se carguen los valores en el formulario para crear el nuevo Profesor
- [x] Crear Migration de Roles 
- [x] Poder loguearse por username y por correo
- [x] LOS CAMPOS NOMBRES, Y CEDULA NO DEBEN SER EDITABLES
- [x] Al crear un Estudiantes insertar en la tabla Users y poner el rol de Estudiante
- [x] Al crear un Profesor insertar en la tabla Profesor y poner el rol de Tutor
- [x] Hacer cambios en el Migration de Users (poner foreing key que apunte a Estudiantes y Profesores)
- [x] Solo permitir ir a la vista de Buscar por EPN si esta logueado como admin
- [ ] Mostrar texto de los errores y las validaciones no como un texto que asusta al cliente
- [x] Poder autenticarse por correo y por EPN
- [x] Poner radio button a la hora de buscar por EPN
- [x] Poner todos los campos como no editables a la hora de crear Estudiantes y Profesores.
- [x] Crear un check q al estar marcado buscamos un nuevo Estudiante y el desmarcarlo buscamos por Profesor
- [x] Revisar la relacion de Estudiante y Profesores con User la foreign key debe estar en la Tabla de Estudiantes y Profesores no dos columnas en la tabla de Users.
- [x] Una vez creado el usuario nuevo, se debe enviar por correo electrónico al estudiante o 
profesor las credenciales de acceso a la aplicación.
- [ ] Revisar la validacion de subir documentos en PDF e imagenes, solo esta la validacion del lado del cliente, falta desde el lado del servidor

## Dudas
- [ ] ¿En Informacion Adicional se puede añadir mas de una actividad?
- [ ] LOS CAMPOS NOMBRES, Y CEDULA NO DEBEN SER EDITABLES. PERO LOS CAMPOS DE CORREO, CELULAR Y TELÉFONO A PESAR DE QUE YA FUERON LLENADOS SE DEDE PERMITIR SU EDICIÓN. Se debe dejar editar en la Base de Datos de university
- [ ] Una vez llenado el formulario por parte de estudiante este enviará el formulario. EL 
FORMULARIO Y LOS DATOS LLENADOS DEBEN SER ENVIADOS AL SUBDECANO. ¿Los documentos subidos al servidor local se deben enviar?

 
## Primeros pasos
1. Run git clone https://github.com/kaiser5474/university.git

2. Run composer install

3. Run cp .env.example .env or copy .env.example .env

4. Run php artisan key:generate

5. Run php artisan migrate

6. Run php artisan db:seed

7. Run php artisan serve

8. Go to link localhost:8000 OR 127.0.0.1:8000

## Acerca del proyecto
- Se agrego el Seeder de EstudiantesTableSeeder, este nos crea 50 usuarios en la BD, en los cuales se llenan todos los campos de forma automatica.

- Se agrego el Seeder de EstudiantesTableSeeder, este nos crea 50 usuarios en la BD, en los cuales se llenan todos los campos de forma automatica.

## Trabajando con los Seeders
Hacemos estas lineas para poder ejecutar los seeder de forma independiente 

Con la siguiente linea de comando puedo crear el Seeder para Estudiantes en la Base de Datos:
```
php artisan db:seed --class=EstudiantesTableSeeder
```

Con la siguiente linea de comando puedo crear el Seeder para Profesores en la Base de Datos:

```
php artisan db:seed --class=ProfesoresTableSeeder
```

## Para Login
A partir de la version 6 de laravel ya no se puede usar 

```
php artisan make:auth 
```

Por lo que se debe usar las siguientes lineas de comando:

```
composer require laravel/ui
php artisan ui vue --auth
php artisan migrate
```

## Obtener datos de una API

1- Instalar 

```
composer require guzzlehttp/guzzle
```

```PHP
use Illuminate\Support\Facades\Http;
 
$response = Http::post('http://example.com/users', [
    'name' => 'Steve',
    'role' => 'Network Administrator',
]);
```

* para obtener los datos del request

```
$response['carrera']
```

## Saber donde estas en el menu dada la Ruta

```PHP
<a class="{{ Request::is('estudiantes') ? 'nav-link active' : 'nav-link' }}" aria-current="page" href="/estudiantes">Estudiantes</a>
```

## Retornar datos desde el Controller y recibirlos en la Vista

```PHP
return view('estudiante.insert')->with('estudiantes', $estudiante);
```

```PHP
<input type="text" class="form-control" id="carrera" name="carrera" value="{{ $estudiantes->carrera }}">
```

## Comandos Magicos

```
php artisan optimize
```

## Errores

Para poder usar en el Controller $request->file() es necesario poner en el formulario la siguiente caracteristica enctype="multipart/form-data"

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

