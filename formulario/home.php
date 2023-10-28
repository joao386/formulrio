<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site carona</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right,rgb(20,247,220),rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 80px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Bláblaluno</h1>
    <h2>Site de carona universitário</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <br><br><br><br>
        <a href="moto.php">Cadastre-se como motorista</a>
        <br><br><br><br>
        <a href="carona.php">Cadastre-se como carona</a>
    </div>
</body>
</html>