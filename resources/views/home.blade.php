{{-- Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
BONUS:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap-grid.min.css" integrity="sha512-MJjgE48PpWFK4ZQowkReHYVkHv9Rl3ZqdxxdbisYuR0q0qRyVHSNw52YBvc0sqT0qtJFT3dirXdEMtd1l56ZUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="font-family: Arial, Helvetica, sans-serif">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="">Benvenuto {{ $user }} nella pagina {{ $page }}</h1>
    <a href="{{ route('header') }}">Header</a>
    </div>
</body>
</html>