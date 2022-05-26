<nav class="navbar shadow-sm fixed-top navbar-light bg-">
    <div class="container-fluid">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideBarMenu"
            aria-controls="sideBarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Side Bar Menu --}}
        <div class="offcanvas offcanvas-start sideCanvas" tabindex="-1" id="sideBarMenu"
            aria-labelledby="sideBarMenuLabel">
            <div class="offcanvas-header p-2 sideCanvas">
                <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <span class="navbar-toggler-icon navbar-tosca"></span>
                </button>
                <a class="navbar-brand text-start me-auto ps-3" href="dashboard">
                    <img src="\images\BNEC Logo.png" alt="" width="90">
                </a>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li>
                        <a class="dropdown-item mb-2" aria-current="page" href="dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2" href="member">Members</a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2" href="#">Learning Management</a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2" href="#">Talent Development</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Reschedule Request</a>
                    </li>
                </ul>
            </div>
        </div>

        <a class="navbar-brand text-start me-auto ps-3" href="dashboard">
            <img src="\images\BNEC Logo.png" alt="" width="90">
        </a>
        <a class="navbar-brand" href="#">
            <i class="bi bi-box-arrow-right"></i>
        </a>
    </div>
</nav>
