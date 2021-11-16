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
<div class="row">
    <div class="col-6 border border-danger mx-auto p-4">
        <h3>Atencion! Usted esta apunto de realizar la siguiente compra</h3>
        <div class="table-responsive mt-3">
            <table class="table table-sm">
                <tbody>
                    @foreach($carritos as $carrito)
                        <tr>
                            <td>{{$carrito->producto->nombre}}</td>
                            <td>{{$carrito->producto->precio}} €</td>
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
            <div class="d-flex flex-column flex-md-row justify-content-center">
                <a class="btn btn-outline-secondary me-md-2 order-2 order-md-1" href="{{url('/carrito')}}">Volver al carrito</a>
                <form class="my-md-0 order-1 order-md-2" method="post" action="/limpiar_carrito">
                    @csrf <!-- Solucion para el error 419|token -->
                    <input class="btn btn-primary" type="submit" value="Efectuar compra">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
