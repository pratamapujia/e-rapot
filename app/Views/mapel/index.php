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
                    <th class="text-left">ID Mapel</th>
                    <th class="text-left">Jenis Mapel</th>
                    <th class="text-left">Nama Mapel</th>
                    <th class="text-left">Singkatan</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-left">MPL00001</td>
                    <td class="text-left">Umum</td>
                    <td class="text-left">Ilmu Pengetahuan Alam</td>
                    <td class="text-left">IPA</td>
                    <td class="text-left">
                      <div class="btn-group mb-3 btn-group-sm" role="group">
                        <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="#"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-icon btn-danger" data-toggle="tooltip" data-placement="left" title="Hapus" href="#"><i class="fas fa-trash"></i></a>
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