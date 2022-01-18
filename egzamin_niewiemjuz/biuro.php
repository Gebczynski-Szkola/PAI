<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podróże dalekie i bliskie</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <h1>Biuro podróży: WESOŁA WYPRAWA</h1>
    </header>
    <section class="ciasteczka">
        <?php
            // ["pies", "kot", "ciastko"]
            if(isset($_COOKIE["ciastko"])){
                echo "<p> Witaj ponownie na naszej stronie </p>";
            }else{
                setcookie("ciastko","1", time() + 3600);
                echo "<p> Witaj! Nasza strona używa ciasteczek </p>";
            }
        ?>
    </section>
    <main class="lewy">
        <table>
            <tr>
                <td>
                    <img src="losAngeles-skalowanie.jpg" alt="Los angeles">
                </td>
                <td>
                    <img src="losAngeles-skalowanie.jpg" alt="Los angeles">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="losAngeles-skalowanie.jpg" alt="Los angeles">
                </td>
                <td>
                    <img src="losAngeles-skalowanie.jpg" alt="Los angeles">
                </td>
            </tr>
        </table>
    </main>
    <main class="prawy">
        <h3>Proponujemy wycieczki</h3>
        <ul>
            <li>autokarowe
                <ol>
                    <li>po polsce z przewodnikiem</li>
                    <li>do niemiec i czech</li>
                </ol>
            </li>
            <li>samolotem
                <ol>
                    <li>wczasy w grecji</li>
                    <li>zwiedzanie barcelony</li>
                    <li>zwiedzanie wenecji</li>
                </ol>
            </li>
        </ul>
        <h3>Pobierz dokumenty</h3>
        <p>
            <a href="regulamin.txt">Regulaminkorzystania z usług biura podróży</a>
        </p> 
        <p>
            <a href="galeria.pl" target="_blank">Tu znajdziesz zdjęcia z naszych wycieczek</a>
        </p>
    </main>
    <footer>Stronę przygotował: Oliwier Gebczysnki</footer>
</body>
</html>