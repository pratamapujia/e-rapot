<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Tambah Data Guru</h4>
          </div>
          <form action="/guru/save" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Guru</label>
                  <input type="text" class="form-control" name="id_guru" autofocus>
                </div>
                <div class="form-group col-md-6">
                  <label>NIP</label>
                  <input type="text" class="form-control" name="nip">
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control" name="nama_guru">
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control selectric" name="jk_guru">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="telepon_guru">
                </div>
                <div class="form-group col-md-6">
                  <label>Profesi</label>
                  <select class="form-control selectric" name="profesi">
                    <option value="Guru Biasa">Guru Biasa</option>
                    <option value="Guru BK">Guru BK</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Status</label>
                  <select class="form-control selectric" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat_guru">
                </div>
                <div class="form-group col-md-6">
                  <label>file</label>
                  <input type="text" class="form-control" name="foto_guru">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>