<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard Masyarakat</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Keluar">
    </form>
</body>
</html>