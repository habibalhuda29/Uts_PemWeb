<?php 
	require_once 'koneksi.php';

	$id_skill = $_GET['id_skill'];

	$sql = mysqli_query($koneksi, "DELETE FROM skill WHERE id_skill = '$id_skill'");

	if ($sql)
        {
            echo "<script>
            alert('hapus data skill berhasil');
            document.location.href='admin_skill.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('hapus data skill gagal');
            document.location.href='admin_skill.php'
            </script>";
        }
 ?>