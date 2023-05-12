<html>
    <head>
        <title>
            Input Nilai
        </title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <div class="form">
        <H3>Input Nilai</H3>
            <form  action="" method="post">
                <div>
                    <label>Nilai Praktik</label>
                    <br>
                    <input type="text" name="nilai_praktik" placeholder="Masukkan nilai praktik">
                </div>
                <div>
                    <label>Nilai Pilihan Ganda</label>
                    <br>
                    <input type="text" name="nilai_pilihan_ganda" placeholder="Masukkan nilai pilihan ganda">
                </div>
                <div>
                    <label>Nilai Kehadiran</label>
                    <br>
                    <input type="text" name="nilai_kehadiran" placeholder="Masukkan nilai kehadiran">
                </div>
                <div>
                    <label>Nilai Sikap</label>
                    <br>
                    <input type="text" name="nilai_sikap" placeholder="Masukkan nilai sikap">
                </div>
                <input class="submit" type="submit" name="submit">
            </form>
            <?php 
                if (isset($_POST['submit'])) {
                    $praktik = floatval($_POST['nilai_praktik']);
                    $pilihan_ganda = floatval($_POST['nilai_pilihan_ganda']);
                    $kehadiran = floatval($_POST['nilai_kehadiran']);
                    $sikap = floatval($_POST['nilai_sikap']);
                    $nilai_akhir =($praktik+$pilihan_ganda+$kehadiran+$sikap)/4;
                    if ($nilai_akhir >= 90) {
                        $kreteria = 'Baik Sekali';
                    }else if($nilai_akhir >70 && $nilai_akhir <90 ){
                        $kreteria = 'Baik';
                    }else{
                        $kreteria = 'Cukup';
                    }?>
            <div class="nilai_akhir">
                <p>Nilai Akhir : <?= $nilai_akhir;?></p>
                <p>Kreteria Kelulusan : <?= $kreteria; ?></p>
            </div>
            <?php } ?>
        </div>
    </body>
</html>