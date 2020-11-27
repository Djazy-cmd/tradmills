<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>register</title>
</head>

<?php

require_once '../inc/autoloader.php';

$db = App::getDatabase();

$validator = new Validator($_POST);

$validator->isAlpha('fullname', " Votre nom est incorect");

$validator->isEmail('email', " Votre Email n'est pas valide");

$validator->isConfirmed('password', " Erreur veuillez verifier votre mot de passe");

if ($validator->isvalid()) {

    $auth = new Auth($db);

    $auth->register($_POST['fullname'], $_POST['username'], $_POST['password'], $_POST['email']);
    
    Session::getInstance()->setFlache('Success', 'Vous venez de vous inscrit sur investbitcoin');
    App::redirect('login.php');
    
}else{
    
    $errors = $validator->getErros();
}

echo "<pre>";

var_dump($validator);

echo "</pre>"

?>
<body>
    <div class="bloc">
       <div class="re">
           <p class="cript">REGISTRATION</p>
       </div>
       <?php if(Session::getInstance()->hasFlache()):?>
            <?php foreach(Session::getInstance()->getFlache() as $type => $message): ?>
                <div class="msg"<?=$type;?> >
                    <?=$message;?>
             </div>
            <?php endforeach; ?>
        <?php endif;?>
       
        <form method="POST">
        <div class="register">
            <div class="imga">
                <img class= "mage"src="../inc/index.jpeg" alt="image btc">
            </div>
            <div class="form">
                <p>
                    <label for="fullname">Fullname: </label>
                    <input class= just type="text" name="fullname">
                </p>
                <p>
                    <label for="username">Username: </label>
                    <input class= just type="text" name="username">
                </p>
                <p>
                    <label for="password">Password: </label>
                    <input class= just type="password" name="password">
                </p>
                <p>
                    <label for="retype">Retype Password: </label>
                    <input class= just type="password" name="password"> 
                </p>
                <p>
                    <label for="email">Your E-mail Address: </label>
                    <input class= "just" type="text" name="email">
                </p>
                <p>
                    <label for="btc">Your Bitcoin User Account:</label>
                    <input class= "just" type="text" name="btcuser">
                </p>
                <p class="just"><button type="submit">Register</button></p>
            </div>
        </div>
        </form>
    </div>
    <?php require_once '../inc/footer.php';?>
</body>
</html>