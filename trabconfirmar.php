<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Padrão</title>
</head>
<body>
    <h1>Página Inicial</h1>

    <?php
    $nome = $_POST["nome"];
    $senha = $_POST ["senha"];

    if($nome=="Bernardo" and $senha=="123")
        header('Location: '."trabrestrito.php");

    else
       print("Senha Inválida!");
    
    ?>  
</body>
</html>