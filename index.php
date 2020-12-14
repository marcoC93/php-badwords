<?php
    $myBadword = $_GET["name"];
    $frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ;
    $censura = str_replace($myBadword , "***" , $frase)   ;
    $lunghezza_stringa = strlen($frase);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>la stringa é lunga <?php echo $lunghezza_stringa  ?> </h1>
        <p> <?php echo $censura = str_replace($myBadword , "***" , $frase)   ;  ?></p>
    </body>
</html>
