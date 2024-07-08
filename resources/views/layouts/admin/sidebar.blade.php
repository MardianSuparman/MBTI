<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        {{-- <div class="logo-icon">
            <img src="../assets/images/logo-icon.png" class="logo-img" alt="">
        </div> --}}
        <div class="logo-name flex-grow-1 float-left">
            <h5 class="mb-0">Admin</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ url('/admin') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i>
                    </div>
                    <div class="menu-title">User Management</div>
                </a>
            </li>
            <li class="menu-label">Tables</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">api</i>
                    </div>
                    <div class="menu-title">Tables</div>
                </a>
                <ul>
                    <li><a href="{{ route('pengguna.index') }}"><i
                                class="material-icons-outlined">arrow_right</i>Pengguna</a>
                    </li>
                    <li><a href="{{ route('testimoni.index') }}"><i
                                class="material-icons-outlined">arrow_right</i>Testimoni</a>
                    </li>
                    <li><a href="{{ route('pertanyaan.index') }}"><i
                                class="material-icons-outlined">arrow_right</i>Pertanyaan</a>
                    </li>
                </ul>
            </li>
            <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
