<html>
    <head>
        <title>
            Input Nilai
        </title>
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
    <div class="form">
        <div class="gambar" >
            <img src="../img/icon.png" alt="icon">
        </div>
        <H3>Kalkulator Sederhana</H3>
            <form  action="" method="post">
                <div>
                    <label>Bilangan 1 :</label>
                    <br>
                    <input class="input" type="number" name="bil_1" placeholder="Bilangan 1">
                </div>
                <div>
                    <label>Bilangan 2 :</label>
                    <br>
                    <input class="input" type="number" name="bil_2" placeholder="Bilangan 2">
                </div>
                <input class="submit" type="submit" name="hitung" value="Hitung">
            </form>
            <?php 
                if (isset($_POST['hitung'])) {
                    $bil1 = floatval($_POST['bil_1']);
                    $bil2 = floatval($_POST['bil_2']);
                    ?>
            <div class="nilai_akhir">
                <p>Bilangan 1 : <?= $bil1;?></p>
                <p>Bilangan 2 : <?= $bil2; ?></p>
                <p>Pemjumlahan : <?= $bil1+$bil2; ?></p>
                <p>Pengurangan : <?= $bil1-$bil2; ?></p>
                <p>Perkalian : <?= $bil1*$bil2; ?></p>
                <p>Pembagian : <?= $bil1/$bil2; ?></p>
            </div>
            <?php } ?>
        </div>
    </body>
</html>