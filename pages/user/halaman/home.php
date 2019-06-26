
<form name="form_mahasiwa" action="../../function/user/createkonten.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="NIM">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="nama" value="<?php echo $_SESSION ['username']; ?>"disabled>
  </div>

  <div class="form-group">
    <label for="Nama">Topik</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="topik" required>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>
  <div class="form-group">
		                                        	<label for="example-date-input" class="control-label">Tanggal Beli</label>
		                                            <input class="form-control" type="date" name="tanggal" value="2011-08-19" id="example-date-input">
		                                        </div>
  <div class="form-group">
    <label for="Alamat">Deskripsi</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="deskripsi" required></textarea>
  </div>

  

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>