<?php 
	require_once 'koneksi.php';
	
	$id_gallery = $_GET['id_gallery'];

	$query = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = '$id_gallery'");

	$data = mysqli_fetch_assoc($query);

	if (isset($_POST['btnUbahGallery'])) {
		$image = $_POST['image'];
		$deskripsi = $_POST['deskripsi'];
		$sql = mysqli_query($koneksi, "UPDATE gallery SET image = '$image', deskripsi = '$deskripsi' WHERE id_gallery = '$id_gallery'");
		if ($sql)
        {
            echo "<script>
            alert('ubah data gallery berhasil');
            document.location.href='admin_gallery.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('ubah data gallery gagal');
            document.location.href='admin_gallery.php'
            </script>";
        }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Gallery</title>
</head>
<body>
	<h1>Ubah Gallery</h1>
	<form method="post">
        <input style="width: 400px" value="<?= $data['image']; ?>" name="image" type="text" id="image" placeholder="image" value="" required><br><br>
        <textarea name="deskripsi" id="deskripsi" placeholder="deskripsi" rows="10" cols="50" required=""><?= $data['deskripsi']; ?></textarea><br>
        <br><button type="submit" name="btnUbahGallery" class="submitform">Submit</button>
    </form>
</body>
</html>