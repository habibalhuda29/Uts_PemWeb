<?php 
	require_once 'koneksi.php';

	$id_gallery = $_GET['id_gallery'];

	$sql = mysqli_query($koneksi, "DELETE FROM gallery WHERE id_gallery = '$id_gallery'");

	if ($sql)
        {
            echo "<script>
            alert('hapus data gallery berhasil');
            document.location.href='admin_gallery.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('hapus data gallery gagal');
            document.location.href='admin_gallery.php'
            </script>";
        }
 ?>