
<?php
if (!isset($_COOKIE['Jonathan'])) $_COOKIE['Jonathan'] = 0;
    $value = $_COOKIE['Jonathan'] + 1;
    setcookie('Jonathan',$value,time()+3600*24*7);
?>

<html>
<head>
<title>Calcolatore</title>
</head>
<body>
    <?php
    if ($value > 1)
        echo "Numero di accessi effettuati: $value ";
     else
        echo "Benvenuto nel sito!";
    ?>
</body>
</html>


