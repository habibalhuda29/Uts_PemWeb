<?php 
	require_once 'koneksi.php';

	$id_contact = $_GET['id_contact'];

	$sql = mysqli_query($koneksi, "DELETE FROM contact WHERE id_contact = '$id_contact'");

	if ($sql)
        {
            echo "<script>
            alert('hapus data contact berhasil');
            document.location.href='admin_contact.php'
            </script>";
        }
        else 
        {
            echo "<script>
            alert('hapus data contact gagal');
            document.location.href='admin_contact.php'
            </script>";
        }
 ?>