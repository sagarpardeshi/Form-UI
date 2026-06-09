@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col-auto ms-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar bg-blue-lt">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="currentColor">
                                <path
                                    d="M720-80v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-460-60q-58 0-99-41t-41-99q0-29 11-54.5t31-45.5q-20-19-31-45t-11-55q0-29 11-54.5t31-45.5q-20-19-31-45t-11-55q0-57 41-98.5t99-41.5q29 0 54.5 11.5T360-777q19-20 45-31.5t55-11.5h240q57 0 98.5 41.5T840-680q0 29-11.5 55T797-580q23 23 34 52.5t8 61.5q-19-7-39-10t-40-3q0-25-17.5-43T700-540H460q-25 0-42.5 17.5T400-480q0 25 17.5 42.5T460-420h143q-19 17-34.5 37T542-340h-82q-25 0-42.5 17.5T400-280q0 25 17.5 42.5T460-220h61q2 21 7 41t13 39h-81q-29 0-55-11t-45-31q-20 20-45.5 31T260-140Zm0-80q25 0 42.5-17.5T320-280q0-25-17.5-42.5T260-340q-25 0-42.5 17.5T200-280q0 25 17.5 42.5T260-220Zm0-200q25 0 42.5-17.5T320-480q0-25-17.5-42.5T260-540q-25 0-42.5 17.5T200-480q0 25 17.5 42.5T260-420Zm0-200q25 0 42.5-17.5T320-680q0-25-17.5-42.5T260-740q-25 0-42.5 17.5T200-680q0 25 17.5 42.5T260-620Zm200 0h240q25 0 42.5-17.5T760-680q0-25-17.5-42.5T700-740H460q-25 0-42.5 17.5T400-680q0 25 17.5 42.5T460-620Zm-99 240Zm0-200Z" />
                            </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h2 class="page-title">Form Builder</h2>
                            <span class="text-secondary">Create and customize your form with our intuitive
                                drag-and-drop builder</span>
                        </div>
                    </div>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list d-flex align-items-center">
                        <!-- Question Type Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="btn btn-icon rounded-circle p-2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14m8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" />
                                </svg>
                            </a>

                            @include('forms.partials.question-dropdown')

                        </div>

                        <a href="#" class="btn">
                            <i class="icon las la-arrow-right"></i>
                            Preview
                        </a>

                        <a class="btn btn-primary" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
                            </svg>
                            <span>Publish</span>
                        </a>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="btn btn-icon rounded-circle p-2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ti ti-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                    <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-cog"></i>
                                    Configure
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
            <div class="container-fluid">
                <div class="row justify-content-center gap-3">

                    <!-- SECTION -->
                    <div class="col-8">
                        <div class="card border-0">
                            <!-- BODY -->
                            <div class="card-body">
                                <!-- TOP BAR -->
                                <div class="row align-items-center mb-4">
                                    <!-- LEFT -->
                                    <div class="col">
                                        <div class="d-flex align-items-center gap-3">
                                            <input class="form-check-input m-0" type="checkbox" aria-label="Select" />
                                        </div>
                                    </div>

                                    <!-- RIGHT -->
                                    <div class="col-auto">
                                        <div class="btn-actions d-flex align-items-center gap-2">
                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-arrow-right m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-cog m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2" data-bs-toggle="modal"
                                                data-bs-target="#removeQuestionModal">
                                                <i class="icon las la-trash m-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- CONTENT -->
                                <div class="row align-items-center g-4">
                                    <!-- ICON -->
                                    <div class="col-auto">
                                        <span class="avatar avatar-rounded avatar-shadow-0 bg-indigo-lt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-notes">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M5 5a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l0 -14" />
                                                <path d="M9 7l6 0" />
                                                <path d="M9 11l6 0" />
                                                <path d="M9 15l4 0" />
                                            </svg>
                                        </span>
                                    </div>

                                    <!-- TEXT -->
                                    <div class="col">
                                        <div class="mb-2 lh-base">
                                            <label class="form-label h3">
                                                Guidelines
                                            </label>
                                        </div>

                                        <div class="text-muted lh-lg">
                                            Please review the following instructions carefully before
                                            completing this form. Ensure that all responses are accurate
                                            and complete before submission. Fields marked as required
                                            must be completed to proceed.
                                        </div>
                                        <a href="#" class="small">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- FOOTER -->
                            <div class="card-footer px-4 py-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!-- TIME -->
                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2"
                                        title="Read Time • 05 minutes" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <i class="icon las la-clock m-0"></i>
                                        <span>05:00</span>
                                    </span>
                                    <!-- TYPE -->
                                    <span class="badge bg-indigo-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-notes">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M5 5a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2l0 -14" />
                                            <path d="M9 7l6 0" />
                                            <path d="M9 11l6 0" />
                                            <path d="M9 15l4 0" />
                                        </svg>

                                        <span>Form submission guidelines</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LONG TEXT -->
                    <div class="col-8">
                        <div class="card border-0">
                            <!-- BODY -->
                            <div class="card-body">
                                <!-- TOP BAR -->
                                <div class="row align-items-center mb-4">
                                    <!-- LEFT -->
                                    <div class="col">
                                        <div class="d-flex align-items-center gap-3">
                                            <input class="form-check-input m-0" type="checkbox" aria-label="Select" />
                                        </div>
                                    </div>

                                    <!-- RIGHT -->
                                    <div class="col-auto">
                                        <div class="btn-actions d-flex align-items-center gap-2">
                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-arrow-right m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-cog m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2" data-bs-toggle="modal"
                                                data-bs-target="#removeQuestionModal">
                                                <i class="icon las la-trash m-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- CONTENT -->
                                <div class="row align-items-center g-4">
                                    <!-- ICON -->
                                    <div class="col-auto">
                                        <span class="avatar avatar-rounded avatar-shadow-0 bg-indigo-lt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" class="icon text-indigo m-0">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                                <path
                                                    d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                                            </svg>
                                        </span>
                                    </div>

                                    <!-- TEXT -->
                                    <div class="col">
                                        <div class="mb-2 lh-base">
                                            <label class="form-label h3 required">
                                                What challenges did you face while onboarding your
                                                team onto our platform, and what improvements
                                                would make the experience more intuitive for
                                                first-time users?
                                            </label>
                                        </div>

                                        <div class="text-muted lh-lg">
                                            Long responses automatically become scrollable while
                                            maintaining equal row proportions and visual
                                            consistency.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FOOTER -->
                            <div class="card-footer px-4 py-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!-- LEVEL -->
                                    <span
                                        class="badge bg-red-lt px-3 py-2 d-inline-flex align-items-center justify-content-center"
                                        title="Difficulty Level • Advanced" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">
                                        <i class="icon las la-angle-double-up m-0"></i>
                                    </span>

                                    <!-- TIME -->
                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2"
                                        title="Time Limit • 05 minutes" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <i class="icon las la-stopwatch m-0"></i>

                                        <span>05:00</span>
                                    </span>

                                    <!-- TYPE -->
                                    <span class="badge bg-indigo-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="currentColor" class="icon text-indigo m-0">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                            <path
                                                d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                                        </svg>

                                        <span>Long Text</span>
                                    </span>

                                    <!-- SCORE -->
                                    <span class="badge bg-green-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <i class="icon las la-dot-circle m-0"></i>

                                        <span>Score 5</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LONG TEXT -->
                    <div class="col-8">
                        <div class="card border-0">
                            <!-- BODY -->
                            <div class="card-body">
                                <!-- TOP -->
                                <div class="row align-items-center mb-4">
                                    <div class="col">
                                        <input class="form-check-input m-0" type="checkbox" />
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn-actions d-flex align-items-center gap-2">
                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-arrow-right m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-cog m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2" data-bs-toggle="modal"
                                                data-bs-target="#removeQuestionModal">
                                                <i class="icon las la-trash m-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- CONTENT -->
                                <div class="row align-items-center g-4">
                                    <div class="col-auto">
                                        <span class="avatar avatar-rounded avatar-shadow-0 bg-indigo-lt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor" class="icon text-indigo m-0">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>

                                                <path
                                                    d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label h3 required">
                                                Describe a situation where your team missed a
                                                critical deadline and how you handled stakeholder
                                                communication afterward.
                                            </label>
                                        </div>

                                        <div class="text-muted lh-lg">
                                            Detailed written response used to evaluate
                                            leadership, communication, and accountability.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FOOTER -->
                            <div class="card-footer px-4 py-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <!-- LEVEL -->
                                    <span
                                        class="badge bg-red-lt px-3 py-2 d-inline-flex align-items-center justify-content-center"
                                        title="Difficulty Level • Advanced" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">
                                        <i class="icon las la-angle-double-up m-0"></i>
                                    </span>

                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2"
                                        title="Time Limit • 05 minutes" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <i class="icon las la-stopwatch m-0"></i>

                                        <span>05:00</span>
                                    </span>

                                    <span class="badge bg-indigo-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="currentColor" class="icon text-indigo m-0">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                            <path
                                                d="M19 3a3 3 0 0 1 2.995 2.824l.005 .176v12a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-12a3 3 0 0 1 2.824 -2.995l.176 -.005h14zm-2 12h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm0 -4h-10l-.117 .007a1 1 0 0 0 0 1.986l.117 .007h10l.117 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                                        </svg>

                                        <span>Long Text</span>
                                    </span>

                                    <span class="badge bg-green-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <i class="icon las la-dot-circle m-0"></i>

                                        <span>Score 10</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MULTIPLE CHOICE -->
                    <div class="col-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row align-items-center mb-4">
                                    <div class="col">
                                        <input class="form-check-input m-0" type="checkbox" />
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn-actions d-flex align-items-center gap-2">
                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-arrow-right m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-cog m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2" data-bs-toggle="modal"
                                                data-bs-target="#removeQuestionModal">
                                                <i class="icon las la-trash m-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-4">
                                    <div class="col-auto">
                                        <span class="avatar avatar-rounded avatar-shadow-0 bg-orange-lt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="currentColor"
                                                class="icon icon-tabler icons-tabler-filled icon-tabler-list-details">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M22 5a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0 -2h8a1 1 0 0 1 1 1m-3 4a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0 -2h5a1 1 0 0 1 1 1m3 6a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0 -2h8a1 1 0 0 1 1 1m-3 4a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0 -2h5a1 1 0 0 1 1 1m-11 -16a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2l.001 -4.051l.004 -.051a1.996 1.996 0 0 1 1.995 -1.898zm0 10a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2l.001 -4.051l.004 -.051a1.996 1.996 0 0 1 1.995 -1.898z" />
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label h3 required">
                                                Which project management methodology does your
                                                team primarily follow?
                                            </label>
                                        </div>

                                        <div class="text-muted lh-lg">
                                            Single-select question designed to identify
                                            operational workflows and team processes.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer px-4 py-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <span
                                        class="badge bg-orange-lt px-3 py-2 d-inline-flex align-items-center justify-content-center"
                                        title="Difficulty Level • Medium" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">
                                        <i class="icon d-md-none d-lg-inline-block icon las la-bars m-0"></i>
                                    </span>

                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2"
                                        title="Time Limit • 02 minutes" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <i class="icon las la-stopwatch m-0"></i>

                                        <span>02:00</span>
                                    </span>

                                    <span class="badge bg-orange-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-list-details">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M22 5a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0 -2h8a1 1 0 0 1 1 1m-3 4a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0 -2h5a1 1 0 0 1 1 1m3 6a1 1 0 0 1 -1 1h-8a1 1 0 0 1 0 -2h8a1 1 0 0 1 1 1m-3 4a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0 -2h5a1 1 0 0 1 1 1m-11 -16a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2l.001 -4.051l.004 -.051a1.996 1.996 0 0 1 1.995 -1.898zm0 10a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2l.001 -4.051l.004 -.051a1.996 1.996 0 0 1 1.995 -1.898z" />
                                        </svg>

                                        <span>Multiple Choice</span>
                                    </span>

                                    <span class="badge bg-green-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <i class="icon las la-dot-circle m-0"></i>

                                        <span>Score 5</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FILE UPLOAD -->
                    <div class="col-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row align-items-center mb-4">
                                    <div class="col">
                                        <input class="form-check-input m-0" type="checkbox" />
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn-actions d-flex align-items-center gap-2">
                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-arrow-right m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2">
                                                <i class="icon las la-cog m-0"></i>
                                            </a>

                                            <a class="btn btn-action rounded-circle p-2" data-bs-toggle="modal"
                                                data-bs-target="#removeQuestionModal">
                                                <i class="icon las la-trash m-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-4">
                                    <div class="col-auto">
                                        <span class="avatar avatar-rounded avatar-shadow-0 bg-blue-lt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-upload">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                                                <path d="M9 15l3 -3l3 3" />
                                                <path d="M12 12l0 9" />
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="col">
                                        <div class="mb-2">
                                            <label class="form-label h3 required">
                                                Upload your latest portfolio, resume, or
                                                supporting project documentation.
                                            </label>
                                        </div>

                                        <div class="text-muted lh-lg">
                                            File submission used for profile verification and
                                            candidate evaluation workflows.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer px-4 py-3">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <span
                                        class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center justify-content-center"
                                        title="Difficulty Level • Normal" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom">
                                        <i class="icon d-md-none d-lg-inline-block icon las la-equals m-0"></i>
                                    </span>

                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2"
                                        title="Time Limit • 0 minutes" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <i class="icon las la-stopwatch m-0"></i>

                                        <span>00:00</span>
                                    </span>

                                    <span class="badge bg-blue-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-upload">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />
                                            <path d="M9 15l3 -3l3 3" />
                                            <path d="M12 12l0 9" />
                                        </svg>

                                        <span>File Upload</span>
                                    </span>

                                    <span class="badge bg-green-lt px-3 py-2 d-inline-flex align-items-center gap-2">
                                        <i class="icon las la-dot-circle m-0"></i>

                                        <span>Score 15</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('modals')

    <x-modals.delete-question />
    <x-modals.add-qualifier-question />
    <x-modals.add-short-text-question />

@endpush

@push('scripts')

@endpush