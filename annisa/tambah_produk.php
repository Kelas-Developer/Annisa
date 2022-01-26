<?php
    include('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk dengan gambar</title>
    <style>
        * {
    font-family: 'Trebuchet MS';
}

h1 {
    text-transform: uppercase;
    color: salmon;
}

button {
    background-color: salmon;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    font-size: 12px;
    border: 0px;
    margin-top: 20px;
}

label {
    margin-top: 10px;
    float: left;
    text-align: left;
    width: 100%;
}

input {
    padding: 6px;
    width: 100%;
    box-sizing: border-box;
    background: #f8f8f8;
    border: 2px solid #ccc;
    outline-color: salmon;
}

div {
    width: 100%;
    height: auto;
}

.base {
    width: 400px;
    height: auto;
    padding: 20px;
    margin-left: auto;
    margin-right: auto;
    background: #ededed;
}
    </style>
</head>
<body>
    <center>
        <h1>Tambah Produk</h1>
    </center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
         <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" autofocus="" required=""/>
            </div>
            <div>
                <label>Deskripsi</label>
                <input type="text" name="deskripsi">
            </div>
            <div>
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" required="" />
            </div>
            <div>
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" required="" />
            </div>
            <div>
                <label>Gambar Produk</label>
                <input type="file" name="gambar_produk" required="" />
            </div>
            <div>
                <button type="submit">Simpan Produk</button> 
            </div>
        </section>
    </form>
</body>
</html>