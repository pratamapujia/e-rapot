<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card card-danger">
          <div class="card-header">
            <h4>Data Siswa</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-danger btn-icon icon-left">
                <i class="far fa-file-alt"></i> Laporan
              </a>
              <a href="<?= base_url(); ?>/siswa/create" class="btn btn-primary btn-icon icon-left">
                <i class="fas fa-plus"></i> Tambah Data Siswa
              </a>
            </div>
          </div>
          <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="mytable" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-left">
                      ID Siswa
                    </th>
                    <th class="text-left">Profile</th>
                    <th class="text-left">NIS</th>
                    <th class="text-left">Nama Siswa</th>
                    <th class="text-left">Jenis Kelamin</th>
                    <th class="text-left">Agama</th>
                    <th class="text-left">Alamat Siswa</th>
                    <th class="text-left">Telepon Siswa</th>
                    <th class="text-left">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($siswa as $s) : ?>
                    <tr>
                      <td class="text-left"><?= $s['id_siswa']; ?></td>
                      <td>
                        <img alt="image" src="<?= base_url(); ?>/img/fsiswa/<?= $s['foto_siswa']; ?>" width="35">
                      </td>
                      <td class="text-left"><?= $s['nis']; ?></td>
                      <td class="text-left"><?= $s['nama_siswa']; ?></td>
                      <td class="text-left"><?= $s['jk_siswa']; ?></td>
                      <td class="text-left"><?= $s['agama']; ?></td>
                      <td class="text-left"><?= $s['alamat_siswa']; ?></td>
                      <td class="text-left"><?= $s['telepon_siswa']; ?></td>
                      <td class="text-left">
                        <div class="btn-group mb-3 btn-group-sm" role="group">
                          <a class="btn btn-icon btn-info" data-toggle="tooltip" data-placement="left" title="Detail" href="<?= base_url(); ?>/siswa/detail/<?= $s['id_siswa']; ?>"><i class="fas fa-eye"></i></a>
                          <a class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="left" title="Edit" href="<?= base_url(); ?>/siswa/edit/<?= $s['id_siswa']; ?>"><i class="fas fa-edit"></i></a>
                          <!-- <form action="/siswa/<?= $s['id_siswa']; ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" data-toggle="tooltip" data-placement="left" title="Hapus" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></button>
                          </form> -->
                          <a href="<?= base_url(); ?>/siswa/delete/<?= $s['id_siswa']; ?>" class="btn btn-icon btn-danger hapus" data-toggle="tooltip" data-placement="left" title="Hapus"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
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