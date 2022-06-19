<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data </title>
</head>
<body>
    <h3>Form Tambah Data</h3>

    <!--menyimpan data-->
    <form method="post" action="simpan.php" enctype="multipart/form-data">
        <ul>
            <li>
                <label>
                    NIM: 
                    <input type="text" name="nim">
                </label>
            </li>
            <li>
                <label>
                    Nama: 
                    <input type="text" name="nama">
                </label>
            </li>
            <li>
                <label>
                    Prodi: 
                    <input type="text" name="prodi">
                </label>
            </li>
            <li>
                <label>
                    foto: 
                    <input type="file" name="foto">
                </label>
            </li>

            <!--untuk submit dan menambahakan-->
            <li>
                <input type="submit" name="tambah" value="Tambah">
            </li>
        </ul>
    </form>
</body>
</html>