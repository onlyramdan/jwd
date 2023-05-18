<html>
    <head>
        <title>akses file</title>
    </head>
    <body>
        <h3>Data Customer</h3>
        <table style="width: 100%">
            <form action="" method="post" id="formItem">
                <tr>
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Kelamin</label>
                    </td>
                    <td>
                        <input type="radio" value="Laki-laki" id="laki-laki" name="jenisKelamin" checked>
                        <label for="laki-laki">Laki-laki</label>
                        <br>
                        <input type="radio" value="Perempuan" id="perempuan" name="jenisKelamin">
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="kirim" value="kirim">
                    </td>
                </tr>
            </form>
        </table>
    
    <?php 

    $berkas = "data/data.json";
    
    $datacustomer = array();
    $dataJSON = file_get_contents($berkas);
    $datacustomer = json_decode($dataJSON, true);
    
    if (isset($_POST['kirim'])) {
        $item = array();

        $dataBaru = array(
            'nama'=> $_POST["nama"],
            'jenisKelamin'=> $_POST['jenisKelamin']
        );
        array_push($datacustomer, $dataBaru);
        $dataJSON = json_encode($datacustomer, JSON_PRETTY_PRINT);
        file_put_contents($berkas, $dataJSON);
    }

    ?>
    <br>
    <br>
    <table style="width:100%" border="1">
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
        </tr>

        <?php 
        for($i=0; $i< count($datacustomer); $i++){
         $nama = $datacustomer[$i]['nama'];
         $jenisKelamin = $datacustomer[$i]['jenisKelamin'];
           
         echo "
        <tr>
        <td>".$nama."</td>
        <td>".$jenisKelamin."</td></tr>
         ";
        }
        
        ?>
    </table>
   
    </body>
</html>