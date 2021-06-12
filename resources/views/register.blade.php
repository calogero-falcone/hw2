<html>
<head>
    <title>Registrati</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/register.css">
    <script src='./scripts/register.js' defer></script>
</head>
<body>
<div id="container">
<h1>The Wellness House - Registrati</h1>
    <form method="post">
    @csrf
    <label>Username <input name="username" id="username_input" type="text"></label>
    <label>Password <input name="password" type="password"></label>
    <label>Conferma password <input name="conferma_password" type="password"></label>
    <input type="submit" value="Registrati" id="submit">
    </form>
    <div class='valid' id="succ">
    @if (isset($reg))
    {{ $reg }}
    @endif</div>
    <div class='invalid hidden' id='car_min'>La password deve contenere minimo 8 caratteri.</div>
    <div class='invalid hidden' id='car_spec'>La password deve contenere almeno uno tra i seguenti caratteri speciali: _ * – + ! ? , : ;</div>
    <div class='invalid hidden' id='conf_pw'>Le password immesse non coincidono.</div>
    <div class='invalid hidden' id='compila'>Compila tutti i campi.</div>
    <div class='invalid hidden' id='presente'>Username giá in uso.</div>
<div>
<span>Hai giá un account?</span>
<a href="login">Accedi</a>
</div>
</body>
</html>