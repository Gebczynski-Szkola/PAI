<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h2>Wędkuj z nami!</h2>
    </header>
    <main class="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </main>
    <main class="prawy">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "wedkowanie2");

            $kwerenda = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia='2';";

            $result = mysqli_query($polaczenie, $kwerenda);

            while ($linia = mysqli_fetch_row($result)){
                echo $linia[0].". ".$linia[1].", wystepuje w: ".$linia[2]."</br>"; 
            }

            mysqli_close($polaczenie);
        ?>
        <ol>
            <li>
                <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
            </li>
            <li>
                <a href="https://pzw.org/" target="_blank">Polski Związek Wędkarski</a>
            </li>
        </ol>
    </main>
    <footer>
        <p>Stronę wykonał: Oliwier GEbczysnki </p>
    </footer>
</body>
</html>