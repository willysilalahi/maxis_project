<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Maxis</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Mx</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="far fa-square"></i>
                    <span>Dashboard</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Siswa</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
