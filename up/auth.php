<?php
    if ($_COOKIE['user'] == 'Da')
        setcookie('user', 'Da',time() - 3600, '/');
    else
        setcookie('user', 'Da',time() + 3600, '/');
    header('Location: /');
?>
