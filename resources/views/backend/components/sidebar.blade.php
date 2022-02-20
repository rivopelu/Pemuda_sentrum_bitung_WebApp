<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img h-100 rounded-circle" alt="main_logo">
            <span class="ms-1 font-weight-bold">Pemuda Sentrum Bitung</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'informasi' ? 'active' : '' }}" href="/dashboard/info">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active === 'user' ? 'active' : '' }}" href="/dashboard/users">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>




        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">

        <a href="/"  class="btn btn-dark btn-sm w-100 mb-3">Back To Home</a>
        <a class="btn btn-primary btn-sm  w-100 mb-3" href="#" type="button">Informasi</a>
        <a class="btn btn-success btn-sm mb-0 w-100" href="#" type="button">Post</a>
    </div>
</aside>
