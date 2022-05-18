<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC-Comics</title>
</head>

<body>

    <header>
        @yield('header');
        @yield('jumbotron');
    </header>

    <main>
        @yield('spotlight');
        @yield('shop-links');
    </main>

    <footer>
        @yield('top-footer');
        @yield('bot-footer');
    </footer>

</body>

</html>
