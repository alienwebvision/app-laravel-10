<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
@foreach($valids as $valid)

    {{ $valid->codigo_siga_material }}."<br>";
    {{ $valid->numero_lote }}."<br>";
    {{ $valid->validade_lote }}."<br>";

@endforeach
</body>
</html>