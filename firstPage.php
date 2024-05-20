
<?php


session_start();

//O isset serve para verificar se o metodo post esta realmente funcionando, se estiver ele executara o comando do if abaixo.
if(isset($_POST['user'], $_POST['pwd'])){
    if($_POST['user'] == "pedro" && $_POST['pwd'] == '1234'){
        
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pwd'] = $_POST['pwd'];
     
        header('Location:logConfirm.php');

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
</head>
<body>
    
<h1>Faça login aqui!</h1>
    <form action ="" method ="POST">

    Usuário: <input type="text" name="user"><br>

    Senha: <input type="password" name="pwd"><br>
    
    <input type="submit">

</body>
</html>