<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Agregar .env al sistema copiando el .env.example

### Proyecto que compila con docker

agregar proyecto a docker para el correcto funcionamiento

### El link configurado para que se levantes laravel

[http://127.0.0.1/](http://127.0.0.1/) para visualizarlo en el navegador

### Para ingresar a phpmyadmin

[http://127.0.0.1:8001/](http://127.0.0.1:8001/) para visualizarlo en el navegador

usuario y contraseña en .env.example

### link para registrar mediante api

POST [http://127.0.0.1/api/register](http://127.0.0.1/api/register)

### body example

PD: faltan validaciones para los roles de usuario
1: adm
2: editor
3: invitado
{
"name": "Name",
"email": "email@example.com",
"password": "1234",
"rol_id": "1"
}

### link para ingreso mediante api

POST [http://127.0.0.1/api/login](http://127.0.0.1/api/login)

### body example

{
"email": "email@example.com",
"password": "1234"
}

### ejemplo de respuesta

devolvera un Bearer token para poder entrar a las rutas protegidas, CRUD posts

###

"token": "37|r1gzJXJrcxSLf3WgglVbaQKfQRJF8iEoeQ97vrV",
"user": {
"id": 7836,
"name": "User Name",
"email": "email@example.com",
"rol_id": 1,
"created_at": "2024-02-08T20:19:08.000000Z",
"updated_at": "2024-02-08T20:19:08.000000Z"
}

### links para CRUD de posts

GET [http://127.0.0.1/api/posts/](http://127.0.0.1/api/posts/)

###

POST [http://127.0.0.1/api/posts/](http://127.0.0.1/api/posts/) con data en el body
{
"title": "test",
"body": "prueba por postman"
}

###

PATCH [http://127.0.0.1/api/posts/{id}](http://127.0.0.1/api/posts/{id}) con data en el body
{
"title": "test updated",
"body": "prueba de updated por postman"
}

###

DELETE [http://127.0.0.1/api/posts/{id}]
