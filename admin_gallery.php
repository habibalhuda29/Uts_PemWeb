<?php
    require_once 'koneksi.php';
    
    $gallery = mysqli_query($koneksi, "SELECT * FROM gallery");

    if (isset($_POST['btnTambahGallery'])) 
    {
        $nama = $_FILES['image']['name'];
        $deskripsi = $_POST['deskripsi'];
        
        if($nama != '')
        {
            $ekstensi_diperbolehkan = array('png','jpg', 'jpeg', 'gif');
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];   
            
            if(!in_array($ekstensi, $ekstensi_diperbolehkan))
            {
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
            $nama_baru = uniqid() . $nama;
            move_uploaded_file($file_tmp, 'images/'. $nama_baru);
        }
        $sql = mysqli_query($koneksi, "INSERT INTO gallery VALUES ('', '$nama_baru', '$deskripsi')");
        
        if($sql){
            echo "<script>
            alert('Tambah data gallery berhasil');
            document.location.href='admin_gallery.php'
            </script>";
        }else{
            echo "<script>
            alert('Tambah data gallery gagal');
            document.location.href='admin_gallery.php'
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
    <title>Admin gallery</title>
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
          <a class="nav-link" href="admin_galery.php">gallery</a>
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
    <h1>Gallery</h1>
    <h4>Tambah Gallery</h4>
    <form method="post" enctype="multipart/form-data">
        
        <input name="image" type="file" id="image"><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required></textarea><br>
        <br><button type="submit" name="btnTambahGallery" class="submitform">Submit</button>
    </form>
    <br>
    <hr>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>gallery</th>
                <th>deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($gallery as $gl): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $gl['image']; ?></td>
                    <td><?= $gl['deskripsi']; ?></td>
                    <td>
                        <a href="admin_gallery_ubah.php?id_gallery=<?= $gl['id_gallery']; ?>">Ubah</a>
                        <a href="admin_gallery_hapus.php?id_gallery=<?= $gl['id_gallery']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>