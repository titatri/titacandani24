<h2>Tambah Data Dosen</h2>
 <!-- tag form -->
 <form action="Save.php" method="POST">
 <label>Ekstensi Domain Dosen :</label>
 <input type="text" name="id" id="id" placeholder="Id Dosen"required>
 <br>
 <label>Nama Dosen :</label>
 <input type="text" name="nama" id="nama" placeholder="Nama Lengkap"required>
 <br>
 <label for="">Alamat :</label>
 <input type="text" name="alamat" id="alamat" placeholder="AlamatLengkap" required>
 <br>
 <label for="">Email :</label>
 <input type="text" name="email" id="email" placeholder="Email Aktif" required>
 <br>
 <label for="">Nomor HP :</label>
 <input type="number" name="nohp" id="nohp" placeholder="Nomor HP" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Kirim Data</button>
 </form>