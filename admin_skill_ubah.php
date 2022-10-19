<?php 
	require_once 'koneksi.php';
	
	$id_skill = $_GET['id_skill'];

	$query = mysqli_query($koneksi, "SELECT * FROM skill WHERE id_skill = '$id_skill'");

	$data = mysqli_fetch_assoc($query);

	if (isset($_POST['btnUbahSkill'])) {
		$nama_skill = $_POST['nama_skill'];
		$progress_bar = $_POST['progress_bar'];
		$sql = mysqli_query($koneksi, "UPDATE skill SET nama_skill = '$nama_skill', progress_bar = '$progress_bar' WHERE id_skill = '$id_skill'");
		if ($sql)
        {
            echo "<script>
            alert('ubah data skill berhasil');
            document.location.href='admin_skill.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('ubah data skill gagal');
            document.location.href='admin_skill.php'
            </script>";
        }
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah skill</title>
</head>
<body>
	<h1>Ubah skill</h1>
	<form method="post">
        <input style="width: 400px" value="<?= $data['nama_skill']; ?>" name="nama_skill" type="text" id="nama_skill" placeholder="nama_skill" value="" required><br><br>
        <textarea name="progress_bar" id="progress_bar" placeholder="progress_bar" rows="10" cols="50" required=""><?= $data['progress_bar']; ?></textarea><br>
        <br><button type="submit" name="btnUbahSkill" class="submitform">Submit</button>
    </form>
</body>
</html>