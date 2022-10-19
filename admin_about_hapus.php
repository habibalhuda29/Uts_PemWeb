<?php 
	require_once 'koneksi.php';

	$id_about = $_GET['id_about'];

	$sql = mysqli_query($koneksi, "DELETE FROM about WHERE id_about = '$id_about'");

	if ($sql)
        {
            echo "<script>
            alert('hapus data about berhasil');
            document.location.href='admin_about.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('hapus data about gagal');
            document.location.href='admin_about.php'
            </script>";
        }
 ?>