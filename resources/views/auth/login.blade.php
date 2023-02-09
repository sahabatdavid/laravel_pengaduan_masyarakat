<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf

            <label for="username">Username</label><br>
            <input type="text" name="username" id="username">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
            <label for="password_confirm">Konfirmasi Password</label><br>
            <input type="password" name="password_confirm" id="password_confirm">

            <input type="submit" value="Masuk">
        </form>
    </div>
</body>
</html>