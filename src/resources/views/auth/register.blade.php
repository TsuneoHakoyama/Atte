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
    <div class="register-card">
        <p class="card-title">会員登録</p>
        <x-form action="/register" method="post">

            <x-input-form type="text" name="name">名前</x-input-form>

            <x-input-form type="email" name="email">メールアドレス</x-input-form>

            <x-input-form type="password" name="password">パスワード</x-input-form>

            <x-input-form type="password" name="password_confirm">パスワード（確認）</x-input-form>

            <x-submit-button type="submit">
                会員登録
            </x-submit-button>
        </x-form>
        <p class="link">ログインは<a href="/login">こちら</a>から</p>
    </div>
</body>

</html>