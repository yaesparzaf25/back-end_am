<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extrem Spartan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
    </nav>
    <div class="index">
        
        <span><h1>REGISTRO DE CLASES</h1></span>
        <div class="principal">
            {{-- <div class="div-img">
                <img class="img-luchador" src="{{ asset('images/luchador.png') }}" alt="Luchador">
            </div> --}}
            <div class="botones">
                <form class="write-id">
                <h2>¿Ya formas parte de nuestro equipo?</h2>
                <div class="mb-3">
                    <input type="text" placeholder="Introduce tu ID" required>
                    <button type="button" class="boton-id">INGRESAR</button>
                </div>
                </form>
                <div class="nuevo">
                    <h2>¿Eres nuevo?</h2>
                    <button type="button" class="btn btn-primary">AGENDA TU CLASE</button>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>