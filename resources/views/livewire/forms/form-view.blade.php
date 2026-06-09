@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Form Details</h2>
                    <div class="text-muted mt-1">
                        Detailed analytics for Candidate Feedback form
                    </div>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list d-flex align-items-center">

                        <!-- Back Button -->
                        <a href="/forms" class="btn">
                            <i class="ti ti-arrow-left icon"></i>
                            Back to Forms
                        </a>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="btn btn-icon rounded-circle p-2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                    Download
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-link"></i>
                                    Share
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-user-check"></i>
                                    Submissions
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-copy"></i>
                                    Duplicate
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-cog"></i>
                                    Configure
                                </a>

                                <a class="dropdown-item archiveButton" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-archive"></i>
                                    Archive
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                    Remove
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards mb-3">
                <div class="col-12">
                    <div class="row row-deck row-cards">

                        <!-- Total Form Views -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card border-0 h-100">
                                <div class="card-body">

                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <div>
                                            <div class="subheader mb-1">Total Form Views</div>

                                            <div class="h1 mb-0">
                                                84.2K
                                            </div>
                                        </div>

                                        <span class="avatar avatar-md bg-blue-lt text-blue border-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                <path
                                                    d="M22 12c-2.667 4 -6 6 -10 6s-7.333 -2 -10 -6c2.667 -4 6 -6 10 -6s7.333 2 10 6">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="text-success d-flex align-items-center fw-medium">
                                            <i class="icon ti ti-arrow-narrow-up"></i>
                                            +12.8%
                                        </div>

                                        <div class="text-muted small">
                                            vs last 7 days
                                        </div>
                                    </div>

                                    <div class="text-muted lh-base">
                                        Unique users who opened and viewed this form across all channels.
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent border-0 pt-0">
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-blue" style="width: 84%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Traffic Goal</small>

                                        <small class="fw-medium text-blue">
                                            84% achieved
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Started -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card border-0 h-100">
                                <div class="card-body">

                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <div>
                                            <div class="subheader mb-1">Forms Started</div>

                                            <div class="h1 mb-0">
                                                24.8K
                                            </div>
                                        </div>

                                        <span class="avatar avatar-md bg-azure-lt text-azure border-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-pencil-plus" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8 20l-5 1l1 -5l11 -11a2.828 2.828 0 1 1 4 4l-11 11"></path>
                                                <path d="M13.5 6.5l4 4"></path>
                                                <path d="M19 16v6"></path>
                                                <path d="M22 19h-6"></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="text-azure d-flex align-items-center fw-medium">
                                            <i class="icon ti ti-arrow-narrow-up"></i>
                                            +9.4%
                                        </div>

                                        <div class="text-muted small">
                                            start rate 29.4%
                                        </div>
                                    </div>

                                    <div class="text-muted lh-base">
                                        Users who interacted with at least one field after opening the form.
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent border-0 pt-0">
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-azure" style="width: 62%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Visitor Conversion</small>

                                        <small class="fw-medium text-azure">
                                            62% active users
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submission Rate -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card border-0 h-100">
                                <div class="card-body">

                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <div>
                                            <div class="subheader mb-1">Successful Submissions</div>

                                            <div class="h1 mb-0">
                                                21.3K
                                            </div>
                                        </div>

                                        <span class="avatar avatar-md bg-green-lt text-green border-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-circle-check" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                <path d="M9 12l2 2l4 -4"></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="text-success d-flex align-items-center fw-medium">
                                            <i class="icon ti ti-arrow-narrow-up"></i>
                                            +6.1%
                                        </div>

                                        <div class="text-muted small">
                                            86% completion
                                        </div>
                                    </div>

                                    <div class="text-muted lh-base">
                                        Fully completed responses successfully submitted by users.
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent border-0 pt-0">
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-green" style="width: 86%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Completion Rate</small>

                                        <small class="fw-medium text-success">
                                            Excellent performance
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Avg Completion Time -->
                        <div class="col-sm-6 col-xl-3">
                            <div class="card border-0 h-100">
                                <div class="card-body">

                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <div>
                                            <div class="subheader mb-1">
                                                Avg. Completion Time
                                            </div>

                                            <div class="h1 mb-0">
                                                09:09
                                            </div>
                                        </div>

                                        <span class="avatar avatar-md bg-orange-lt text-orange border-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-clock-hour-4" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12l3 2"></path>
                                                <path d="M12 7v5"></path>
                                                <path d="M12 21a9 9 0 1 0 0 -18a9 9 0 0 0 0 18"></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="text-success d-flex align-items-center fw-medium">
                                            <i class="icon ti ti-arrow-narrow-down"></i>
                                            -32s faster
                                        </div>

                                        <div class="text-muted small">
                                            optimized flow
                                        </div>
                                    </div>

                                    <div class="text-muted lh-base">
                                        Average time users spend from form start until final submission.
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent border-0 pt-0">
                                    <div class="progress progress-sm mb-2">
                                        <div class="progress-bar bg-orange" style="width: 68%"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">Completion Speed</small>

                                        <small class="fw-medium text-orange">
                                            Moderate complexity
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="card-title mb-1">
                                        Form Performance Analytics
                                    </h3>
                                    <div class="text-muted">
                                        Track submissions and completion trends for this form
                                    </div>
                                </div>

                                <div class="ms-auto">
                                    <div class="btn-actions">
                                        <div class="dropdown d-flex align-items-center">
                                            <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-dots" width="44" height="44"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                    <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    1 day
                                                </a>

                                                <a class="dropdown-item" href="#">
                                                    1 week
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    1 month
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    1 year
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-form-performance"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Analytics -->
            <div class="row row-deck row-cards mb-3">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Device Breakdown</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Browser</th>
                                            <th>Views</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="tabler-icon tabler-icon-device-mobile">
                                                            <path
                                                                d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14">
                                                            </path>
                                                            <path d="M11 4h2"></path>
                                                            <path d="M12 17v.01"></path>
                                                        </svg>
                                                    </div>
                                                    Mobile
                                                </div>
                                            </td>
                                            <td>892</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 72%"></div>
                                                </div>
                                                72%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="tabler-icon tabler-icon-device-tablet">
                                                            <path
                                                                d="M5 4a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v16a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-16">
                                                            </path>
                                                            <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                                        </svg>
                                                    </div>
                                                    Tablet
                                                </div>
                                            </td>
                                            <td>234</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 19%"></div>
                                                </div>
                                                19%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="tabler-icon tabler-icon-device-desktop">
                                                            <path
                                                                d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10">
                                                            </path>
                                                            <path d="M7 20h10"></path>
                                                            <path d="M9 16v4"></path>
                                                            <path d="M15 16v4"></path>
                                                        </svg>
                                                    </div>
                                                    PC
                                                </div>
                                            </td>
                                            <td>108</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 9%"></div>
                                                </div>
                                                9%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Geographic Distribution</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-geo"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Browser Statistics</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Browser</th>
                                            <th>Views</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-chrome" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                                            <path d="M12 9h8.4" />
                                                            <path d="M12 9v8.4" />
                                                            <path d="M9 12h8.4" />
                                                        </svg>
                                                    </div>
                                                    Chrome
                                                </div>
                                            </td>
                                            <td>892</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 72%"></div>
                                                </div>
                                                72%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-safari" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M8 16l2 -6l6 -2l-2 6l-6 2" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                                        </svg>
                                                    </div>
                                                    Safari
                                                </div>
                                            </td>
                                            <td>234</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 19%"></div>
                                                </div>
                                                19%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-brand-firefox" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M4.028 7.82a9 9 0 1 0 12.823 -3.4c-1.636 1.02 -3.064 2.573 -3.957 4.175a9.033 9.033 0 0 1 -5.868 4.685a9 9 0 0 0 4.09 4.09a9.033 9.033 0 0 1 4.685 -5.868c1.602 -.893 3.155 -2.321 4.175 -3.957a9 9 0 0 0 -12.823 3.4z" />
                                                        </svg>
                                                    </div>
                                                    Firefox
                                                </div>
                                            </td>
                                            <td>108</td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" style="width: 9%"></div>
                                                </div>
                                                9%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Field Analytics -->
            <div class="row mb-3">
                <div class="col-12">

                    <div class="card p-3">

                        <!-- HEADER -->

                        <div class="card-header">

                            <div
                                class="w-100 d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">

                                <div>

                                    <h3 class="card-title mb-1">
                                        Field Performance Analytics
                                    </h3>

                                    <div class="text-muted">
                                        Analyze completion behavior and drop-off trends for every form field
                                    </div>

                                </div>

                                <div class="d-flex flex-wrap align-items-center gap-2">

                                    <span class="badge bg-green-lt px-3 py-2">
                                        Good Performance
                                    </span>

                                    <span class="badge bg-orange-lt px-3 py-2">
                                        Needs Attention
                                    </span>

                                    <span class="badge bg-red-lt px-3 py-2">
                                        High Drop-off
                                    </span>

                                </div>

                            </div>

                        </div>

                        <!-- BODY -->

                        <div class="card-body p-0">

                            <!-- FULL NAME -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-blue-lt">
                                                    Short Text
                                                </span>

                                                <span class="badge bg-green-lt">
                                                    Excellent Completion
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Full Name
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Basic identity field used for candidate identification.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:98%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                98%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:2%"></div>
                                                            </div>

                                                            <div class="fw-bold text-success">
                                                                2%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:12
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Avg response length: 25 characters
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Field Priority
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Required
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Validation Errors
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            Minimal
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Engagement Score
                                                        </div>

                                                        <div class="fw-semibold">
                                                            9.8 / 10
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- EMAIL -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-green-lt">
                                                    Email
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                What is your primary email address for communication?
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Used for follow-up communication and verification.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:95%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                95%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:5%"></div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                5%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:18
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Validation success: 100%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Browser Autofill
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Enabled
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Validation Accuracy
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            High
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Error Recovery
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Fast
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- PHONE -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-yellow-lt">
                                                    Phone
                                                </span>

                                                <span class="badge bg-orange-lt">
                                                    Needs Attention
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Phone Number
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Contact field with international format support.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:87%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                87%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:13%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                13%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:25
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            US: 85% • Intl: 15%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Formatting Errors
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Moderate
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Intl Usage
                                                        </div>

                                                        <div class="fw-semibold">
                                                            15%
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Retry Attempts
                                                        </div>

                                                        <div class="fw-semibold">
                                                            1.3 Avg
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- EXPERIENCE LEVEL -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-purple-lt">
                                                    Single Choice
                                                </span>

                                                <span class="badge bg-green-lt">
                                                    Strong Engagement
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Experience Level
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Single-select field for role qualification filtering.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:92%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                92%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:8%"></div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                8%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:15
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Senior: 45% • Mid: 35% • Junior: 20%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Most Selected
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Senior
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Selection Changes
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Low
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Decision Confidence
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            High
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- LONG TEXT -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-indigo-lt">
                                                    Long Text
                                                </span>

                                                <span class="badge bg-red-lt">
                                                    High Drop-off
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Please describe why you are interested in joining this role and how your
                                                experience aligns
                                                with our requirements.
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Long-form response field for candidate evaluation.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:76%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                76%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-danger" style="width:24%"></div>
                                                            </div>

                                                            <div class="fw-bold text-danger">
                                                                24%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:65
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Avg response: 180 words
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Typing Fatigue
                                                        </div>

                                                        <div class="fw-semibold text-danger">
                                                            High
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Avg. Revisions
                                                        </div>

                                                        <div class="fw-semibold">
                                                            4.2
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            AI Sentiment
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Mostly Positive
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- RESUME UPLOAD -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-pink-lt">
                                                    File Upload
                                                </span>

                                                <span class="badge bg-red-lt">
                                                    Friction Detected
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Resume Upload
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Required file upload field for application review.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-danger" style="width:72%"></div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                72%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-danger" style="width:28%"></div>
                                                            </div>

                                                            <div class="fw-bold text-danger">
                                                                28%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:45
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            PDF: 65% • DOC: 25% • Other: 10%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Failed Uploads
                                                        </div>

                                                        <div class="fw-semibold">
                                                            12%
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Avg File Size
                                                        </div>

                                                        <div class="fw-semibold">
                                                            2.8 MB
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Retry Attempts
                                                        </div>

                                                        <div class="fw-semibold">
                                                            1.9 Avg
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- DATE PICKER -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-blue-lt">
                                                    Date Picker
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Preferred interview date and time
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Date scheduling field with timezone-aware validation.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:89%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                89%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:11%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                11%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:14
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Peak selection: Tuesday mornings
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Calendar Opens
                                                        </div>

                                                        <div class="fw-semibold">
                                                            2.4 Avg
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Date Revisions
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Moderate
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Timezone Detection
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            Accurate
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- RECENT JOB TITLE -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-cyan-lt">
                                                    Job Information
                                                </span>

                                                <span class="badge bg-green-lt">
                                                    High Accuracy
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Most Recent Job Title
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Captures the applicant's latest professional designation for role alignment
                                                analysis.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:96%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                96%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:4%"></div>
                                                            </div>

                                                            <div class="fw-bold text-success">
                                                                4%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:09
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Top role: Software Engineer (34%)
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Auto Suggestions
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Enabled
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Typing Errors
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            Very Low
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Standardized Titles
                                                        </div>

                                                        <div class="fw-semibold">
                                                            91%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- CURRENT COMPANY -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-blue-lt">
                                                    Company Information
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Current / Most Recent Company Name
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Tracks employer background for candidate segmentation and hiring analytics.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:94%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                94%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:6%"></div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                6%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:11
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Startups: 42% • Enterprise: 58%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Company Recognition
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            98% Matched
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Unknown Companies
                                                        </div>

                                                        <div class="fw-semibold">
                                                            4%
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Industry Mapping
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Technology Dominant
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- JOB LOCATION -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-teal-lt">
                                                    Location
                                                </span>

                                                <span class="badge bg-green-lt">
                                                    Geo Analytics
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Current Job Location
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Helps analyze talent distribution and regional hiring trends.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:93%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                93%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:7%"></div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                7%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:06
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Remote: 38% • Hybrid: 41% • Onsite: 21%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Top Region
                                                        </div>

                                                        <div class="fw-semibold">
                                                            California
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Location Detection
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            Accurate
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Relocation Interest
                                                        </div>

                                                        <div class="fw-semibold">
                                                            44%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- CURRENT SALARY -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-orange-lt">
                                                    Compensation
                                                </span>

                                                <span class="badge bg-red-lt">
                                                    Sensitive Field
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Current / Previous Salary
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Compensation field used for offer benchmarking and salary analysis.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:74%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                74%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-danger" style="width:26%"></div>
                                                            </div>

                                                            <div class="fw-bold text-danger">
                                                                26%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:30
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Median salary range: $110k–$140k
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Privacy Concerns
                                                        </div>

                                                        <div class="fw-semibold text-danger">
                                                            High
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Salary Formatting
                                                        </div>

                                                        <div class="fw-semibold">
                                                            89% Structured
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Negotiation Intent
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Frequently Mentioned
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- EXPECTED SALARY -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-yellow-lt">
                                                    Expected Compensation
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Expected Salary Range
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Used to assess compensation expectations and hiring feasibility.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:81%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                81%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-warning" style="width:19%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold text-warning">
                                                                19%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:18
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Avg expectation: +18% over current salary
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Market Alignment
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            Competitive
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Flexible Responses
                                                        </div>

                                                        <div class="fw-semibold">
                                                            48%
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Outlier Expectations
                                                        </div>

                                                        <div class="fw-semibold">
                                                            7%
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- OVERALL EXPERIENCE -->

                            <div class="border-bottom p-4">

                                <div class="row g-4 align-items-stretch">

                                    <!-- FIELD -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="w-100 d-flex flex-column">

                                            <div class="d-flex flex-wrap gap-2 mb-3">

                                                <span class="badge bg-indigo-lt">
                                                    Experience
                                                </span>

                                                <span class="badge bg-green-lt">
                                                    Reliable Data
                                                </span>

                                            </div>

                                            <div class="fw-semibold lh-base text-break">
                                                Overall Professional Experience
                                            </div>

                                            <div class="text-muted small mt-3 lh-base">
                                                Captures total years of professional experience across industries and roles.
                                            </div>

                                        </div>

                                    </div>

                                    <!-- PERFORMANCE -->

                                    <div class="col-12 col-xl-6 d-flex">

                                        <div class="card bg-light-subtle border w-100 shadow-none">

                                            <div class="card-body d-flex flex-column justify-content-center"
                                                style="min-height:160px;">

                                                <div class="row g-4">

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Completion Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:97%">
                                                                </div>
                                                            </div>

                                                            <div class="fw-bold">
                                                                97%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small mb-2">
                                                            Drop-off Rate
                                                        </div>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="progress progress-sm flex-fill">
                                                                <div class="progress-bar bg-success" style="width:3%"></div>
                                                            </div>

                                                            <div class="fw-bold text-success">
                                                                3%
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Avg. Completion Time
                                                        </div>

                                                        <div class="fw-semibold fs-3 mt-1">
                                                            00:06
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="text-muted small">
                                                            Response Insight
                                                        </div>

                                                        <div class="fw-semibold mt-1">
                                                            Average experience: 6.4 years
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- ANALYTICS -->

                                    <div class="col-12 col-xl-3 d-flex">

                                        <div class="card w-100 shadow-none">

                                            <div class="card-body">

                                                <div class="text-uppercase text-muted small fw-bold mb-3">
                                                    Analytics
                                                </div>

                                                <div class="d-flex flex-column gap-3">

                                                    <div>

                                                        <div class="text-muted small">
                                                            Experience Distribution
                                                        </div>

                                                        <div class="fw-semibold">
                                                            Mid-Level Dominant
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Validation Match
                                                        </div>

                                                        <div class="fw-semibold text-success">
                                                            High Consistency
                                                        </div>

                                                    </div>

                                                    <div>

                                                        <div class="text-muted small">
                                                            Senior Candidates
                                                        </div>

                                                        <div class="fw-semibold">
                                                            22%
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

                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <!-- WORKFLOW BUILDER -->
                    <div class="card mb-3 p-3">

                        <div class="card-header">

                            <div class="w-100 d-flex justify-content-between align-items-center">

                                <div>
                                    <h3 class="card-title mb-1">
                                        Workflow Pipeline
                                    </h3>

                                    <div class="text-muted small">
                                        Configure submission movement across stages, automation and workflow
                                        execution rules.
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-primary d-none d-sm-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Add Stage
                                    </a>
                                </div>

                            </div>

                        </div>

                        <div class="card-body">

                            <div class="row row-deck row-cards">

                                <!-- STAGE -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-3">

                                                <div class="d-flex">
                                                    <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                        Active
                                                    </span>
                                                </div>
                                                <div class="dropdown d-flex align-items-center">
                                                    <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-dots" width="44" height="44"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                                            Download
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-link"></i>
                                                            Share
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-user-check"></i>
                                                            Submissions
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-copy"></i>
                                                            Duplicate
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-cog"></i>
                                                            Configure
                                                        </a>

                                                        <a class="dropdown-item archiveButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-archive"></i>
                                                            Archive
                                                        </a>

                                                        <a class="dropdown-item removeButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="h3 mb-1">Submitted </div>

                                            <div class="text-muted lh-base mb-3">
                                                Initial stage for newly submitted workflow requests.
                                            </div>

                                            <!-- Metrics -->
                                            <div class="row">

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Queue
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        4.2k
                                                    </div>

                                                </div>

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Average Time
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        03:30
                                                    </div>

                                                </div>

                                                <div class="col-4">
                                                    <div class="text-muted small mb-1">
                                                        Automation
                                                    </div>
                                                    <div class="h3 mb-0">
                                                        3
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar avatar-xs me-2">HR</span>
                                                    <div class="flex-fill">
                                                        <div class="h5 mb-0">
                                                            HR Department
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="text-muted">Recent submission 2m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STAGE -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-3">

                                                <div class="d-flex">
                                                    <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                        Active
                                                    </span>
                                                </div>
                                                <div class="dropdown d-flex align-items-center">
                                                    <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-dots" width="44" height="44"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                                            Download
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-link"></i>
                                                            Share
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-user-check"></i>
                                                            Submissions
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-copy"></i>
                                                            Duplicate
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-cog"></i>
                                                            Configure
                                                        </a>

                                                        <a class="dropdown-item archiveButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-archive"></i>
                                                            Archive
                                                        </a>

                                                        <a class="dropdown-item removeButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="h3 mb-1">Reviewed</div>

                                            <div class="text-muted lh-base mb-3">
                                                Screening and workflow validation stage.
                                            </div>

                                            <!-- Metrics -->
                                            <div class="row">

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Queue
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        16
                                                    </div>

                                                </div>

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Average Time
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        8h
                                                    </div>

                                                </div>

                                                <div class="col-4">
                                                    <div class="text-muted small mb-1">
                                                        Automation
                                                    </div>
                                                    <div class="h3 mb-0">
                                                        3
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar avatar-xs me-2">TT</span>
                                                    <div class="flex-fill">
                                                        <div class="h5 mb-0">
                                                            Talent Team
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="text-muted">Recent submission 2m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STAGE -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start justify-content-between mb-3">

                                                <div class="d-flex">
                                                    <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                        Active
                                                    </span>
                                                </div>
                                                <div class="dropdown d-flex align-items-center">
                                                    <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-dots" width="44" height="44"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                                            Download
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-link"></i>
                                                            Share
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-user-check"></i>
                                                            Submissions
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-copy"></i>
                                                            Duplicate
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-cog"></i>
                                                            Configure
                                                        </a>

                                                        <a class="dropdown-item archiveButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-archive"></i>
                                                            Archive
                                                        </a>

                                                        <a class="dropdown-item removeButton" href="#">
                                                            <i
                                                                class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="h3 mb-1">Approved</div>

                                            <div class="text-muted lh-base mb-3">
                                                Final approval and workflow completion.
                                            </div>

                                            <!-- Metrics -->
                                            <div class="row">

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Queue
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        4.2k
                                                    </div>

                                                </div>

                                                <div class="col-4">

                                                    <div class="text-muted small mb-1">
                                                        Average Time
                                                    </div>

                                                    <div class="h3 mb-0">
                                                        8h
                                                    </div>

                                                </div>


                                                <div class="col-4">
                                                    <div class="text-muted small mb-1">
                                                        Automation
                                                    </div>
                                                    <div class="h3 mb-0">
                                                        3
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex py-1 align-items-center">
                                                    <span class="avatar avatar-xs me-2">HR</span>
                                                    <div class="flex-fill">
                                                        <div class="h5 mb-0">
                                                            Leadership Team
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="text-muted">Recent submission 2m ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ADD STAGE -->
                                <div class="col-12 col-lg-6 col-xl-4">

                                    <div class="card h-100 shadow-sm position-relative overflow-hidden add-form-card">

                                        <div
                                            class="card-body d-flex flex-column justify-content-center align-items-center text-center p-5">

                                            <!-- Icon -->
                                            <div class="avatar avatar-xl bg-blue-lt text-primary mb-4 add-form-avatar">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-plus" width="28" height="28"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">

                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 5v14" />
                                                    <path d="M5 12h14" />

                                                </svg>

                                            </div>

                                            <!-- Title -->
                                            <div class="h3 fw-bold mb-2">
                                                Add New Stage
                                            </div>

                                            <!-- Description -->
                                            <p class="text-muted mb-4 lh-base">
                                                Create additional workflow stages, automation rules and approval pipelines.
                                            </p>

                                            <!-- CTA -->
                                            <a href="#" class="btn btn-primary px-4">

                                                Add Stage

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- AUTOMATION TABLE -->
                    <div class="card mb-3 p-3">

                        <div class="card-header">

                            <div>
                                <h3 class="card-title mb-1">
                                    Pipeline Automations
                                </h3>

                                <div class="text-muted small">
                                    Triggers and events executed during stage transitions.
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-vcenter card-table table-nowrap">

                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Trigger Stage</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                        <th>Last Executed</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>
                                            <div class="fw-medium">
                                                Submission Created
                                            </div>

                                            <div class="text-muted small">
                                                Triggered when new submission arrives.
                                            </div>
                                        </td>

                                        <td>
                                            Submitted
                                        </td>

                                        <td>
                                            Send Confirmation Email
                                        </td>

                                        <td>
                                            <span class="badge bg-success-lt">
                                                Active
                                            </span>
                                        </td>

                                        <td>
                                            5 minutes ago
                                        </td>

                                        <td>

                                            <div class="dropdown">

                                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0" />
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0" />
                                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0" />

                                                    </svg>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>
                                            <div class="fw-medium">
                                                Stage Approved
                                            </div>

                                            <div class="text-muted small">
                                                Triggered after HR review approval.
                                            </div>
                                        </td>

                                        <td>
                                            Reviewed
                                        </td>

                                        <td>
                                            Notify Department Head
                                        </td>

                                        <td>
                                            <span class="badge bg-success-lt">
                                                Active
                                            </span>
                                        </td>

                                        <td>
                                            20 minutes ago
                                        </td>

                                        <td>

                                            <div class="dropdown">

                                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown">

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none">

                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M5 12m-1 0a1 1 0 1 0 2 0" />
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0" />
                                                        <path d="M19 12m-1 0a1 1 0 1 0 2 0" />

                                                    </svg>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <!-- FUTURE ROADMAP -->
                    <div class="alert alert-info bg-blue-lt">

                        <div class="d-flex">

                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 9h.01" />
                                    <path d="M11 12h1v4h1" />
                                    <path d="M12 3c4.97 0 9 4.03 9 9s-4.03 9 -9 9s-9 -4.03 -9 -9s4.03 -9 9 -9z" />

                                </svg>

                            </div>

                            <div>

                                <h4 class="alert-title">
                                    Upcoming Workflow Features
                                </h4>

                                <div class="text-muted">
                                    Future enhancements will support conditional routing, webhooks, SLA timers,
                                    escalation rules, role-based approvals, and third-party integrations.
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
        // Views & Submissions Chart
        if (typeof ApexCharts !== "undefined") {
            const viewsSubmissionsOptions = {
                series: [
                    {
                        name: "Views",
                        data: [
                            120, 132, 101, 134, 90, 230, 210, 182, 191, 234, 290, 330, 310,
                            123, 442, 321, 90, 149, 210, 122, 133, 334, 198, 123, 125, 220,
                            165, 140, 170, 120,
                        ],
                    },
                    {
                        name: "Submissions",
                        data: [
                            8, 12, 7, 11, 6, 18, 16, 14, 15, 19, 22, 25, 24, 10, 33, 24, 7,
                            11, 16, 9, 10, 25, 15, 9, 10, 17, 12, 11, 13, 9,
                        ],
                    },
                ],
                chart: {
                    type: "area",
                    height: 300,
                    toolbar: {
                        show: false,
                    },
                },
                colors: ["#206bc4", "#2fb344"],
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                },
                xaxis: {
                    type: "datetime",
                    categories: Array.from(
                        { length: 30 },
                        (_, i) =>
                            new Date(Date.now() - (29 - i) * 24 * 60 * 60 * 1000)
                                .toISOString()
                                .split("T")[0],
                    ),
                },
                tooltip: {
                    x: {
                        format: "dd/MM/yy",
                    },
                    style: {
                        fontSize: "12px",
                        fontFamily: "inherit",
                    },
                },
            };
            const viewsSubmissionsChart = new ApexCharts(
                document.querySelector("#chart-views-submissions"),
                viewsSubmissionsOptions,
            );
            viewsSubmissionsChart.render();
        }

        // Geographic Distribution Chart
        if (typeof ApexCharts !== "undefined") {
            const geoOptions = {
                series: [
                    {
                        data: [400, 300, 200, 100, 50],
                    },
                ],
                chart: {
                    type: "bar",
                    height: 300,
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                    },
                },
                colors: ["#206bc4"],
                dataLabels: {
                    enabled: false,
                },
                xaxis: {
                    categories: [
                        "United States",
                        "United Kingdom",
                        "Canada",
                        "Australia",
                        "Germany",
                    ],
                    labels: {
                        style: {
                            fontSize: "12px",
                            fontFamily: "inherit",
                        },
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            fontSize: "12px",
                            fontFamily: "inherit",
                        },
                    },
                },
                tooltip: {
                    theme: "light",
                    style: {
                        fontSize: "12px",
                        fontFamily: "inherit",
                    },
                },
            };
            const geoChart = new ApexCharts(
                document.querySelector("#chart-geo"),
                geoOptions,
            );
            geoChart.render();
        }
    </script>

    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {

            if (window.ApexCharts) {

                new ApexCharts(document.querySelector("#chart-form-performance"), {

                    chart: {
                        type: "area",
                        height: 360,
                        fontFamily: "inherit",

                        toolbar: {
                            show: false,
                        },

                        zoom: {
                            enabled: false,
                        },

                        animations: {
                            enabled: true,
                            easing: "easeinout",
                            speed: 900,
                        },

                        dropShadow: {
                            enabled: true,
                            top: 4,
                            left: 0,
                            blur: 8,
                            opacity: 0.08,
                        },
                    },

                    series: [
                        {
                            name: "Views",
                            data: [3850, 4120, 3980, 4360, 4215, 4590, 4380],
                        },
                        {
                            name: "Attempted",
                            data: [2565, 2480, 2725, 2660, 2895, 2810, 3055],
                        },
                        {
                            name: "Submissions",
                            data: [542, 590, 565, 618, 602, 645, 621],
                        },
                        {
                            name: "Drop-off",
                            data: [1410, 1525, 1470, 1605, 1540, 1690, 1615],
                        },
                    ],

                    colors: [
                        "#4F7CFF",
                        "#2ED3A7",
                        "#8B5CF6",
                        "#FF7A1A",
                    ],

                    stroke: {
                        curve: "smooth",
                        width: [2.2, 2.2, 1.8, 1.8],
                        lineCap: "round",
                    },

                    fill: {
                        type: "gradient",
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.10,
                            opacityTo: 0.01,
                            stops: [0, 95, 100],
                        },
                    },

                    markers: {
                        size: 0,

                        hover: {
                            size: 5,
                        },
                    },

                    dataLabels: {
                        enabled: false,
                    },

                    markers: {
                        size: 0,

                        hover: {
                            size: 7,
                        },
                    },

                    grid: {
                        borderColor: "rgba(120,130,140,0.08)",
                        strokeDashArray: 0,

                        xaxis: {
                            lines: {
                                show: false,
                            },
                        },

                        yaxis: {
                            lines: {
                                show: true,
                            },
                        },

                        padding: {
                            top: 10,
                            right: 20,
                            left: 10,
                            bottom: 0,
                        },
                    },

                    legend: {
                        show: true,
                        position: "top",
                        horizontalAlign: "left",

                        fontSize: "14px",
                        fontWeight: 600,

                        labels: {
                            colors: "#374151",
                        },

                        markers: {
                            width: 10,
                            height: 10,
                            radius: 99,
                        },

                        itemMargin: {
                            horizontal: 18,
                            vertical: 8,
                        },
                    },

                    tooltip: {
                        theme: "light",
                        shared: true,
                        intersect: false,

                        style: {
                            fontSize: "13px",
                        },

                        x: {
                            show: true,
                        },

                        marker: {
                            show: true,
                        },

                        y: {
                            formatter: function (val) {
                                return val.toLocaleString();
                            },
                        },
                    },

                    xaxis: {
                        categories: [
                            "May 08",
                            "May 09",
                            "May 10",
                            "May 11",
                            "May 12",
                            "May 13",
                            "May 14",
                        ],

                        axisBorder: {
                            show: false,
                        },

                        axisTicks: {
                            show: false,
                        },

                        crosshairs: {
                            show: true,

                            stroke: {
                                color: "#9CA3AF",
                                width: 1,
                                dashArray: 5,
                            },
                        },

                        labels: {
                            style: {
                                colors: "#9AA0AC",
                                fontSize: "12px",
                                fontWeight: 500,
                            },
                        },
                    },

                    yaxis: {
                        tickAmount: 5,

                        labels: {
                            style: {
                                colors: "#9AA0AC",
                                fontSize: "12px",
                            },

                            formatter: function (val) {

                                if (val >= 1000) {
                                    return (val / 1000).toFixed(1) + "k";
                                }

                                return val;
                            },
                        },
                    },

                    responsive: [
                        {
                            breakpoint: 768,

                            options: {
                                chart: {
                                    height: 320,
                                },

                                legend: {
                                    position: "bottom",
                                },
                            },
                        },
                    ],

                }).render();
            }
        });
        // @formatter:on
    </script>
@endpush