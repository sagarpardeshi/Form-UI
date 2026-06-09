@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col-auto me-2">
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-4"
                            autocomplete="off" />
                        <label for="btn-radio-basic-4" type="button" class="btn">All</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-1"
                            autocomplete="off" />
                        <label for="btn-radio-basic-1" type="button" class="btn">Accepted</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2"
                            autocomplete="off" />
                        <label for="btn-radio-basic-2" type="button" class="btn">To be contacted</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-3"
                            autocomplete="off" />
                        <label for="btn-radio-basic-3" type="button" class="btn">Overdue</label>
                    </div>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="/forms/create" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
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

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-10">
                                <h3 class="card-title strong">Form</h3>
                            </div>
                            <div class="col-md-2" id="choices_for_selected"></div>
                        </div>
                        <div class="table-responsive overflow-visible">
                            <table class="table table-vcenter table-mobile-md card-table table-striped">
                                <thead>
                                    <tr>
                                        <th class="w-1">
                                            <input id="select_all" class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select all" />
                                        </th>
                                        <th class="text-center">Form ID</th>
                                        <th>Form</th>
                                        <th class="text-center">Views</th>
                                        <th class="text-center">Submissions</th>
                                        <th class="text-center">Conversion</th>
                                        <th>Average Time</th>
                                        <th>Last Submission</th>
                                        <th>Creator</th>
                                        <th>Created</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                                        </td>
                                        <td data-label="Form ID">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="text-muted">4586930</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Form">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <h4 class="m-0">
                                                        <a href="/forms/view" class="text-reset">Candidate Feedback</a>
                                                    </h4>
                                                    <div class="text-muted">HR Department</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Views">
                                            <div class="d-flex align-items-center">1,234</div>
                                        </td>
                                        <td data-label="Submissions">
                                            <div class="d-flex align-items-center">76</div>
                                        </td>
                                        <td data-label="Conversion">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge bg-green-lt">6.1%</span></div>
                                        </td>
                                        <td data-label="Average Time">04:12</td>
                                        <td data-label="Last Submission">1 hour ago</td>
                                        <td data-label="Creator">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar avatar-sm me-2"
                                                    style="background-image: url({{ asset('assets/static/avatars/010m.jpg') }});" ></span>

                                                <div class="flex-fill">
                                                    <div class="h4 mb-0">
                                                        Thatcher Keel
                                                    </div>

                                                    <div class="text-muted">
                                                        thatcher@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Created" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                                            9 month ago
                                        </td>
                                        <td>
                                            <div class="dropdown flex-nowrap">
                                                <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                                        </td>
                                        <td data-label="Form ID">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="text-muted">4586934</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Form">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <h4 class="m-0">
                                                        <a href="/forms/view" class="text-reset">Product Launch Poll</a>
                                                    </h4>
                                                    <div class="text-muted">Support Team</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Views">
                                            <div class="d-flex align-items-center">981</div>
                                        </td>
                                        <td data-label="Submissions">
                                            <div class="d-flex align-items-center">120</div>
                                        </td>
                                        <td data-label="Conversion">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge bg-green-lt">12.2%</span></div>
                                        </td>
                                        <td data-label="Average Time">05:00</td>
                                        <td data-label="Last Submission">2 days ago</td>
                                        <td data-label="Creator">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar avatar-sm me-2"
                                                    style="background-image: url({{ asset('assets/static/avatars/005f.jpg') }});"></span>

                                                <div class="flex-fill">
                                                    <div class="h4 mb-0">
                                                        Dyann Escala
                                                    </div>

                                                    <div class="text-muted">
                                                        dyann@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Created" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                                            9 month ago
                                        </td>
                                        <td>
                                            <div class="dropdown flex-nowrap">
                                                <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                                        </td>
                                        <td data-label="Form ID">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="text-muted">4586936</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Form">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <h4 class="m-0">
                                                        <a href="/forms/view" class="text-reset">Expense Report</a>
                                                    </h4>
                                                    <div class="text-muted">Finance Department</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Views">
                                            <div class="d-flex align-items-center">340</div>
                                        </td>
                                        <td data-label="Submissions">
                                            <div class="d-flex align-items-center">0</div>
                                        </td>
                                        <td data-label="Conversion">
                                            <div class="d-flex align-items-center"><span class="badge bg-dark-lt">0%</span>
                                            </div>
                                        </td>
                                        <td data-label="Average Time">&mdash;</td>
                                        <td data-label="Last Submission">&mdash;</td>
                                        <td data-label="Creator">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar avatar-sm me-2"
                                                    style="background-image: url({{ asset('assets/static/avatars/006f.jpg') }});"></span>

                                                <div class="flex-fill">
                                                    <div class="h4 mb-0">
                                                        Avivah Mugleston
                                                    </div>

                                                    <div class="text-muted">
                                                        avivah@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Created" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                                            9 month ago
                                        </td>
                                        <td>
                                            <div class="dropdown flex-nowrap">
                                                <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                                        </td>
                                        <td data-label="Form ID">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="text-muted">4586938</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Form">
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <h4 class="m-0">
                                                        <a href="/forms/view" class="text-reset">Engineering Intake</a>
                                                    </h4>
                                                    <div class="text-muted">Engineering Department</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Views">
                                            <div class="d-flex align-items-center">843</div>
                                        </td>
                                        <td data-label="Submissions">
                                            <div class="d-flex align-items-center">45</div>
                                        </td>
                                        <td data-label="Conversion">
                                            <div class="d-flex align-items-center"><span
                                                    class="badge bg-green-lt">5.3%</span></div>
                                        </td>
                                        <td data-label="Average Time">05:04</td>
                                        <td data-label="Last Submission">16 hours ago</td>
                                        <td data-label="Creator">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar avatar-sm me-2"
                                                    style="background-image: url({{ asset('assets/static/avatars/008f.jpg') }});"></span>

                                                <div class="flex-fill">
                                                    <div class="h4 mb-0">
                                                        Kellie Skingle
                                                    </div>

                                                    <div class="text-muted">
                                                        kellie@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-label="Created" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                                            9 month ago
                                        </td>
                                        <td>
                                            <div class="dropdown flex-nowrap">
                                                <a href="#" class="ms-auto btn-action dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document
            .getElementById('select_all')
            .addEventListener('click', function (elm) {
                var cbs = document.getElementsByClassName('select_cb');
                for (var i = 0; i < cbs.length; i++) {
                    if (cbs[i].type == 'checkbox') {
                        cbs[i].checked = elm.target.checked;
                    }
                }
                check_available_choices();
            });
        document.querySelectorAll('.select_cb').forEach((elm) => {
            elm.addEventListener('click', function (elm) {
                var cbs = document.getElementById('select_all');
                if (cbs.type == 'checkbox' && cbs.checked == true) {
                    cbs.checked = false;
                }
                check_available_choices();
            });
        });

        function check_available_choices() {
            const className = 'select_cb';

            // Get all elements with the specified class name
            const checkboxes = document.getElementsByClassName(className);

            // Initialize an array to store the checked checkboxes
            const checkedCheckboxes = [];

            // Loop through the elements
            for (let i = 0; i < checkboxes.length; i++) {
                // Check if the element is a checkbox and it's checked
                if (checkboxes[i].type === 'checkbox' && checkboxes[i].checked) {
                    // Add the checked checkbox to the array
                    checkedCheckboxes.push(checkboxes[i]);
                }
            }

            const element = document.getElementById('choices_for_selected');

            // Apply a CSS transition for a smooth effect
            element.style.transition = 'opacity 0.5s'; // Change opacity over 0.5 seconds
            element.style.opacity = 0; // Fade out the element

            // Wait for the transition to complete before changing the inner HTML
            setTimeout(function () {
                if (checkedCheckboxes.length > 0) {
                    document.getElementById(
                        'choices_for_selected'
                    ).innerHTML = `<div class="col"><a href="#" class="link-reset link-red" id="btn_remove_selected">
                <i class="icon las la-trash px-4"></i>Remove selected</a></div><div class="col-auto"></div>`;
                } else {
                    document.getElementById('choices_for_selected').innerHTML = ``;
                }

                // Restore opacity (fade in)
                element.style.opacity = 1;
            }, 200); // Delay the change for 0.5 seconds (matching the transition duration)
        }
    </script>
@endpush