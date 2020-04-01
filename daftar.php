<div class="container"><br>
    <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img src="img/amy_jones.jpg" width="300px">
        </a>
    </div>
    <div class="col-md-9">
        <div class="jumbotron">
            <h2>Form Pendaftaran Mahasiswa Baru </h2>
            <form action="<?= base_url("daftar/tambah")?>" method="POST">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Ex. Jhon Corner">
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="Ex. 1970xxxxxxxxxxx">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" id="tanggallahir" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jeniskelamin">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="number" name="telephone" id="telephone" class="form-control" placeholder="Ex. 0813xxxxxxxx">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Ex. Jhon@email.cc">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>
