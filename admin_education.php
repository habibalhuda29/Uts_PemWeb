<?php
    require_once 'koneksi.php';
    
    $edukasi = mysqli_query($koneksi, "SELECT * FROM edukasi");
    $organisasi = mysqli_query($koneksi, "SELECT * FROM organisasi");
    $ed = mysqli_fetch_assoc($organisasi);

    if (isset($_POST['btnTambahEdukasi'])) 
    {
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $judul_2 = $_POST['judul_2'];
        $deskripsi = $_POST['deskripsi'];

        $sql = mysqli_query($koneksi, "INSERT INTO edukasi VALUES ('', '$judul', '$tahun', '$judul_2', '$deskripsi')");
        if ($sql)
        
        {
            echo "<script>
            alert('tambah data edukasi berhasil');
            document.location.href='admin_education.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('tambah data edukasi gagal');
            document.location.href='admin_education.php'
            </script>";
        }
    }

    if (isset($_POST['btnTambahOrganisasi'])) 
    {
        $id_organisasi = $_POST['id_organisasi'];
        $tahun = $_POST['tahun'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        $sql = mysqli_query($koneksi, "INSERT INTO organisasi VALUES ('', '$tahun', '$judul', '$deskripsi')");
        if ($sql)
        {
            echo "<script>
            alert('tambah data education berhasil');
            document.location.href='admin_education.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('tambah data education gagal');
            document.location.href='admin_education.php'
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
    <title>Admin About</title>
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
    <h1>Education</h1>
    <h4>Tambah Education</h4>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_edukasi" value="<?= $ed['id_edukasi']; ?>">

        <input style="width: 400px" name="judul" type="text" id="judul" placeholder="Judul" value="" required><br><br>
        <input style="width: 400px" name="tahun" type="text" id="tahun" placeholder="tahun" value="" required><br><br>
        <input style="width: 400px" name="judul_2" type="text" id="judul_2" placeholder="judul_2" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required></textarea><br>
        <br><button type="submit" name="btnTambahEdukasi" class="submitform">Submit</button>
    </form>
    <br>
    <hr>

    <h1>Organization</h1>
    <h4>Tambah Organization</h4>
    <form method="post">
        <input style="width: 400px" name="tahun" type="text" id="tahun" placeholder="tahun" value="" required><br><br>
        <input style="width: 400px" name="judul" type="text" id="judul" placeholder="judul" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required=""></textarea><br>
        <br><button type="submit" name="btnTambahOrganisasi" class="submitform">Submit</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>tahun</th>
                <th>judul_2</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($edukasi as $ed): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $ed['judul']; ?></td>
                    <td><?= $ed['tahun']; ?></td>
                    <td><?= $ed['judul_2']; ?></td>
                    <td><?= $ed['deskripsi']; ?></td>
                    <td>
                        <a href="admin_education_ubah.php?id_edukasi=<?= $ed['id_edukasi']; ?>">Ubah</a>
                        <a href="admin_education_hapus.php?id_edukasi=<?= $ed['id_edukasi']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tbody>
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>