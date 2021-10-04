<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel first steps</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap-grid.min.css" integrity="sha512-MJjgE48PpWFK4ZQowkReHYVkHv9Rl3ZqdxxdbisYuR0q0qRyVHSNw52YBvc0sqT0qtJFT3dirXdEMtd1l56ZUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="m-0" style="font-family: Arial, Helvetica, sans-serif">
    <header>
        <nav style="border-bottom: 1px solid grey; background:rgb(238, 237, 237)">
            <div class="container d-flex justify-content-between" >
                <ul class="d-flex" style="list-style: none">
                    <li>
                        <a style="text-decoration:none; color: grey" href="{{ route('Home') }}">Home</a>
                    </li>  
                </ul>
                <ul class="d-flex" style="list-style: none">
                @foreach ($links as $link)
                    <li class="px-3"><a style="text-decoration:none; color: grey" href="">{{ $link }}</a></li>
                @endforeach
                </ul>
               
                @forelse ($links as $link)
                @empty
                <p>Non sono presenti altri link nell'header</p>
                @endforelse
            </div>
            </nav>
    </header>
</body>
</html>