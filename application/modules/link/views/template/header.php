<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="sidebarMenuOpen" class="burger-menu"><i data-feather="arrow-left"></i></a>
    <div class="navbar-brand">
        <a href="<?= site_url('dashboard') ?>" class="df-logo">
            <img style="width:175px;"  src="<?= base_url() ?>assets/backend/images/logo-cms.png" alt="CMS Logo">
        </a>
    </div>
      
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="<?= site_url('dashboard') ?>" class="df-logo"><img style="width:125px;"  src="<?= base_url() ?>assets/images/logo-cms.png" alt="CMS Logo"></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div>
    </div>

    <div class="navbar-right">
        <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
        <div class="dropdown dropdown">
            <div class="dropdown dropdown-profile">
                <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="<?= $this->session->userdata('photo') != null ? base_url() . 'uploads/users/'. $this->session->userdata('photo')  : 'https://via.placeholder.com/500' ?>" class="rounded-circle" alt="">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right tx-13">
                    <div class="avatar avatar-lg mg-b-15">
                        <img src="<?= $this->session->userdata('photo') != null ? base_url() . 'uploads/users/'. $this->session->userdata('photo')  : 'https://via.placeholder.com/500' ?>" class="rounded-circle" alt="">
                    </div>
                    <h6 class="tx-semibold mg-b-5"><?= $user_p->username ?></h6>
                    <p class="mg-b-25 tx-12 tx-color-03"><?= $user_p->email ?></p>

                    <a href="" class="dropdown-item"><i data-feather="settings"></i>Settings</a>
                    <a href="<?= site_url('admin/profile') ?>" class="dropdown-item"><i data-feather="user-x"></i>Profile</a>
                    <a href="<?= site_url('administrator/logout') ?>" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
                </div>
            </div>
        </div>

        <div class="navbar-search">
            <div class="navbar-search-header">
                <input type="search" class="form-control" placeholder="Type and hit enter to search...">
                <button class="btn"><i data-feather="search"></i></button>
                <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
            </div>
        </div>
    </div>
</header>