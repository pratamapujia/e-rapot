<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-success">
          <div class="card-header">
            <h4>Data Mata Pelajaran</h4>
            <div class="card-header-action">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmapel">
                <i class="fas fa-plus"></i> Tambah Data Mapel
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>ID Mapel</th>
                    <th>Jenis Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Singkatan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>MPL00001</td>
                    <td>Umum</td>
                    <td>Ilmu Pengetahuan Alam</td>
                    <td>IPA</td>
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
  <!-- modal form tambah Mapel -->
  <div class="modal fade" id="tambahmapel" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
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
              <input type="text" class="form-control" hidden="true" name="id_mapel" value="MPL0001">
              <div class="form-group col-md-12">
                <label>Jenis Mata Pelajaran</label>
                <select class="form-control" name="jenis_mapel">
                  <option value="Umum">Umum</option>
                  <option value="Mulok">Mulok</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label>Nama Mapel</label>
                <input type="text" class="form-control" name="nama_mapel">
              </div>
              <div class="form-group col-md-12">
                <label>Singkatan</label>
                <input type="text" class="form-control" name="singkatan">
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