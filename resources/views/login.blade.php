<html>
<head>
    <title>Accedi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/login.css">
    <script src='./scripts/login.js' defer></script>
</head>
<body>    
<div id="container">
    <h1>The Wellness House - Accedi</h1>
    <form method="post">
    @csrf
    <label>Username <input name="username" type="text"></label>
    <label>Password <input name="password" type="password"></label>
    <input type="submit" value="Accedi" id="submit">
</form>
<div class='invalid' id="err">
    @if (isset($errore))
    {{ $errore }}
    @endif</div>
<div>
<span>Non sei registrato? Fallo adesso!</span>
<a href="register">Registrati</a>
</div>
</body>
</html>