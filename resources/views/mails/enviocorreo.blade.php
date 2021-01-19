<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Prueba de envio de correos</title>
</head>
<body>
    <p>Hola! Tu curso se ha publicado a las {{ $cursos->created_at }}.</p>
    <p>Estos son los datos tu curso:</p>
    <ul>
        <li>Titulo: {{ $cursos->title }}</li>
        <li>Descripción: {{ $cursos->description }}</li>
    </ul>
    <ul>
        <li>
            <a href="{{config('app.url')}}/cursos">
                Ir al curso
            </a>
        </li>
    </ul>
</body>
</html>
