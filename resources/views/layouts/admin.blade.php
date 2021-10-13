<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    <section>
        @yield('content')
        
    </section>
    <footer>
        @yield('foot')
    </footer>
    <script src="../js/app.js"></script>
</body>
</html>