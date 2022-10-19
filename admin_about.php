<?php
    require_once 'koneksi.php';
    
    $about = mysqli_query($koneksi, "SELECT * FROM about");
    $header_about = mysqli_query($koneksi, "SELECT * FROM header_about");
    $ha = mysqli_fetch_assoc($header_about);

    if (isset($_POST['btnTambahAbout'])) 
    {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        $sql = mysqli_query($koneksi, "INSERT INTO about VALUES ('', '$judul', '$deskripsi')");
        if ($sql)
        {
            echo "<script>
            alert('tambah data about berhasil');
            document.location.href='admin_about.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('tambah data about gagal');
            document.location.href='admin_about.php'
            </script>";
        }
    }

    if (isset($_POST['btnUbahHeaderAbout'])) 
    {
        $id_header_about = $_POST['id_header_about'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $image_lama = $_POST['image_lama'];
        $nama = $_FILES['image']['name'];
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
        else
        {
            $nama_baru = $image_lama;
        }

        $query = mysqli_query($koneksi, "UPDATE header_about SET judul='$judul', deskripsi='$deskripsi', image='$nama_baru' WHERE id_header_about='$id_header_about'");
        if($query){
            echo "<script>
            alert('ubah data header about berhasil');
            document.location.href='admin_about.php'
            </script>";
        }else{
            echo "<script>
            alert('ubah data header about gagal');
            document.location.href='admin_about.php'
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
    <h1>Header About</h1>
    <h4>Ubah Header About</h4>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_header_about" value="<?= $ha['id_header_about']; ?>">
        <input type="hidden" name="image_lama" value="<?= $ha['image']; ?>">
        
        <input style="width: 400px" name="judul" type="text" id="judul" placeholder="Judul" value="<?= $ha['judul']; ?>" required><br><br>
        <input name="image" type="file" id="image"><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required><?= $ha['deskripsi']; ?></textarea><br>
        <br><button type="submit" name="btnUbahHeaderAbout" class="submitform">Submit</button>
    </form>
    <br>
    <hr>

    <h1>About</h1>
    <h4>Tambah About</h4>
    <form method="post">
        <input style="width: 400px" name="judul" type="text" id="judul" placeholder="Judul" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required=""></textarea><br>
        <br><button type="submit" name="btnTambahAbout" class="submitform">Submit</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($about as $ab): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $ab['judul']; ?></td>
                    <td><?= $ab['deskripsi']; ?></td>
                    <td>
                        <a href="admin_about_ubah.php?id_about=<?= $ab['id_about']; ?>">Ubah</a>
                        <a href="admin_about_hapus.php?id_about=<?= $ab['id_about']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>