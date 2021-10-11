<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Xendit Demo Store</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
            name="description"
            content="Xendit demo store accepting payment with checkout integration"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="icon" href="/images/logo.ico" />
        @yield('media')
    </head>

    <body class="preload">
        @yield('content')
        @yield('scripts')
    </body>
</html>
