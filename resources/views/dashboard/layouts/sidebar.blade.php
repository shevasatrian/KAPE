<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard')? 'active': ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/report*')? 'active': ''}}" href="/dashboard/report">
            <span data-feather="file" class="align-text-bottom"></span>
            Report PO
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/staff*')? 'active': ''}}" href="/dashboard/staff">
            <span data-feather="users" class="align-text-bottom"></span>
            Staff
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/reminder*')? 'active': ''}}" href="/dashboard/reminder">
            <span data-feather="clock" class="align-text-bottom"></span>
            Reminder
            </a>
        </li>
        </ul>


    </div>
</nav>
