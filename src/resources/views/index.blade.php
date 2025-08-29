<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="container">
    <header class="header">
        <h1>Atte</h1>
        <ul class="nav">
            <li><a href="">ホーム</a></li>
            <li><a href="">日付一覧</a></li>
            <li><a href="">ログアウト</a></li>
        </ul>
    </header>
    <main class="main">
        <div class="message">
            <h2>ログインユーザーさんお疲れ様です</h2>
        </div>
        <div class="stamp-area">
            <div class="stamp">
                <a href="">勤務開始</a>
            </div>
            <div class="stamp">
                <a href="">勤務終了</a>
            </div>
            <div class="stamp">
                <a href="">休憩開始</a>
            </div>
            <div class="stamp">
                <a href="">休憩終了</a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>Atte, inc</p>
    </footer>
</body>

</html>