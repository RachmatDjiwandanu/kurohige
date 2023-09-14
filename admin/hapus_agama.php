<?php
include 'koneksi.php';

$query = mysqli_query($conn, "DELETE FROM agama WHERE id_agama='" .$_GET['id_agama'] . "'");

if (mysqli_affected_rows($conn) > 0 ) {
    echo "
    <script>
        alert('Data Berhasil Dihapus');
        document,location.href='agama.php';
        </script>
        ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!!!');
    document.location.href='agama.php';
    </script>
    ";

}

?>