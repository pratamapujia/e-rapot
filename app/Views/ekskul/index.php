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
              <a href="/ekskul/create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Kelas
              </a>
            </div>
          </div>
          <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-left">ID Ekskul</th>
                    <th class="text-left">Nama Ekskul</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($ekskul as $e) : ?>
                    <tr>
                      <td class="text-left"><?= $e['id_ekskul']; ?></td>
                      <td class="text-left"><?= $e['nama_ekskul']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="/ekskul/edit/<?= $e['id_ekskul']; ?>"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-icon btn-danger hapus" data-toggle="tooltip" data-placement="left" title="Hapus" href="/ekskul/delete/<?= $e['id_ekskul']; ?>"><i class="fas fa-trash"></i></a>
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