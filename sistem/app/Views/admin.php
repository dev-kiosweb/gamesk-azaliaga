<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url(); ?>/assets/admin/assets/"
  data-template="vertical-menu-template-starter"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?= $title; ?> - <?= $web['title']; ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/admin/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Page CSS -->
    <link href="<?= base_url(); ?>/assets/plugins/DataTables/datatables.min.css" rel="stylesheet">

    <!-- Helpers -->
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(); ?>/assets/admin/assets/js/config.js"></script>

    <?php $this->renderSection('css'); ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?= base_url(); ?>" class="app-brand-link">
              <span>
                  <img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" alt=""  width="40">
              </span>
              <span class="app-brand-text demo menu-text fw-bold">GAMES K'</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Page -->
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/home" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/konfigurasi" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Konfigurasi">Konfigurasi</div>
              </a>
            </li>
            
            <!-- Management -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Management</span>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/admin" class="menu-link">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div data-i18n="Kelola Admin">Akun Admin</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/pengguna" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Kelola Member">Kelola Member</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/produk" class="menu-link">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Kelola Produk">Kelola Produk</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/games" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div data-i18n="Kelola Games">Kelola Games</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/gamepopuler" class="menu-link">
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div data-i18n="Kelola Games Populer">Kelola Games Populer</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/pesanan" class="menu-link">
                <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                <div data-i18n="Kelola Pesanan">Kelola Pembelian</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/level" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Kelola Level">Kelola Level</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/level-upgrade" class="menu-link">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div data-i18n="Kelola Upgrade Level">Kelola Upgrade Level</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/kategori" class="menu-link">
                <i class="menu-icon tf-icons ti ti-list"></i>
                <div data-i18n="Kelola Kategori">Kelola Kategori</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/topup" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Kelola Deposit">Kelola Deposit</div>
              </a>
            </li>
            
            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/metode" class="menu-link">
                <i class="menu-icon tf-icons ti ti-credit-card"></i>
                <div data-i18n="Kelola Metode">Kelola Metode</div>
              </a>
            </li>

            <!-- Whatsapp -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Kelola WhatsApp">Kelola WhatsApp</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?= base_url(); ?>/admin/whatsapp/edit/1" class="menu-link">
                    <div data-i18n="Pending">Pending</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url(); ?>/admin/whatsapp/edit/2" class="menu-link">
                    <div data-i18n="Di Proses">Diproses</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url(); ?>/admin/whatsapp/edit/3" class="menu-link">
                    <div data-i18n="Sukses">Sukses</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url(); ?>/admin/whatsapp/edit/4" class="menu-link">
                    <div data-i18n="Dibatalkan">Dibatalkan</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Bantuan -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Bantuan</span>
            </li>

            <li class="menu-item">
              <a href="<?= base_url(); ?>/admin/sosmed" class="menu-link">
                <i class="menu-icon tf-icons ti ti-help"></i>
                <div data-i18n="Kelola Sosmed">Kelola Sosmed</div>
              </a>
            </li>
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                  <i class="ti ti-sm"></i>
                </a>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                  
                 <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                  >
                    <i class="ti ti-bell ti-md"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">1</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-notifications-all text-body"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Mark all as read"
                          ><i class="ti ti-mail-opened fs-4"></i
                        ></a>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span><i class="menu-icon tf-icons ti ti-file-description"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1"><a href="https://docs.kiosweb.id" target="_blank">Dokumentasi</a></h6>
                              <p class="mb-0">Pelajari Dokumentasi Penggunaan</p>
                              <small class="text-muted">Updated</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top">
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center"
                      >
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->  
                  
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url(); ?>/assets/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url(); ?>/assets/admin/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $admin['username']; ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url(); ?>/admin/password">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle">Ubah Password</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url(); ?>/admin/logout">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

           <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php $this->renderSection('content'); ?>

                </div>
                <!-- /.container-fluid -->
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
                >
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://kiosweb.id" target="_blank" class="fw-semibold">Kiosweb.id</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?= base_url(); ?>/assets/admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url(); ?>/assets/admin/assets/js/main.js"></script>

    <!-- Page JS -->

        <!-- Custom scripts -->

        <!--<script src="<?= base_url(); ?>/assets/js/app-script.js"></script>-->
        <script src="<?= base_url(); ?>/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <!--Select Plugins Js-->
        <script src="<?= base_url(); ?>/assets/plugins/select2/js/select2.min.js"></script>
        <!--Data Tables js-->
        <script src="<?= base_url(); ?>/assets/plugins/DataTables/datatables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/datatables.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        
        <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>
        <script>
            $('#datatable').DataTable();
             $(document).ready(function() {
                 $('#default-datatable').DataTable();
             });

            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        <script>
            <?php if ($admin !== false): ?>
            function hapus(link) {
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Data akan dihapus permanen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Tetap hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    }
                });
            }
            <?php endif; ?>

        </script>
        <script>
            $("#customFile").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings("label[for=customFile]").addClass("selected").html(fileName);
					});

					$("#customFile-banner").on("change", function() {
						var fileName = $(this).val().split("\\").pop();
						$(this).siblings("label[for=customFile-banner]").addClass("selected").html(fileName);
					});
        </script>
        
        <?php $this->renderSection('js'); ?>
  </body>
</html>
