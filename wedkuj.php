<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section class="left">
            <h2>Ryby drapieżne naszych wód</h2>
            <!-- script here --> 
            <?php
                $conn = mysqli_connect('localhost','root','','wedkowanie') or die;
                $sql = "SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia=1";
                $q = mysqli_query($conn,$sql);
                $row = mysqli_fetch_row($q);
                while($row = mysqli_fetch_row($q)){
                    echo  $row[0] ." " ;
                }  
                mysqli_close($conn);
            ?>
        </section>
        <section class="right">
            <img src="ryba1.jpg" alt="Sum">
            <a href="kwerendy.txt" download>Pobierz kwerendy</a>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>