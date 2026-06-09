@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
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
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="/form" class="btn">
                            <i class="icon las la-arrow-right"></i>
                            View all
                        </a>
                        <a href="/forms/create" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Create New Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-deck row-cards">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="card border-0  h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">

                                        <div class="d-flex">
                                            <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                Active
                                            </span>
                                        </div>
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
                                                <a class="dropdown-item" href="/form-details">
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

                                    <div class="h3 mb-1">Employee Feedback Form </div>

                                    <div class="text-muted lh-base mb-3">
                                        HR Department
                                    </div>

                                    <!-- Metrics -->
                                    <div class="row">

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Responses
                                            </div>

                                            <div class="h3 mb-0">
                                                4.2k
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Completion
                                            </div>

                                            <div class="h3 mb-0 text-success">
                                                91%
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Average Time
                                            </div>

                                            <div class="h3 mb-0 text-default">
                                                8m
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-success" style="width: 91%"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar avatar-xs me-2"
                                                style="background-image: url({{ asset('assets/static/avatars/051m.jpg') }});"></span>
                                            <div class="flex-fill">
                                                <div class="h5 mb-0">
                                                    Micheal Jameson
                                                </div>
                                                <div class="text-muted small">
                                                    micheal@example.com
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

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="card border-0  h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">

                                        <div class="d-flex">
                                            <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                Active
                                            </span>
                                        </div>
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
                                                <a class="dropdown-item" href="/form-details">
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

                                    <div class="h3 mb-1">Product Launch Poll</div>

                                    <div class="text-muted lh-base mb-3">
                                        Marketing Team
                                    </div>

                                    <!-- Metrics -->
                                    <div class="row">

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Responses
                                            </div>

                                            <div class="h3 mb-0">
                                                4.2k
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Completion
                                            </div>

                                            <div class="h3 mb-0 text-blue">
                                                61%
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Average Time
                                            </div>

                                            <div class="h3 mb-0 text-default">
                                                3m
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-blue" style="width: 61%"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar avatar-xs me-2"
                                                style="background-image: url({{ asset('assets/static/avatars/008f.jpg') }});"></span>
                                            <div class="flex-fill">
                                                <div class="h5 mb-0">
                                                    Kellie Skingle
                                                </div>
                                                <div class="text-muted small">
                                                    kellie@example.com
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

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="card border-0  h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">

                                        <div class="d-flex">
                                            <span class="badge bg-green-lt px-2 py-1 text-uppercase me-2">
                                                Active
                                            </span>
                                        </div>
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
                                                <a class="dropdown-item" href="/form-details">
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

                                    <div class="h3 mb-1">Project Approval Form</div>

                                    <div class="text-muted lh-base mb-3">
                                        Operations Department
                                    </div>

                                    <!-- Metrics -->
                                    <div class="row">

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Responses
                                            </div>

                                            <div class="h3 mb-0">
                                                4.2k
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Completion
                                            </div>

                                            <div class="h3 mb-0 text-warning">
                                                41%
                                            </div>

                                        </div>

                                        <div class="col-4">

                                            <div class="text-muted small mb-1">
                                                Average Time
                                            </div>

                                            <div class="h3 mb-0 text-default">
                                                6m
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-warning" style="width: 41%"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar avatar-xs me-2"
                                                style="background-image: url({{ asset('assets/static/avatars/073m.jpg') }});"></span>
                                            <div class="flex-fill">
                                                <div class="h5 mb-0">
                                                    Joe Clayderman
                                                </div>
                                                <div class="text-muted small">
                                                    joe@example.com
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

                        <div class="col-12 col-lg-6 col-xl-4">

                            <div
                                class="card card-dashed h-100 border-0 shadow-sm position-relative overflow-hidden add-form-card">

                                <div
                                    class="card-body d-flex flex-column justify-content-center align-items-center text-center p-5">

                                    <!-- Icon -->
                                    <div class="avatar avatar-xl bg-blue-lt text-primary mb-4 add-form-avatar">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus"
                                            width="28" height="28" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">

                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5v14" />
                                            <path d="M5 12h14" />

                                        </svg>

                                    </div>

                                    <!-- Title -->
                                    <div class="h3 fw-bold mb-2">
                                        Add New Form
                                    </div>

                                    <!-- Description -->
                                    <p class="text-muted mb-4 lh-base">
                                        Build intelligent forms with automation, pipelines,
                                        analytics, and AI-powered workflows.
                                    </p>

                                    <!-- CTA -->
                                    <a href="/create-form" class="btn btn-primary px-4">

                                        Create Form

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection