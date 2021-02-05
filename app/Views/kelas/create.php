<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-6">
        <div class="card card-info">
          <div class="card-header">
            <h4>Form Tambah Data Kelas</h4>
          </div>
          <form action="/kelas/save" method="POST">
            <?= csrf_field(); ?>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>ID Kelas</label>
                  <input type="text" class="form-control <?= ($validation->hasError('id_kelas')) ? 'is-invalid' : ''; ?>" name="id_kelas" value="<?= old('id_kelas'); ?>" autofocus>
                  <div class="invalid-feedback">
                    <?= $validation->getError('id_kelas'); ?>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label>Tingkat Kelas</label>
                  <select class="form-control" name="tingkat">
                    <option value="1">Kelas 1</option>
                    <option value="2">Kelas 2</option>
                    <option value="3">Kelas 3</option>
                    <option value="4">Kelas 4</option>
                    <option value="5">Kelas 5</option>
                    <option value="6">Kelas 6</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control <?= ($validation->hasError('nama_kelas')) ? 'is-invalid' : ''; ?>" name="nama_kelas" value="<?= old('nama_kelas'); ?>">
                  <div class="invalid-feedback">
                    <?= $validation->getError('nama_kelas'); ?>
                  </div>
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