<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brani</title>
</head>
<body>
    <h1>{{ $LoggedUserInfo["name"] }}</h1>
    <h2>{{ $LoggedUserInfo["email"] }}</h2>
    <h3>{{ $LoggedUserInfo["password"] }}</h3>
    <button>
        <a href="/">Home</a>
    </button>
</body>
</html>