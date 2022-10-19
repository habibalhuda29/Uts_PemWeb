<?php 
	require_once 'koneksi.php';
	
	$id_about = $_GET['id_about'];

	$query = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about = '$id_about'");

	$data = mysqli_fetch_assoc($query);

	if (isset($_POST['btnUbahAbout'])) {
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$sql = mysqli_query($koneksi, "UPDATE about SET judul = '$judul', deskripsi = '$deskripsi' WHERE id_about = '$id_about'");
		if ($sql)
        {
            echo "<script>
            alert('ubah data about berhasil');
            document.location.href='admin_about.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('ubah data about gagal');
            document.location.href='admin_about.php'
            </script>";
        }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah About</title>
</head>
<body>
	<h1>Ubah About</h1>
	<form method="post">
        <input style="width: 400px" value="<?= $data['judul']; ?>" name="judul" type="text" id="judul" placeholder="Judul" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required=""><?= $data['deskripsi']; ?></textarea><br>
        <br><button type="submit" name="btnUbahAbout" class="submitform">Submit</button>
    </form>
</body>
</html>