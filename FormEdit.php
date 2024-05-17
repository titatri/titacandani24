<!-- Mengambil data yang akan diedit, berdasarkan id yang dipilih dan dikirim melalui link (get) -->
<?php
$id=$_GET['id'];
//membuat sql tampil data
$sqldata="SELECT * FROM tb_dosen WHERE id='$id'";
//ambil koneksi data
require_once "KoneksiDB.php";
//proses sql
$query=mysqli_query($koneksi, $sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query)
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Dosen</h2>
<!-- tag form -->
<form action="Update.php" method="POST">
    <label>Ekstensi Domain Dosen :</label>
    <input type="text" name="id" value="<?=$data['id']?>"placeholder="Ekstensi Domain Dosen" required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="nama" id="nama" value="<?=$data['nama']?>" placeholder="Nama Lengkap" required>
    <br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Email :</label>
    <input type="text" name="email" id="email" value="<?=$data['email']?>" placeholder="Email Aktif" required>
    <br>
    <label for="">No HP :</label>
    <input type="number" name="nohp" id="nohp" value="<?=$data['nohp']?>" placeholder="NO Handphone" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Update Data</button> 

</form>




