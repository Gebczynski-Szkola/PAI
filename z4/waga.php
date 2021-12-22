<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <section class="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </section>
    <section class="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </section>
    <section class="lewy">
        <img src="rys1.png" alt="zrzuć kalorie!">
    </section>
    <section class="prawy">
        <h1>Podaj dane</h1>
        <form action="waga.php" method="POST">
            <label>Waga: <input type="number" name="waga"></label><br>
            <label>Wzrost[cm]: <input type="number" name="wzrost"></label><br>
            <button type="submit">Licz BMI i zapisz wynik</button>
        </form>
        <?php
            if ( isset($_POST['waga']) && isset($_POST['wzrost']) ){
                $connect = mysqli_connect("localhost", "root", "", "egzamin");
                $data = date("Y-m-d");
                $waga = $_POST['waga'];
                $wzrost = $_POST['wzrost'];

                $bmi = ($waga/($wzrost*$wzrost));
                $wynik = ($bmi *10000);

                if($wynik >= 0 && $wynik<=18){
                    $opis = 1;
                }elseif($wynik>18 && $wynik<=25 ){
                    $opis = 2;
                }
                elseif($wynik>25 && $wynik<=30 ){
                    $opis = 3;
                }elseif($wynik>30){
                    $opis = 4;
                }
                
                echo "Twoja waga: ".$waga."<br>"."Twój wzrost: ".$wzrost."<br>"."Twoje BMI: ".$wynik;
                $sql = "INSERT INTO `wynik` (`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES ('', $opis, $data, $wynik );";
                mysqli_query($connect, $sql);
                mysqli_close($connect);
            }
        ?>
    </section>
    <main class="main">
        <table>
            <tr>
                <td>lp.</td>
                <td>Interpretacja</td>
                <td>zaczyna się od...</td>
            </tr>
            <?php 
                $connect = mysqli_connect("localhost", "root", "", "egzamin");
                $sql = "SELECT id, informacja, wart_min FROM bmi;";
                $qu = mysqli_query($connect, $sql);

                while ($linia = mysqli_fetch_row($qu)){
                    echo "<tr>"."<td>".$linia[0]."</td>"."<td>".$linia[1]."</td>"."<td>".$linia[2]."</td>"."</tr>";
                }
                mysqli_close($connect);
            ?>
        </table>
    <main>
    <footer class="footer">
        Autor: 00000000000<a href="/zrzuty/kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
    
</body>
</html>