<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="{{ asset('uploads/' . $konten->icon) }}" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        .modal-header-custom {
            background-color: #007bff;
            color: white;
        }

        .modal-footer-custom {
            justify-content: space-between;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Halaman Utama</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <img src="{{ asset('uploads/' . $konten->logo) }}" alt="Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $konten->nama_web }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('uploads/' . Auth::user()->foto) }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('admin.edit_profile') }}" class="d-block">{{ Auth::user()->nama_depan }}
                        </a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-dashboard"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.edit_profile') }}"
                                class="nav-link {{ Request::is('admin/edit_profile') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Edit Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home_page.index') }}"
                                class="nav-link {{ Request::is('admin/home_page*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.rute_lokasi.index') }}"
                                class="nav-link {{ Request::is('admin/rute_lokasi*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-map-marker-alt"></i>
                                <p>Rute Lokasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jadwal_keberangkatan.index') }}"
                                class="nav-link {{ Request::is('admin/jadwal_keberangkatan*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>Jadwal Keberangkatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jadwal_kedatangan.index') }}"
                                class="nav-link {{ Request::is('admin/jadwal_kedatangan*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>Jadwal Kedatangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.mobil_elf.index') }}"
                                class="nav-link {{ Request::is('admin/mobil_elf*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-bus"></i>
                                <p>Mobil Elf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.detail_elf.index') }}"
                                class="nav-link {{ Request::is('admin/detail_elf*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-info-circle"></i>
                                <p>Detail Elf</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pesan_pelanggan.index') }}"
                                class="nav-link {{ Request::is('admin/pesan_pelanggan') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Pesan Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.faqs.index') }}"
                                class="nav-link {{ Request::is('admin/faqs*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>FAQs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog.index') }}"
                                class="nav-link {{ Request::is('admin/blog*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-blog"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sponsor.index') }}"
                                class="nav-link {{ Request::is('admin/sponsor*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-donate"></i>
                                <p>Sponsor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="nav-icon fas fa-sign-out"></i>
                                <p>Logout</p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                {{ $konten->teks_footer }}
            </div>
            <strong>Copyright &copy; 2024 <a href="/">{{ $konten->nama_web }}</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar dari aplikasi ini?
                </div>
                <div class="modal-footer modal-footer-custom">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-custom">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ruteLokasiTable').DataTable({
                "responsive": true,
                "lengthChange": true,
                "searching": true,
                "paging": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ entri",
                    "search": "Cari:",
                    "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
</body>

</html>
