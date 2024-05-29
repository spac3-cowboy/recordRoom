<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('all-records') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                    All Records
                </a>
                <a class="nav-link" href="{{ route('add-record') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
    Add Record
</a>
                <a class="nav-link" href="{{ route('add-court') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                    Add Court
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Administrator
        </div>
    </nav>
</div>