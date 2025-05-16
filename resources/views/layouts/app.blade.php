<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kiwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

        <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .form-control{
            border-radius: 25px;
        }

        .logo-circle {
            border-radius: 50%;
            overflow: hidden;
            width: 100px; /* Ajustez la taille selon vos besoins */
            height: 100px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-circle img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
    </style>
</head>

  <body>
    <header>
        @include('layouts.header')
    </header>
    <div class="content mt-5">

        @yield('content')
        
    </div>
  </body>

  <footer>
        @include('layouts.footer')
  </footer>
</html>