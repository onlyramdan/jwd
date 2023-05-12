<html>
  <head>
    <title>Formulir Pendaftaran</title>
  </head>
  <body>
    <h2>Formulir Pendaftaran</h2>
    <div class="form">
      <form action="" method="post">
        <div>
          <label>Nama :</label>
          <input type="text" name="nama">
        </div>
        <div>
          <label>Email :</label>
          <input type="text" name="email">
        </div>
        <div>
          <label>Password :</label>
          <input type="text" name="password">
        </div>
        <div>
          <label>Jenis Kelamin :</label>
          <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
          <input type="radio" name="jenis_kelamin" value="Laki-Laki">
          Laki-laki
        </div>
        <div>
          <label>Pendidikan terakhir :</label>
          <select name="pendidikan_terakhir">
            <option value="SMK">SMK</option>
            <option value="D1/D2/D2">D1/D2/D2</option>
            <option value="S1">S1</option>
          </select>
        </div>
          <input type="submit" name="submit">
      </form>
    </div>
    <?php 
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    }?>
    <?php if (isset($_POST['submit'])):?>
      <table border="1">
        <thead>
          <th>Nama Pengguna</th>
          <th>Email</th>
          <th>Password</th>
          <th>Jenis Kelamin</th>
          <th>Pendidikan Terakhir</th>
        </thead>
        <tr>
          <td><?= $nama; ?></td>
          <td><?= $email; ?></td>
          <td><?= $password; ?></td>
          <td><?= $jenis_kelamin; ?></td>
          <td><?= $pendidikan_terakhir; ?></td>
        </tr>
      </table>

    <?php endif; ?>

  </body>
</html>
