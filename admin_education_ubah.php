<?php 
	require_once 'koneksi.php';
	
	$id_edukasi = $_GET['id_edukasi'];

	$query = mysqli_query($koneksi, "SELECT * FROM edukasi WHERE id_edukasi = '$id_edukasi'");

	$data = mysqli_fetch_assoc($query);

	if (isset($_POST['btnUbahEdukasi'])) {
		$judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $judul_2 = $_POST['judul_2'];
        $deskripsi = $_POST['deskripsi'];
		$sql = mysqli_query($koneksi, "UPDATE edukasi SET judul = '$judul', tahun = '$tahun', judul_2 = '$judul_2',  deskripsi = '$deskripsi' WHERE id_edukasi = ' id_edukasi'");
		if ($sql)
        {
            echo "<script>
            alert('ubah data edukasi berhasil');
            document.location.href='admin_education.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('ubah data edukasi gagal');
            document.location.href='admin_education.php'
            </script>";
        }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah education</title>
</head>
<body>
	<h1>Ubah education</h1>
	<form method="post">
        <input style="width: 400px" value="<?= $data['judul']; ?>" name="judul" type="text" id="judul" placeholder="Judul" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['tahun']; ?>" name="tahun" type="text" id="tahun" placeholder="tahun" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['judul_2']; ?>" name="judul_2" type="text" id="judul_2" placeholder="Judul_2" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required=""><?= $data['deskripsi']; ?></textarea><br>
        <br><button type="submit" name="btnUbahAbout" class="submitform">Submit</button>
    </form>
</body>
</html>