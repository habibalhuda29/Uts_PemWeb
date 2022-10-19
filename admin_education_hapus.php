<?php 
	require_once 'koneksi.php';

	$id_edukasi = $_GET['id_edukasi'];

	$sql = mysqli_query($koneksi, "DELETE FROM edukasi WHERE id_edukasi = '$id_edukasi'");

	if ($sql)
        {
            echo "<script>
            alert('hapus data edukasi berhasil');
            document.location.href='admin_education.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('hapus data edukasi gagal');
            document.location.href='admin_education.php'
            </script>";
        }
 ?>