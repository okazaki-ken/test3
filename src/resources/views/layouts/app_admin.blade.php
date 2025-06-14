<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('css')
</head>
<body>
    <hedaer class="header">
        <div class="header__tilte">PiGLy</div>
        <div class="header__button">
            <a href="/wight_logs/goal_setting">
                <button class="header__button--goal">目標体重設定</button>            
            </a>
            <form action="/logout" method="post">
                @csrf
                <button class="header__button--logout">ログアウト</button>
            </form>
        </div>
    </hedaer>
    
    <main>
        @yield('content')
    </main>
    
</body>
</html>