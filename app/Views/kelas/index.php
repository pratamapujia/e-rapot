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
              <a href="<?= base_url(); ?>/kelas/create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Kelas
              </a>
            </div>
          </div>
          <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="mytable2" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-left">ID Kelas</th>
                    <th class="text-left">Tingkat</th>
                    <th class="text-left">Jurusan</th>
                    <th class="text-left">Nama Kelas</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kelas as $k) : ?>
                    <tr>
                      <td class="text-left"><?= $k['id_kelas']; ?></td>
                      <td class="text-left"><?= $k['tingkat']; ?></td>
                      <td class="text-left"><?= $k['jurusan']; ?></td>
                      <td class="text-left"><?= $k['nama_kelas']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="<?= base_url(); ?>/kelas/edit/<?= $k['id_kelas']; ?>"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-icon btn-danger hapus" data-toggle="tooltip" data-placement="left" title="Hapus" href="<?= base_url(); ?>/kelas/delete/<?= $k['id_kelas']; ?>"><i class="fas fa-trash"></i></a>
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
</div>

<?= $this->endSection(); ?>