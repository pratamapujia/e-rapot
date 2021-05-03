<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Tambah Data Walas</h4>
          </div>
          <form action="/walas/save" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Walas</label>
                  <input type="text" class="form-control" name="id_walas" value="<?= $kode; ?>" readonly>
                  <!-- <div class="invalid-feedback">
                    </?= $validation->getError('id_walas'); ?>
                  </div> -->
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Guru</label>
                  <select class="form-control selectric" name="id_guru">
                    <option value="">Pilih Guru</option>
                    <?php foreach ($guru as $g) : ?>
                      <option value="<?= $g['id_guru']; ?>"><?= $g['nama_guru']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Mengampu Mapel</label>
                  <select class="form-control selectric" name="id_mapel">
                    <option value="">Pilih Mapel</option>
                    <?php foreach ($mapel as $m) : ?>
                      <option value="<?= $m['id_mapel']; ?>"><?= $m['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Wali Kelas</label>
                  <select class="form-control selectric" name="id_kelas">
                    <option value="">Pilih Kelas</option>
                    <?php foreach ($kelas as $k) : ?>
                      <option value="<?= $k['id_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
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