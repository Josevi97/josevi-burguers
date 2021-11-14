<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .product:hover {
            background-color: rgb(255, 255, 100);
        }   
    </style>
</head>
<body>
    <h2 class="position-fixed border-bottom w-100 bg-white text-center p-4"><a class="text-secondary text-decoration-none" href="/">Burguer king</a></h2>
    <div class="container">
        <div style="height: 100px;"></div>
        <div class="row mb-5">
            @foreach($productos as $producto)
                <a class="col-xm-12 col-md-6 col-xl-3 text-center text-dark text-decoration-none p-0 product" href="/{{$producto->id}}">
                    <img  
                        class="mx-auto d-block mb-2" 
                        width="300" 
                        src="{{$producto->imgURL}}"/>
                    <h3><strong>{{$producto->nombre}}</strong></h3>
                    <h5>{{$producto->precio}} €</h5>
                </a>
            @endforeach
        </div>
        <br>
        <br>
    </div>
    <div class="position-fixed bottom-0 bg-white w-100">
        <div class="d-flex container py-4 justify-content-center">
            <a class="btn btn-outline-primary btn-lg" href="/carrito">Ver carrito</a>
        </div>
    </div>
</body>
</html>
