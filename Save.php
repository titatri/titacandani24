<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalambasisdata.
 require_once "KoneksiDB.php";
 //cek form yang di kirim
  if($_SERVER['REQUEST_METHOD']=="POST"){
 //ambil data dari form, simpan dalam variabel
 $id=$_POST['id']; //yg didalam tanda kutip harus sama dengan id diform
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $email=$_POST['email'];
 $nohp=$_POST['nohp'];
 //buat SQL untuk simpan data
 $sqlsave="INSERT INTO tb_dosen VALUES
('$id','$nama','$alamat','$email','$nohp')";
 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlsave)){
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah disimpan');window.location.assign('TampilData.php'); </script>";
 }
}
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key,jik ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.