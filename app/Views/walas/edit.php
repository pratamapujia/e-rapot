<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-warning">
          <div class="card-header">
            <h4>Form Ubah Data Walas</h4>
          </div>
          <form action="/walas/update/<?= $walas['id_walas']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>ID Walas</label>
                  <input type="text" class="form-control" name="id_walas" value="<?= $walas['id_walas']; ?>" readonly>
                  <div class="invalid-feedback">
                    <?= $validation->getError('id_walas'); ?>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Nama Guru</label>
                  <select class="form-control" name="id_guru">
                    <option>Pilih Guru</option>
                    <?php foreach ($guru as $g) : ?>
                      <option value="<?= $g['id_guru']; ?>" <?= $g['id_guru'] == $walas['id_guru'] ? "selected" : null; ?>><?= $g['nama_guru']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Mengampu Mapel</label>
                  <select class="form-control" name="id_mapel">
                    <option>Pilih Mapel</option>
                    <?php foreach ($mapel as $m) : ?>
                      <option value="<?= $m['id_mapel']; ?>" <?= $m['id_mapel'] == $walas['id_mapel'] ? "selected" : null; ?>><?= $m['nama_mapel']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Wali Kelas</label>
                  <select class="form-control" name="id_kelas">
                    <option>Pilih Kelas</option>
                    <?php foreach ($kelas as $k) : ?>
                      <option value="<?= $k['id_kelas']; ?>" <?= $k['id_kelas'] == $walas['id_kelas'] ? "selected" : null; ?>><?= $k['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="swal-2">Ubah Data</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>