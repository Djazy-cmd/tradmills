<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="con">
        <?php require '../inc/header.php';?>
        <div class="elem">
            <div class="con">
                <p>(+44) 20 3286 0064</p>
                <p>(+44) 20 3286 0064</p>
            </div>
            <div class="con">
                <p>support@trademills.net</p>
                <p>info@trademills.net</p>
            </div>
            <div class="con">
                <p>160 City Road, Kemp House</p>
                <p>
                    London, United Kingdom, EC1V 2NX
                </p>
            </div>
        </div>
        <div class="send">
           
            <form action="">
                <p>
                    <input class="contacte"type="text" name="address" placeholder="NAME">
                </p>
                <p>
                    <input class="laim"type="text" name="mail" placeholder="E-mail">
                </p>
                <P><textarea class="sms" name="mess" id="" cols="30" rows="10" placeholder="MESSAGE"></textarea></P>
                <button class="contac" type="submit">SEND MESSAGE</button>
            </form>
        </div>
    </div>
   <?php require '../inc/footer.php';?>
</body>
</html>
