<?php
    require_once 'koneksi.php';
    
    $skill = mysqli_query($koneksi, "SELECT * FROM skill");
    

    if (isset($_POST['btnTambahSkill'])) 
    {
        $nama_skill = $_POST['nama_skill'];
        $progress_bar = $_POST['progress_bar'];

        $sql = mysqli_query($koneksi, "INSERT INTO skill VALUES ('', '$nama_skill', '$progress_bar')");
        if ($sql)
        {
            echo "<script>
            alert('tambah data skill berhasil');
            document.location.href='admin_skill.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('tambah data skill gagal');
            document.location.href='admin_skill.php'
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
    <title>Admin skill</title>
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
    <h1>Skill</h1>
    <h4>Tambah Skill</h4>
    <form method="post">
        <input style="width: 400px" name="nama_skill" type="text" id="nama_skill" placeholder="nama_skill" value="" required><br><br>
        <input type="number" step="10" name="progress_bar"><br>
        <br><button type="submit" name="btnTambahSkill" class="submitform">Submit</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>skill</th>
                <th>progress_bar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($skill as $sk): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $sk['nama_skill']; ?></td>
                    <td><?= $sk['progress_bar']; ?></td>
                    <td>
                        <a href="admin_skill_ubah.php?id_skill=<?= $sk['id_skill']; ?>">Ubah</a>
                        <a href="admin_skill_hapus.php?id_skill=<?= $sk['id_skill']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>