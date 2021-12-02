<?php
    $db = @mysqli_connect("localhost", "root","","dane");

    @$tytul = $_POST['tytul'];
    @$gatunek = $_POST['gatunek'];
    @$rok = $_POST['rok'];
    @$ocena = $_POST['ocena'];

    $sql = "INSERT INTO filmy VALUES ('', '$gatunek', '', '$tytul', '$rok', '$ocena')";
    mysqli_query($db, $sql);
    echo "<p> Film $tytul został dodany do bazy </p>";
    mysqli_close($db)
?>