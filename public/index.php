<?php

require_once '../loader/autoloader.php';

if (isset($_GET['p'])){

    $p = $_GET['p'];
}else{

    $p = 'home';
}

ob_start();

if ($p === 'home') {

    require '../pages/home.php';
}

elseif($p === 'register'){

    require '../pages/register.php';
}

elseif($p === 'login'){

    require '../pages/login.php';
}

elseif($p === 'history'){

    require '../pages/history.php';
}

elseif($p === 'deposit'){

    require '../pages/deposit.php';
}

elseif($p === 'contact'){

    require '../pages/contact.php';
}
elseif($p === 'cashin'){

    require '../pages/cashin.php';
}

elseif($p === 'withdrall'){

    require '../pages/withdrall.php';
}

$content = ob_get_clean();

require '../pages/template/defaulte.php';

?>