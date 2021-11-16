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
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carritos as $carrito)
                        <tr>
                            <td>{{$carrito->producto->nombre}}</td>
                            <td>{{$carrito->producto->precio}} €</td>
                            <td class="d-flex">
                                <form class="ms-auto" method="post" action="/eliminar_producto/{{$carrito->id}}">
                                    @csrf <!-- Solucion para el error 419|token -->
                                    <input class="btn btn-outline-danger" type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total: </th>
                        <td>{{$total}} €</td>
                    </tr>
                </tfoot>
            </table>
            <div>
                <div class="d-flex flex-column flex-md-row">
                    <a class="btn btn-outline-secondary me-md-auto order-3 order-md-1" href="{{url('/')}}">Seguir añadiendo</a>
                    <a class="btn btn-primary me-0 me-md-2 order-1 order-md-2" href="/comprar_productos">Comprar</a>
                    <form class="my-2 my-md-0 order-2 order-md-3" method="post" action="/limpiar_carrito">
                        @csrf <!-- Solucion para el error 419|token -->
                        <input class="btn btn-danger" type="submit" value="Limpiar carrito">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
