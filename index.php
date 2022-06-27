<?php
require 'koneksi.php';
session_start();

//event button cari
if(isset($_POST['cari'])){
    $mahasiswa = cari($_POST['key']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <br><br>
    
    <form action="" method="post">
        <input type="text" name="key" placeholder="Isi Keyword" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    

    <table class="table table-hover" border="1">
        <!--baris header-->
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>

        <!--cek data jika tidak ditemukan-->
        <?php if(empty($mahasiswa)):?>
            <tr>
                <td colspan="6">
                    <p>Data tidak ditemukan</p>
                </td>
            </tr>
            <?php endif; ?>

        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "select * from mahasiswa");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo "<img src='img/$data[foto]' width='100' height='auto'/>";?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['prodi']; ?></td>
                <td>
                    <a href="update.php?nim=<?php echo $row['nim']; ?>">Ubah</a> &nbsp;&nbsp; <a href="">Hapus</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <br><br>
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>
