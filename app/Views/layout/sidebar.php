<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('home'); ?>"> <img alt="image" src="<?= base_url(); ?>/img/default.svg" class="header-logo" /> <span class="logo-name">E-Raport</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="nav-item <?= $request->uri->getPath() == 'home' ? 'active' : ''; ?>">
        <a href="<?= base_url('home') ?>" class="nav-link"><i class="fas fa-tv"></i> <span>Dashboard</span></a>
      </li>
      <?php if (in_groups('admin')) : ?>
        <li class="nav-item <?= $request->uri->getPath() == 'guru' ? 'active' : ($request->uri->getPath() == 'guru/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('guru'); ?>" class="nav-link"><i class="fas fa-users"></i> <span>Data Guru</span></a>
        </li>
        <li class="nav-item <?= $request->uri->getPath() == 'walas' ? 'active' : ($request->uri->getPath() == 'walas/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('walas'); ?>" class="nav-link"><i class="fas fa-server"></i> <span>Data Wali Kelas</span></a>
        </li>
        <li class="nav-item <?= $request->uri->getPath() == 'siswa' ? 'active' : ($request->uri->getPath() == 'siswa/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('siswa'); ?>" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Data Siswa</span></a>
        </li>
        <li class="nav-item <?= $request->uri->getPath() == 'kelas' ? 'active' : ($request->uri->getPath() == 'kelas/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('kelas'); ?>" class="nav-link"><i class="fas fa-building"></i> <span>Data Kelas</span></a>
        </li>
        <li class="nav-item <?= $request->uri->getPath() == 'mapel' ? 'active' : ($request->uri->getPath() == 'mapel/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('mapel'); ?>" class="nav-link"><i class="fas fa-book"></i> <span>Data Mapel</span></a>
        </li>
        <li class="nav-item <?= $request->uri->getPath() == 'ekskul' ? 'active' : ($request->uri->getPath() == 'ekskul/create' ? 'active' : ''); ?>">
          <a href="<?= base_url('ekskul'); ?>" class="nav-link"><i class="fas fa-futbol"></i> <span>Data Ekskul</span></a>
        </li>
      <?php endif; ?>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="far fa-address-book"></i> <span>Nilai Siswa</span></a>
      </li>
    </ul>
  </aside>
</div>