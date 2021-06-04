<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="{{ route('guardar2') }}" method="post">
      @csrf
        <h1>Ingrese un texto de 6 caracteres</h1>
        <input
          type="text"
          name="texto"
        />
        <input
          type="submit"
          value="Enviar"
        />
    </form>
</body>
</html>