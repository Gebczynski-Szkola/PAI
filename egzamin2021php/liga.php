<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>piłka nożna</title>
</head>
<body>
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <section class="lewy">
        <form action="liga.php" method="post">
            <select name="pozycja">
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </select>
            <input type="submit">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: Oliwier Gębczyński</p>
        
    </section>
    <section class="prawy">
        <ol>
            <?php
                $pozycja = $_POST["pozycja"];
                
                $connection = mysqli_connect("localhost", "root", "", "egzamin");
                $kwerenda = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id='$pozycja';";

                $query = mysqli_query($connection, $kwerenda);

                while($linia = mysqli_fetch_row($query)){
                    echo "<li><p>".$linia[0]." ".$linia[1]."</p></li>";
                }

                mysqli_close($connection);
            ?>
        </ol>
    </section>
    <main>
        <h3>Liga mistrzów</h3>
    </main>
    <section class="liga">
        <?php
            $connection = mysqli_connect("localhost", "root", "", "egzamin");
            $kwerenda = "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC;";
            
            $query = mysqli_query($connection, $kwerenda);

            while($linia = mysqli_fetch_row($query)){
                echo "<section class='blok'><h2>".$linia[0]."</h2><h1>".$linia[1]."</h1><p>grupa: ".$linia[2]."</p></section>";
            }

            mysqli_close($connection);
        ?>
    </section>
</body>
</html>