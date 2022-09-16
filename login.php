<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa (login)</title>

    <style>
        .style {
            margin-bottom: 10px;
        }

        .warning {
            color : red;
            font-style : italic;
            font-size : small;
        }

    </style>
</head>
<body>
    <h1>LOGIN USER</h1>
    
    <form action="siswa.php" method="post">
        <div class="style">
            <label for= "username">Username : </label>
            <input type="text" name="username" id="username"/>
        </div>
        <div class="style">
            <label for= "password">Password : </label>
            <input type="password" name="password" id="password"/>
        </div>
        <?php if (isset($_GET["error"])) : ?> 
            <p class= "warning" >Username atau Password salah!</p> 
        <?php endif ?>  
             <button type= "submit" name="submit">Login</button>
    </form>
   
</body>
</html>