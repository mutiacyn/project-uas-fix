<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Karyawan <sup>ku</sup></div>
    </a>

    {{-- @if(auth()->user()->role == 'admin') --}}
        <!-- Menu untuk Admin -->
        @role('admin')
        <div class="sidebar-heading">
            Administrasi
        </div>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Menu Administrasi -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('karyawan.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Karyawan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-user-cog"></i>
                <span>Akun Staff</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('divisi.index') }}">
                <i class="fas fa-fw fa-sitemap"></i>
                <span>Divisi</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('jabatan.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>Jabatan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cuti.index') }}">
                <i class="fas fa-fw fa-file-export"></i>
                <span>Pengajuan Cuti</span>
            </a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        
        @endrole

        @role('staff')
        <!-- Menu untuk Staff -->
        <div class="sidebar-heading">
            Menu Karyawan
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cuti.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cuti.create') }}">
                <i class="fas fa-fw fa-file-export"></i>
                <span>Pengajuan Cuti</span>
            </a>
        </li>
        
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('staff.slip_gaji') }}">
                <i class="fas fa-fw fa-file-invoice-dollar"></i>
                <span>Slip Gaji</span>
            </a>
        </li> --}}

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    @endrole

</ul>