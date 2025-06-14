<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/santize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <title>PiGLy</title>
</head>
<body>

    <main class="flame">
        <h1 class="title">PiGly</h1>
        @yield('content')
    </main>

</body>
</html>