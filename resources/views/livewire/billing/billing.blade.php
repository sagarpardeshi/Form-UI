@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto ms-3">
                    <span class="avatar avatar-sm rounded-circle"
                        style="background-image: url({{ asset('assets/static/browsers/edge.svg') }})"></span>
                </div>
                <div class="col">
                    <h2 class="page-title mb-1">GoodPeople Hiring Inc.</h2>
                    <div class="row g-2">
                        <div class="col-auto me-2">
                            <a href="#" class="link-reset link-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                </svg>
                                San Fransisco, California
                            </a>
                        </div>
                        <div class="col-auto me-2">
                            <a href="#" class="link-reset link-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M3.6 9h16.8"></path>
                                    <path d="M3.6 15h16.8"></path>
                                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                </svg>
                                https://goodpeople-hiring.com
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a class="btn btn-success" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up-right"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M17 7l0 10" />
                                <path d="M7 17l10 -10" />
                                <path d="M8 7l9 0l0 9" />
                            </svg>
                            <span>Upgrade Plan</span>
                        </a>
                        <a class="btn btn-primary" href="#">
                            <i class="icon d-md-none d-lg-inline-block icon las la-wallet"></i>
                            <span>Purchase Credit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-3">
                        <!-- Credit Usage -->
                        <div class="card p-3">
                            <!-- Header -->
                            <div class="card-header border-0">
                                <div class="w-100 d-flex align-items-center justify-content-between gap-3">
                                    <!-- Left -->
                                    <div class="d-flex align-items-center gap-3 min-w-0">
                                        <div class="d-flex align-items-center justify-content-center rounded-circle bg-blue-lt"
                                            style="width: 56px; height: 56px">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="28" height="28"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M9 14c0 1.657 2.239 3 5 3s5 -1.343 5 -3s-2.239 -3 -5 -3s-5 1.343 -5 3" />
                                                <path d="M9 14v4c0 1.656 2.239 3 5 3s5 -1.344 5 -3v-4" />
                                                <path
                                                    d="M3 6c0 1.072 1.144 2.062 3 2.598s4.144 .536 6 0s3 -1.526 3 -2.598s-1.144 -2.062 -3 -2.598s-4.144 -.536 -6 0s-3 1.526 -3 2.598z" />
                                                <path d="M3 6v10c0 .888 .772 1.45 2 2" />
                                                <path d="M3 11c0 .888 .772 1.45 2 2" />
                                            </svg>
                                        </div>

                                        <div class="d-flex flex-column justify-content-center">
                                            <h3 class="lh-1 mb-1">Credit Usage</h3>
                                            <small class="text-secondary">
                                                Monthly workspace credit consumption and
                                                allocation breakdown
                                            </small>
                                        </div>
                                    </div>

                                    <!-- Right Dropdown -->
                                    <div class="dropdown flex-nowrap">
                                        <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-dots" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-download" width="18" height="18"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                    <path d="M7 11l5 5l5 -5" />
                                                    <path d="M12 4l0 12" />
                                                </svg>

                                                <span>Download Report</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="card-body pt-3">
                                <!-- Usage Summary -->
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-3">
                                    <div>
                                        <div class="text-muted mb-1">
                                            You've used
                                            <strong class="text-body">6,854 credits</strong>
                                            out of your monthly
                                            <strong class="">8,000 credits</strong>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="badge bg-red-lt border-0 px-3 py-2">
                                            85% Used
                                        </span>
                                    </div>
                                </div>

                                <!-- Progress -->
                                <div class="progress progress-separated progress-sm mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"></div>

                                    <div class="progress-bar bg-info" role="progressbar" style="width: 24%"></div>

                                    <div class="progress-bar bg-success" role="progressbar" style="width: 17%"></div>
                                </div>

                                <!-- Legend -->
                                <div class="row row-cards gy-3">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="legend bg-primary"></span>

                                            <div class="flex-fill min-w-0">
                                                <div class="small fw-medium">
                                                    Form Responses
                                                </div>

                                                <div class="text-muted small">
                                                    3,520 credits
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="legend bg-info"></span>

                                            <div class="flex-fill min-w-0">
                                                <div class="small fw-medium">AI Generation</div>

                                                <div class="text-muted small">
                                                    1,920 credits
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="legend bg-success"></span>

                                            <div class="flex-fill min-w-0">
                                                <div class="small fw-medium">File Uploads</div>

                                                <div class="text-muted small">
                                                    1,414 credits
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="legend"></span>

                                            <div class="flex-fill min-w-0">
                                                <div class="small fw-medium">Free</div>

                                                <div class="text-muted small">
                                                    1,146 credits
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Insight -->
                                <div class="mt-4 pt-3 border-top">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="icon text-muted flex-shrink-0 las la-info-circle"></i>
                                        <div class="small text-muted lh-base">
                                            AI generation usage increased by
                                            <strong class="text-body">18%</strong>
                                            this billing cycle compared to the previous month.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <!-- Invoice History -->
                        <div class="card p-3 border-0">

                            <!-- Header -->
                            <div class="card-header border-0">

                                <div class="w-100 d-flex align-items-center justify-content-between gap-3">

                                    <!-- Left -->
                                    <div class="d-flex align-items-center gap-3 min-w-0">

                                        <div class="d-flex align-items-center justify-content-center rounded-circle bg-green-lt"
                                            style="width: 56px; height: 56px">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="28" height="28"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                                <path
                                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />

                                                <path d="M9 7l6 0" />
                                                <path d="M9 11l6 0" />
                                                <path d="M9 15l4 0" />

                                            </svg>

                                        </div>

                                        <div class="d-flex flex-column justify-content-center">
                                            <h3 class="lh-1 mb-1">Billing And Invoice</h3>

                                            <small class="text-secondary">
                                                View invoice history, payment status and billing activity
                                            </small>
                                        </div>

                                    </div>

                                    <!-- Right Dropdown -->
                                    <div class="dropdown flex-nowrap">

                                        <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-dots" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">

                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />

                                            </svg>

                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a class="dropdown-item d-flex align-items-center gap-2" href="#">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">

                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                    <path d="M7 11l5 5l5 -5" />
                                                    <path d="M12 4l0 12" />

                                                </svg>

                                                <span>Export Invoices</span>

                                            </a>

                                            <a class="dropdown-item d-flex align-items-center gap-2" href="#">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">

                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                                    <path d="M3 10l18 0" />
                                                    <path d="M7 15l.01 0" />
                                                    <path d="M11 15l2 0" />

                                                </svg>

                                                <span>Manage Payment Methods</span>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- Body -->
                            <div class="card-body">

                                <!-- Summary -->
                                <div
                                    class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">

                                    <div>

                                        <div class="text-muted mb-1">
                                            You've paid
                                            <strong class="text-body">$60,400</strong>
                                            across
                                            <strong>12 invoices</strong>
                                            this year
                                        </div>

                                    </div>

                                    <div class="d-flex align-items-center gap-2 flex-wrap">

                                        <span class="badge bg-green-lt border-0 px-3 py-2">
                                            10 Paid
                                        </span>

                                        <span class="badge bg-yellow-lt border-0 px-3 py-2">
                                            1 Pending
                                        </span>

                                        <span class="badge bg-red-lt border-0 px-3 py-2">
                                            1 Overdue
                                        </span>

                                    </div>

                                </div>

                                <!-- Invoice Table -->
                                <div class="table-responsive rounded-4 border overflow-visible">

                                    <table class="table table-vcenter table-striped card-table mb-0">

                                        <thead class="bg-light">
                                            <tr>
                                                <th>Invoice</th>
                                                <th>Status</th>
                                                <th>Billing Date</th>
                                                <th>Usage</th>
                                                <th>Amount</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <!-- Paid Invoice -->
                                            <tr>

                                                <td>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="avatar bg-green-lt avatar-rounded avatar-shadow-0">

                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="22"
                                                                height="22" viewBox="0 0 24 24" stroke-width="1.8"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round">

                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                                                <path
                                                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />

                                                                <path d="M9 7l6 0" />
                                                                <path d="M9 11l6 0" />
                                                                <path d="M9 15l4 0" />

                                                            </svg>

                                                        </div>

                                                        <div>

                                                            <div class="fw-bold ">
                                                                INV-2026-1042
                                                            </div>

                                                            <div class="text-muted small">
                                                                Professional Workspace • Visa ending in 0108
                                                            </div>

                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-green-lt">
                                                        Paid
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="fw-medium">
                                                        May 01, 2026
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="fw-medium">
                                                        84,120 Credits
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="fw-bold fs-3">
                                                        $6,000
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown flex-nowrap">
                                                        <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-dots" width="44"
                                                                height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                                <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                            </svg>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">
                                                                <i
                                                                    class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                                                Open
                                                            </a>

                                                            <a class="dropdown-item" href="#">
                                                                <i
                                                                    class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                                                Download Invoice
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>

                                            <!-- Pending Invoice -->
                                            <tr class="">

                                                <td>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="avatar bg-orange-lt avatar-shadow-0 avatar-rounded">

                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="22"
                                                                height="22" viewBox="0 0 24 24" stroke-width="1.8"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round">

                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M12 9v4" />
                                                                <path d="M12 16v.01" />
                                                                <path
                                                                    d="M5.07 19h13.86c1.54 0 2.5 -1.67 1.73 -3l-6.93 -12c-.77 -1.33 -2.69 -1.33 -3.46 0l-6.93 12c-.77 1.33 .19 3 1.73 3" />

                                                            </svg>

                                                        </div>

                                                        <div>

                                                            <div class="fw-bold ">
                                                                INV-2026-1043
                                                            </div>

                                                            <div class="text-muted small">
                                                                AI Usage Overage • Auto debit scheduled
                                                            </div>

                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-orange-lt">
                                                        Pending
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="fw-medium">
                                                        May 08, 2026
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="fw-medium">
                                                        22,840 Credits
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="fw-bold fs-3">
                                                        $2,400
                                                    </div>
                                                </td>

                                                <td class="text-end">

                                                    <div class="d-flex justify-content-end gap-2">
                                                        <a href="#" class="btn btn-warning btn-sm">
                                                            Pay Now
                                                        </a>

                                                        <div class="dropdown flex-nowrap">
                                                            <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon icon-tabler icon-tabler-dots" width="44"
                                                                    height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                    <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                                    <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                                </svg>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">
                                                                    <i
                                                                        class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                                                    Open
                                                                </a>

                                                                <a class="dropdown-item" href="#">
                                                                    <i
                                                                        class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                                                    Download Invoice
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                                <!-- Footer Insight -->
                                <div class="mt-4 pt-3 border-top">

                                    <div class="d-flex align-items-center gap-2">

                                        <i class="icon text-muted flex-shrink-0 las la-info-circle"></i>

                                        <div class="small text-muted lh-base">
                                            Your monthly invoice amount increased by
                                            <strong class="text-body">12%</strong>
                                            due to higher AI generation and API usage this billing cycle.
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var el;
            window.TomSelect &&
                new TomSelect((el = document.getElementById("encryption")), {
                    allowEmptyOption: false,
                    create: false
                });
        });
    </script>
@endpush