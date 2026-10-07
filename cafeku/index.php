<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <form action='./api/pengguna/ceklogin.php' method='POST'>
    <input name='username' type="text" placeholder='Username'>
    <br>
    <input name='password' type="password" placeholder='Password'>
    <br>
    <button>Login</button>

    </form>
</body>
</html>