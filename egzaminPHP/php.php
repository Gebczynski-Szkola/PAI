<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerJS">
        <form class="form" action="php.php" method="post">
            <label class="label">Pierwsza data:
                <input type="date" id="firstDate" name="firstDate" required>
            </label>
            <label class="label">Druga data:
                <input type="date" id="secondDate" name="secondDate" required>
            </label>
            <button class="btn" id="btn" type="submit">Oblicz</button>
        </form>
        <?php
            $link = @mysqli_connect("localhost","root","","datybaza");

            @$firstDate = $_POST['firstDate'];
            @$secondDate = $_POST['secondDate'];
            $today = date("Y-m-d");

            $first = strtotime($firstDate);
            $second = strtotime($secondDate);

            echo '</br>';
            $resultDate = $first - $second;

            if($resultDate < 0){
                $resultDate = $resultDate*(-1);
            }

            $days = $resultDate/(3600*24);

            $sql  = "INSERT INTO danedaty VALUES ('','$today','$firstDate','$secondDate','$days')";

            echo "<p>Roznica dni $days </p>";
            
            mysqli_query($link, $sql);
            mysqli_close($link);
        ?>
          
        <p id="result"></p>
    </div>
</body>
</html>