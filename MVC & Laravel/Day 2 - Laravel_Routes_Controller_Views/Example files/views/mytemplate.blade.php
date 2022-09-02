<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
    @yield('css')
</head>

<body>
    <nav>
        <ul>
            <li>Home page</li>
            <li>Songs list</li>
            <li>Contact</li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>My footer</p>
    </footer>

</body>

</html>
