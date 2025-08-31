<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="container">
    <div class="login-card">
        <p class="card-title">ログイン</p>
        <x-form action="/login" method="post">

            <x-input-form type="email" name="email">メールアドレス</x-input-form>

            <x-input-form type="password" name="password">パスワード</x-input-form>

            <x-submit-button type="submit">
                ログイン
            </x-submit-button>
        </x-form>
        <p class="link">会員登録は<a href="/register">こちら</a>から</p>
    </div>
</body>

</html>