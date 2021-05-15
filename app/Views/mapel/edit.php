<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Ubah Data Mapel</h4>
          </div>
          <form action="<?= base_url(); ?>/mapel/update/<?= $mapel['id_mapel']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Mapel</label>
                  <input type="text" class="form-control" name="id_mapel" value="<?= $mapel['id_mapel']; ?>" readonly>
                </div>
                <div class="form-group col-md-12">
                  <label>Jenis Mata Pelajaran</label>
                  <select class="form-control" name="jenis_mapel">
                    <option value=""> Pilih </option>
                    <option value="Umum" <?= $mapel['jenis_mapel'] == "Umum" ? "selected" : null; ?>>Umum</option>
                    <option value="Mulok" <?= $mapel['jenis_mapel'] == "Mulok" ? "selected" : null; ?>>Mulok</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Mapel</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_mapel')) ? 'is-invalid' : ''; ?>" name="nama_mapel" value="<?= (old('nama_mapel')) ? old('nama_mapel') : $mapel['nama_mapel']; ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_mapel'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Singkatan</label>
                  <input type="text" class="form-control <?= ($validation->hasError('singkatan')) ? 'is-invalid' : ''; ?>" name="singkatan" value="<?= (old('singkatan')) ? old('singkatan') : $mapel['singkatan']; ?>">
                  <div class="infalid-feedback">
                    <?= $validation->getError('singkatan'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>