<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2 class="position-fixed border-bottom w-100 bg-white text-center p-4"><a class="text-secondary text-decoration-none" href="/">Burguer king</a></h2>
    <div style="height: 100px;"></div>
    <div class="position-absolute start-50 translate-middle-x" style="max-width: 600px;">
        <div>
            <img class="mx-auto d-block img-fluid" width="600" src="{{$producto->imgURL}}" alt="missing">
            <div class="mt-5 mb-3">
                <h2> {{$producto->nombre}}</h2>
                <strong>{{$producto->precio}} €</strong> 
            </div>
        </div>
        <p>{{$producto->descripcion}}</p>
        <div class="d-flex mt-4">
            <a href="/" class="btn btn-outline-secondary w-50">Volver</a>
            <form class="w-100 ms-2" method="POST" action="/add_producto/{{$producto->id}}">
                @csrf <!-- Solucion para el error 419|token -->
                <input class="btn btn-primary w-100" type="submit" value="Añadir al carrito">
            </form>
        </div>
    </div>
</body>
</html>
