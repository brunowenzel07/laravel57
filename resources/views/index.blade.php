<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de cidades:</h1>

    @foreach ($cities as $city)
        <li>{{ $city->name }}</li>

    @endforeach

  </body>
</html>
