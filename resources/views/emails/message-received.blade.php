<!DOCTYPE html>
<html>
<head>
        <title>Mensaje recibido desde Bitmovil</title>
</head>
<body>
    <p>Recibiste un mensaje de: {{ $msg['nombre'] }} - {{ $msg['correo_electrónico'] }}</p>
    <p> Tel: {{ $msg['teléfono'] }} - Empresa: {{ $msg['empresa'] }} </p>
    <p> Comentarios: {{ $msg['comentarios'] }}</p>
</body>
</html>
