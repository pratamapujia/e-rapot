<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Tambah Data Siswa</h4>
          </div>
          <form action="/siswa/save" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Siswa</label>
                  <input type="text" class="form-control" name="id_siswa">
                </div>
                <div class="form-group col-md-6">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" maxlength="10" required>
                </div>
                <div class="form-group col-md-6">
                  <label>NISN</label>
                  <input type="text" class="form-control" name="nisn" maxlength="12" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="nama_siswa">
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2" name="jk_siswa" required>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir">
                </div>
                <div class="form-group col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Agama</label>
                  <select class="form-control select2" name="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Khonghucu</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Siswa</label>
                  <input type="text" class="form-control" name="alamat_siswa" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Siswa</label>
                  <input type="text" class="form-control" name="telepon_siswa" maxlength="12">
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ayah</label>
                  <input type="text" class="form-control" name="nama_ayah" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ayah</label>
                  <input type="text" class="form-control" name="pekerjaan_ayah" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Ibu</label>
                  <input type="text" class="form-control" name="nama_ibu" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Pekerjaan Ibu</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat Orang Tua</label>
                  <input type="text" class="form-control" name="alamat_ortu" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon Orang Tua</label>
                  <input type="text" class="form-control" name="telepon_ortu" maxlength="12">
                </div>
                <div class="form-group col-md-6">
                  <label>Masukkan Foto Siswa</label>
                  <input type="text" class="form-control" name="foto_siswa" required>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" id="swal-2">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>