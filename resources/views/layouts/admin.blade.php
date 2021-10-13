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
        <div id="main-container" class="container-fluid big-banner d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center">
                <div id="title">
                    <h1>
                        @yield('title-page')
                    </h1>
                </div>
            </div>
            <div id="cardItens" class="container-sm d-flex flex-row align-items-start">
                <div class="container d-flex">
                    @yield('api')
                </div>
            </div>
            @yield('button')
        </div>
        
    </section>
    <footer>
        @yield('foot')
    </footer>
    <script src="../js/app.js"></script>
</body>
</html>