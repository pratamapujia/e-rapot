<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <div class="card card-warning">
          <div class="card-body card-type-3">
            <div class="row">
              <a href="/guru" class="col">
                <h6 class="text-muted mb-0">Jumlah Guru</h6>
                <span class="font-weight-bold mb-0">50</span>
              </a>
              <div class="col-auto">
                <div class="card-circle l-bg-orange text-whitex">
                  <i class="fas fa-user-alt"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-info">
          <div class="card-body card-type-3">
            <div class="row">
              <a href="/siswa" class="col">
                <h6 class="text-muted mb-0">Jumlah Siswa</h6>
                <span class="font-weight-bold mb-0">562</span>
              </a>
              <div class="col-auto">
                <div class="card-circle l-bg-cyan text-white">
                  <i class="fas fa-user-graduate"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-success">
          <div class="card-body card-type-3">
            <div class="row">
              <a href="/mapel" class="col">
                <h6 class="text-muted mb-0">Jumalah Mapel</h6>
                <span class="font-weight-bold mb-0">30</span>
              </a>
              <div class="col-auto">
                <div class="card-circle l-bg-green text-white">
                  <i class="fas fa-book-open"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-primary">
          <div class="card-body card-type-3">
            <div class="row">
              <a href="/kelas" class="col">
                <h6 class="text-muted mb-0">Jumlah Kelas</h6>
                <span class="font-weight-bold mb-0">20</span>
              </a>
              <div class="col-auto">
                <div class="card-circle l-bg-purple text-white">
                  <i class="fas fa-building"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>