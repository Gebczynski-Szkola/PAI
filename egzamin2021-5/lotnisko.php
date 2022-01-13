<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header class="pierwszy">
        <img src="zad5.png" alt="logo lotnisko">
    </header>
    <header class="drugi">
        <h1>Przyloty</h1>
    </header>
    <header class="trzeci">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz...</a>
    </header>
    <main>
        <table>
            <tr>
                <td>czas</td>
                <td>kierunek</td>
                <td>numer rejsu</td>
                <td>status</td>
            </tr>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'egzamin_lotnisko');
            $kwerenda = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty GROUP BY czas;";

            $wynik = mysqli_query($connection, $kwerenda);

            while($linia = mysqli_fetch_row($wynik)){
                echo "<tr><td>".$linia[0]."</td>"."<td>".$linia[1]."</td>"."<td>".$linia[2]."</td>"."<td>".$linia[3]."</td></tr>";
            }

            mysqli_close($connection);
            ?>
        </table>
    </main>
    <footer>
        <?php

            if(isset($_COOKIE["licznik"])){
                echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
            }else{
                setcookie("licznik", 1, time() + 3600 * 60 * 2);
                echo "<p><b>Dzień dobry! Strona używa ciasteczek</b></p>";
            }


        ?>
    </footer>
    <footer>
        Autor: Oliwier Gębczyński
    </footer>
</body>
</html>