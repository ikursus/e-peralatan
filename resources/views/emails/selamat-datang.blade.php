<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Selamat Datang {{ $user->name }}</p>

<p>Ini adalah email ucapan selamat datang ke sistem {{ config('app.name') }}</p>

<p>Butiran login anda adalah:</p>

<ol>
    <li>Login ID/Email: {{ $user->email }}</li>
    <li>Password: (seperti yang anda telah tetapkan)</li>
</ol>

<p>Sekian, terima kasih!</p>

</body>
</html>
