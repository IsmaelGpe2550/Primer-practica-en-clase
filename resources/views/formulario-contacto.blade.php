<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="/contacto-recibe" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id=""><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id=""><br>

        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" cols="30" rows="4" id=""></textarea>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>