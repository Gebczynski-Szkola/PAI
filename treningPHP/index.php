<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Test ciasteczek</h1>
    </header>
    <main>
        <?php //LICZNIK WEJŚĆ 
        
            if (isset($_COOKIE["licznik"])){
                $cookievalue = ++$_COOKIE["licznik"];
                echo $cookievalue;
                 
                setcookie("licznik", $cookievalue, time()+ 3600);

            }else{
                setcookie("licznik",0, time() + 100);
                echo "Dodano ciasteczko!";
            }

        ?>
    </main>

</body>
</html>