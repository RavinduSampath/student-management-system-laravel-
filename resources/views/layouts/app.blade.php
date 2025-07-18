<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2>My Laravel App</h2>
        <nav>
            <a href="/">Home</a> | 
            <a href="/about">About</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
