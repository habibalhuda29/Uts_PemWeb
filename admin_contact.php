<?php
    require_once 'koneksi.php';
    
    $contact = mysqli_query($koneksi, "SELECT * FROM contact");
    

    if (isset($_POST['btnTambahContact'])) 
    {
        
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $judul_2 = $_POST['judul_2'];
        $isi_2 = $_POST['isi_2'];
        $judul_3 = $_POST['judul_3'];
        $isi_3 = $_POST['isi_3'];

        $sql = mysqli_query($koneksi, "INSERT INTO contact VALUES ('', '$judul', '$isi', '$judul_2', '$isi_2', '$judul_3', '$isi_3')");
        if ($sql)
        {
            echo "<script>
            alert('tambah data contact berhasil');
            document.location.href='admin_contact.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('tambah data contact gagal');
            document.location.href='admin_contact.php'
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_about.php">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_skill.php">skill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_gallery.php">gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_education.php">education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_contact.php">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1>Contact</h1>
    <h4>Tambah Contact</h4>
    <form method="post">
        <input type="hidden" name="id_contact" value="<?= $co['id_contact']; ?>">

        <input style="width: 400px" name="judul" type="text" id="judul" placeholder="judul" value="" required><br><br>
        <input style="width: 400px" name="isi" type="text" id="isi" placeholder="isi" value="" required><br><br>
        <input style="width: 400px" name="judul_2" type="text" id="judul_2" placeholder="judul_2" value="" required><br><br>
        <input style="width: 400px" name="isi_2" type="text" id="isi_2" placeholder="isi_2" value="" required><br><br>
        <input style="width: 400px" name="judul_3" type="text" id="judul_3" placeholder="judul_3" value="" required><br><br>
        <input style="width: 400px" name="isi_3" type="text" id="isi_3" placeholder="isi_3" value="" required><br><br>
        <br><button type="submit" name="btnTambahContact" class="submitform">Submit</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>judul</th>
                <th>isi</th>
                <th>judul_2</th>
                <th>isi_2</th>
                <th>judul_3</th>
                <th>isi_3</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($contact as $co): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $co['judul']; ?></td>
                    <td><?= $co['isi']; ?></td>
                    <td><?= $co['judul_2']; ?></td>
                    <td><?= $co['isi_2']; ?></td>
                    <td><?= $co['judul_3']; ?></td>
                    <td><?= $co['isi_3']; ?></td>
                    <td>
                        <a href="admin_contact_ubah.php?id_contact=<?= $co['id_contact']; ?>">Ubah</a>
                        <a href="admin_contact_hapus.php?id_contact=<?= $co['id_contact']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>