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
              <a href="tambah-siswa.php" class="btn btn-primary btn-icon icon-left">
                <i class="fas fa-plus"></i> Tambah Data Siswa
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="save-stage" style="width:100%;">
                <thead>
                  <tr>
                    <th class="text-center">
                      #
                    </th>
                    <th>Profile</th>
                    <th>ID Siswa</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat Siswa</th>
                    <th>Telepon Siswa</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat Ortu</th>
                    <th>Telepon Ortu</th>
                    <th>Nama Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Alamat Wali</th>
                    <th>Telepon Wali</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      <img alt="image" src="assets/img/users/user-5.png" width="35">
                    </td>
                    <td>SWA00001</td>
                    <td>0088121</td>
                    <td>
                      12098237123213
                    </td>
                    <td>Pratama Puji Ariyanto</td>
                    <td>Laki-Laki</td>
                    <td>Sidoarjo</td>
                    <td>26-08-2000</td>
                    <td>Islam</td>
                    <td>Jl. Tropodo 1 Barat</td>
                    <td>083830694069</td>
                    <td>Budi Yanto</td>
                    <td>Karyawan Swasta</td>
                    <td>Puji Istiani</td>
                    <td>Ibu Rumah Tangga</td>
                    <td>Jl. Trpodo 1 Barat</td>
                    <td>081553566510</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
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
</div>

<?= $this->endSection(); ?>