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
              <a href="/mapel/create" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data Mapel
              </a>
            </div>
          </div>
          <!-- </?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>SUCCESS</strong> </?= session()->getFlashdata('pesan'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </?php endif; ?> -->
          <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
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
                  <?php foreach ($mapel as $m) : ?>
                    <tr>
                      <td class="text-left"><?= $m['id_mapel']; ?></td>
                      <td class="text-left"><?= $m['jenis_mapel']; ?></td>
                      <td class="text-left"><?= $m['nama_mapel']; ?></td>
                      <td class="text-left"><?= $m['singkatan']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
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
</div>

<?= $this->endSection(); ?>