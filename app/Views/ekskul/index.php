<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h4>Data Ekstrakulikuler</h4>
            <div class="card-header-action">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahekskul">
                <i class="fas fa-plus"></i> Tambah Data Ekskul
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>ID Ekskul</th>
                    <th>Nama Ekskul</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>EKS0001</td>
                    <td>Pramuka</td>
                    <td>
                      <div class="dropup">
                        <button class="btn btn-lg" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item has-icon" href="#"><i class="fas fa-edit"></i> Edit</a>
                          <a class="dropdown-item has-icon" href="#"><i class="fas fa-trash"></i> Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- modal form tambah kelas -->
  <div class="modal fade" id="tambahekskul" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Tambah Data Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-row">
              <input type="text" class="form-control" hidden="true" name="id_ekskul" value="EKS0001">
              <div class="form-group col-md-12">
                <label>Nama Ekskul</label>
                <input type="text" class="form-control" name="nama_ekskul">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary m-t-15 waves-effect">Tambah Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>