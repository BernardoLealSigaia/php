
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site do Trabalho</title>
</head>
<body>
<style>
        body{
            margin:0;
        }
        form {
            background-color: violet;
            padding: 5px;
            width: 100%;
            position: absolute;
            height: 100%;
            text-align: center;
            
        }

        label,input[type="text"], input[type="password"]
        {
            width: 85%;
            padding: 7px;
            margin-top: 100px;
        
        }

        input[type="submit"]{
            text-align: left;
        }

    </style>

</head>
<body>
    <form action="trabconfirmar.php" method="POST">
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha">Senha:</label>
        <input id="senha" type="password" name="senha"> <br>
        <input id="botão" type="submit">
    </form>

    

</body>
</html>