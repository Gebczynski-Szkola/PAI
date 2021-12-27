<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
<body>  
    <section class="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </section>
    <section class="logo">
        <h2>Podzespoły komputerowe</h2>
    </section>
    <main class="main">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr class="nagłówek">
                <td>NUMER</td>
                <td>NAZWA PODZESPOŁU</td>
                <td>OPIS</td>
                <td>CENA</td>
            </tr>
            <?php 
            $connection = mysqli_connect("localhost", "root", "", "sklep");

            if ($connection) {
                $sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;";
                $result = mysqli_query($connection, $sql); 

                while ($linia = mysqli_fetch_row($result)){
                    echo "<tr>"."<td>".$linia[0]."</td>"."<td>".$linia[1]."</td>"."<td>".$linia[2]."</td>"."<td class='cena'>".$linia[3]."</td>";
                }
            }else{
                echo "Brak połączenia z bazą danych!";
            }

            mysqli_close($connection);
            ?>
        </table>
    </main>
    <footer>
        <img src="scalak.jpg" alt="promocje na procesory">
    </footer>
    <footer>
        <h4>Nasz sklep komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
    </footer>
    <footer>
        <p>zadzwoń: 601 602 603</p>
    </footer>
    <footer>
        <p>Stronę wykonał: Oliwier Gębczyński</p>
    </footer>
</body>
</html>