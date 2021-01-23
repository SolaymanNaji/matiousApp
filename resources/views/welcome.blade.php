<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
</head>
<body style="background-color: grey">
    <br>
    <br>
    <br>
    
    <br>
    <br>
    
    <br>
    <br>
    <div align='center'><h1 style="color: honeydew">Bienvenue, votre adresse IP est : {{ $RequestIp["x-forwarded-for"][0] }} </h1></div>
    
</body>
</html>