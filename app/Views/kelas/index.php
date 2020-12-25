<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-info">
          <div class="card-header">
            <h4>Data Kelas</h4>
            <div class="card-header-action">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkelas">
                <i class="fas fa-plus"></i> Tambah Data Kelas
              </button>
            </div>
          </div>
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>SUCCESS</strong> <?= session()->getFlashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-center">ID Kelas</th>
                    <th>Tingkat</th>
                    <th>Nama Kelas</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kelas as $k) : ?>
                    <tr>
                      <td class="text-center"><?= $k['id_kelas']; ?></td>
                      <td><?= $k['tingkat']; ?></td>
                      <td><?= $k['nama_kelas']; ?></td>
                      <td>
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <!-- <a class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="left" title="Detail" href="#"><i class="fas fa-eye"></i></a> -->
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="#"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="left" title="Hapus" href="#"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- modal form tambah kelas -->
  <div class="modal fade" id="tambahkelas" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Tambah Data Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kelas/save" method="POST">
            <?= csrf_field(); ?>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label>ID Kelas</label>
                <input type="text" class="form-control" name="id_kelas">
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
                <input type="text" class="form-control" name="nama_kelas">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>