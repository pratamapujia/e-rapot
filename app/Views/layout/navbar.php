<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
  <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="menu"></i></a></li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <span style="color: slategrey;"> Hello <?= user()->username; ?> | </span> <img alt="image" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" class="rounded-circle"></a>
      <div class="dropdown-menu dropdown-menu-right pullDown">
        <a href="#" class="dropdown-item has-icon"> <i class="fas fa-user"></i>
          My Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= base_url(); ?>/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>