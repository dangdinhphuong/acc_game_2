@extends('admin.master')
@section('title', "Dasboard")
@section('style')
<style>

</style>
@endsection
@section('content')
            <!-- Title -->
            <h1 class="h2">
                Dashboard
            </h1>

            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5
                                                    class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-success"></span>
                                                    Income
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    $3,240
                                                </h2>

                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0">
                                                    No additional income
                                                </p>
                                            </div>

                                            <span class="text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    height="32" width="32">
                                                    <defs>
                                                        <style>
                                                            .a {
                                                                fill: none;
                                                                stroke: currentColor;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title>cash-briefcase</title>
                                                    <path class="a"
                                                        d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687" />
                                                    <line class="a" x1="12" y1="9.75"
                                                        x2="12" y2="10.875" />
                                                    <line class="a" x1="12" y1="17.625"
                                                        x2="12" y2="18.75" />
                                                    <rect class="a" x="1.5" y="6.75"
                                                        width="21" height="15" rx="1.5"
                                                        ry="1.5" />
                                                    <path class="a"
                                                        d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5
                                                    class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-danger"></span>
                                                    Expense
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    $1,500
                                                </h2>

                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0 text-truncate">
                                                    + $6.50 bank charges fee
                                                </p>
                                            </div>

                                            <span class="text-primary">
                                                <svg viewBox="0 0 24 24" height="32" width="32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.75,14.25H16.717a1.342,1.342,0,0,0-.5,2.587l2.064.826a1.342,1.342,0,0,1-.5,2.587H15.75"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path d="M17.25 14.25L17.25 13.5" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M17.25 21L17.25 20.25" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path
                                                        d="M11.250 17.250 A6.000 6.000 0 1 0 23.250 17.250 A6.000 6.000 0 1 0 11.250 17.250 Z"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path d="M3.75 14.25L8.25 14.25" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M8.25 14.25L8.25 6.75" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M11.25 9.75L11.25 8.25" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M5.25 14.25L5.25 9.75" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" />
                                                    <path
                                                        d="M7.5,20.25H2.25a1.43,1.43,0,0,1-1.5-1.415V2.335A1.575,1.575,0,0,1,2.25.75H12.879a1.5,1.5,0,0,1,1.06.439l2.872,2.872a1.5,1.5,0,0,1,.439,1.06V7.5"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>

                <div class="col-xxl-7">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">

                                            <!-- Title -->
                                            <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                                Total
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                $74,925
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0 text-truncate">

                                                <!-- Badge -->
                                                <span class="badge text-bg-success-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 12.75L23.25 6 16.5 6" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5" />
                                                        <path
                                                            d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5" />
                                                    </svg>
                                                    12%
                                                </span>
                                                from $65,934
                                            </p>
                                        </div>

                                        <div class="col-6">

                                            <!-- Chart -->
                                            <div class="chart-container h-70px">
                                                <canvas id="incomeChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col">

                                            <!-- Title -->
                                            <h5
                                                class="text-uppercase text-muted fw-semibold mb-2 d-flex align-items-center">
                                                Pageviews

                                                <!-- Icon -->
                                                <a href="javascript: void(0);" class="ms-2 text-secondary"
                                                    data-bs-toggle="tooltip"
                                                    title="Pageviews is a metric defined as the total number of pages viewed.">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="14" width="14">
                                                        <path
                                                            d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z"
                                                            style="fill: currentColor" />
                                                    </svg>
                                                </a>
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                123,598
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0">

                                                <!-- Badge -->
                                                <span class="badge text-bg-danger-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 11.25L23.25 18 16.5 18" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5" />
                                                        <path
                                                            d="M23.25,18l-7.939-7.939a1.5,1.5,0,0,0-2.122,0l-3.128,3.128a1.5,1.5,0,0,1-2.122,0L.75,6"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="1.5" />
                                                    </svg>
                                                    9.2%
                                                </span>
                                                from 134,969
                                            </p>
                                        </div>
                                        <div class="col-5">

                                            <!-- Chart -->
                                            <div class="chart-container h-65px">
                                                <canvas id="pageViewsChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-xxl-5 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Projects
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                        width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25"
                                                style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25"
                                                style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">#</th>
                                        <th>Name</th>
                                        <th>Project manager</th>
                                        <th class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alibaba</td>
                                        <td class="text-muted">Jon Richardson</td>
                                        <td class="text-end"><span
                                                class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nike</td>
                                        <td class="text-muted">Alba Monday</td>
                                        <td class="text-end"><span
                                                class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Amazon</td>
                                        <td class="text-muted">Rose Watson</td>
                                        <td class="text-end"><span
                                                class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Webinning</td>
                                        <td class="text-muted">Levente Kosa</td>
                                        <td class="text-end"><span
                                                class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>eBay</td>
                                        <td class="text-muted">Andy Webb</td>
                                        <td class="text-end"><span
                                                class="badge text-bg-danger rounded-pill">Outdated</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->
                    </div>
                </div>

                <div class="col-xxl-7 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Sales
                            </h2>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0">
                                <span class="legend-circle-lg bg-primary"></span>
                                Projections
                            </h5>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0 ms-4">
                                <span class="legend-circle-lg bg-light"></span>
                                Actual
                            </h5>
                        </div>

                        <div class="card-body d-flex flex-column">

                            <!-- Chart -->
                            <div class="chart-container flex-grow-1 h-275px">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100"
                        data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                        id="users">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Users
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown ms-4">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                        width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25"
                                                style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25"
                                                style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkAllCheckboxes">
                                            </div>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="name">
                                                Full name
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="email">
                                                Email
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="id">
                                                User ID
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="date">
                                                Signed up
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort"
                                                data-sort="status">
                                                Status
                                            </a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="list">
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Hakeem Chan</span>
                                        </td>
                                        <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                        <td class="id">#9265</td>
                                        <td class="date" data-signed="1648252800">03.26.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/44bfbd93721837b9534e9dc6fc058dbaef92d03a/f9236/assets/images/profiles/profile-23.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Orli J. Goodman</span>
                                        </td>
                                        <td class="email">pede@at.com</td>
                                        <td class="id">#8545</td>
                                        <td class="date" data-signed="1627858800">08.02.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/236af360580cfc7622e3a7d309d709a5018937c5/e3ee4/assets/images/profiles/profile-16.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Halee P. Lane</span>
                                        </td>
                                        <td class="email">diam@nislNullaeu.net</td>
                                        <td class="id">#4445</td>
                                        <td class="date" data-signed="1615680000">03.14.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-primary-soft">KS</span>
                                            </div>
                                            <span class="name fw-bold">Kimberly Salinas</span>
                                        </td>
                                        <td class="email">in.lobortis.tellus@faucibusorci.co.uk</td>
                                        <td class="id">#2391</td>
                                        <td class="date" data-signed="1615939200">03.17.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/963edcf9fc0c25098f00370b3b3d021e2ddac277/e69d6/assets/images/profiles/profile-17.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Galena Oliver</span>
                                        </td>
                                        <td class="email">eleifend.nec@ligulaconsectetuerrhoncus.ca</td>
                                        <td class="id">#8987</td>
                                        <td class="date" data-signed="1607990400">12.15.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/768c1ecfdff6a59ab55d514b80bd59e8dfa28996/35a64/assets/images/profiles/profile-19.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Kelly Doyle</span>
                                        </td>
                                        <td class="email">urna.et@volutpatNulladignissim.org</td>
                                        <td class="id">#5898</td>
                                        <td class="date" data-signed="1650495600">04.21.2022</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Keane Wyatt</span>
                                        </td>
                                        <td class="email">quam@Ut.org</td>
                                        <td class="id">#3431</td>
                                        <td class="date" data-signed="1655506800">06.18.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-success-soft">NA</span>
                                            </div>
                                            <span class="name fw-bold">Nasim Aguirre</span>
                                        </td>
                                        <td class="email">nisl@mollis.net</td>
                                        <td class="id">#6701</td>
                                        <td class="date" data-signed="1602975600">10.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/23af178af51cd04f5a1b181720a77e2839e7a4be/5d54f/assets/images/profiles/profile-25.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Leo Johnston</span>
                                        </td>
                                        <td class="email">Cum.sociis@Etiambibendumfermentum.co.uk</td>
                                        <td class="id">#9258</td>
                                        <td class="date" data-signed="1624748400">06.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Macon Dean</span>
                                        </td>
                                        <td class="email">aliquam@nec.edu</td>
                                        <td class="id">#4885</td>
                                        <td class="date" data-signed="1614470400">02.28.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Yoko Grimes</span>
                                        </td>
                                        <td class="email">ut.eros@Donecporttitor.co.uk</td>
                                        <td class="id">#1960</td>
                                        <td class="date" data-signed="1635289200">10.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/395009794393b7ec5f8c3faaf9823b0a3692032b/71f55/assets/images/profiles/profile-27.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Jordan Douglas</span>
                                        </td>
                                        <td class="email">fermentum.convallis.ligula@euenimEtiam.edu</td>
                                        <td class="id">#8385</td>
                                        <td class="date" data-signed="1646265600">03.03.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/408c347002e5d3c7a119c65184b1959dac40f3d7/46d8d/assets/images/profiles/profile-30.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Carly Beard</span>
                                        </td>
                                        <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                                        <td class="id">#9380</td>
                                        <td class="date" data-signed="1654902000">06.11.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/5c7ec5413a460dc895a7798c37ce609f43ad36b0/c94b0/assets/images/profiles/profile-29.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Kareem Q. Weeks</span>
                                        </td>
                                        <td class="email">eget@aliquetProinvelit.co.uk</td>
                                        <td class="id">#9761</td>
                                        <td class="date" data-signed="1622329200">05.30.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-danger-soft">DH</span>
                                            </div>
                                            <span class="name fw-bold">Drew R. Hatfield</span>
                                        </td>
                                        <td class="email">Integer.vulputate@facilisi.edu</td>
                                        <td class="id">#4798</td>
                                        <td class="date" data-signed="1626562800">07.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/693e2209e9a62e54c60745dd18751d70c3dec10a/9d43e/assets/images/profiles/profile-22.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Kitra F. Strickland</span>
                                        </td>
                                        <td class="email">Donec.consectetuer@dolorNulla.net</td>
                                        <td class="id">#1246</td>
                                        <td class="date" data-signed="1651791600">05.06.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Jack Dennis</span>
                                        </td>
                                        <td class="email">Quisque.libero.lacus@torquentper.com</td>
                                        <td class="id">#1099</td>
                                        <td class="date" data-signed="1658703600">07.25.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/d48629dc873bf03c72cd58826b5de65bc800aaac/5bb69/assets/images/profiles/profile-10.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Tyler Hartman</span>
                                        </td>
                                        <td class="email">arcu.imperdiet@Pellentesqueultriciesdignissim.com</td>
                                        <td class="id">#9151</td>
                                        <td class="date" data-signed="1651359600">05.01.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/14bd6c6c1ba1296a1542d31d7dd9490e8bc9e472/d1f70/assets/images/profiles/profile-18.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Hally Gilmore</span>
                                        </td>
                                        <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                                        <td class="id">#9846</td>
                                        <td class="date" data-signed="1633302000">10.04.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="../d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpg"
                                                    alt="..." class="avatar-img" width="30"
                                                    height="30">
                                            </div>
                                            <span class="name fw-bold">Rosalyn Cherry</span>
                                        </td>
                                        <td class="email">at.egestas.a@eunullaat.co.uk</td>
                                        <td class="id">#9564</td>
                                        <td class="date" data-signed="1593558000">07.01.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-5 text-secondary small">
                                    Showing: <span class="list-pagination-page-first"></span> - <span
                                        class="list-pagination-page-last"></span> of <span
                                        class="list-pagination-pages"></span>
                                </div>

                                <!-- Pagination -->
                                <ul class="pagination list-pagination mb-0"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
@endsection
@section('javascript')

@endsection