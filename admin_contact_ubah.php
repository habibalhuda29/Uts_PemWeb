<?php 
	require_once 'koneksi.php';
	
	$id_contact = $_GET['id_contact'];

	$query = mysqli_query($koneksi, "SELECT * FROM contact WHERE id_contact = '$id_contact'");

	$data = mysqli_fetch_assoc($query);

	if (isset($_POST['btnUbahContact'])) {

		$judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $judul_2 = $_POST['judul_2'];
        $isi_2 = $_POST['isi_2'];
        $judul_3 = $_POST['judul_3'];
        $isi_3 = $_POST['isi_3'];

		$sql = mysqli_query($koneksi, "UPDATE contact SET judul = '$judul', isi = '$isi', judul_2 = '$judul_2', isi_2 = '$isi_2' ,judul_3 = '$judul_3', isi_3 = '$isi_3' WHERE id_contact = '$id_contact'");
		if ($sql)
        {
            echo "<script>
            alert('ubah data contact berhasil');
            document.location.href='admin_contact.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('ubah data contact gagal');
            document.location.href='admin_contact.php'
            </script>";
        }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Contact</title>
</head>
<body>
	<h1>Ubah Contact</h1>
	<form method="post">
        <input style="width: 400px" value="<?= $data['judul']; ?>" name="judul" type="text" id="judul" placeholder="judul" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['isi']; ?>" name="isi" type="text" id="isi" placeholder="isi" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['judul_2']; ?>" name="judul_2" type="text" id="judul_2" placeholder="judul_2" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['isi_2']; ?>" name="isi_2" type="text" id="isi_2" placeholder="isi_2" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['judul_3']; ?>" name="judul_3" type="text" id="judul_3" placeholder="judul_3" value="" required><br><br>
        <input style="width: 400px" value="<?= $data['isi_3']; ?>" name="isi_3" type="text" id="isi_3" placeholder="isi_3" value="" required><br><br>
        <br><button type="submit" name="btnUbahContact" class="submitform">Submit</button>
    </form>
</body>
</html>