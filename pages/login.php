<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="re">
        <p class="cript">AUTHORIZATION</p>
    </div>
    <div class="login">
        <form action="" method="POST">
           <p>
               <label for="username">Username: </label>
               <input class="just" type="text" name="user">
           </p>
           <p>
               <label for="password">Password: </label>
               <input class="just" type="password" name="password">
           </p>
           <p class="just"><button type="submit">Login</button></p>
        </form>
    </div>
    <?php require_once '../inc/footer.php';?>
</body>
</html>