@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

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
              <div class="btn-list d-flex align-items-center">

                <!-- Back Button -->
                <a href="/forms" class="btn">
                  <i class="ti ti-arrow-left icon"></i>
                  Back to Forms
                </a>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a href="#" class="btn btn-icon rounded-circle p-2" data-bs-toggle="dropdown" aria-expanded="false">
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

      <div class="page-body">
        <div class="container-xl">
          <div class="row g-2">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="col-md-10">
                    <h3 class="card-title strong">Submission</h3>
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

                          <th>Submission ID</th>
                          <th>Form</th>
                          <th>Submitted By</th>
                          <th>Completion Time</th>
                          <th>Submitted At</th>
                          <th>Status</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- Row 1 -->
                        <tr>
                          <td>
                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                          </td>

                          <td data-label="Submission ID">
                            <span class="text-muted">4586935</span>
                          </td>

                          <td data-label="Form">
                            <div class="flex-fill">
                              <h4 class="m-0"><a href="/submissions/view" class="text-reset">Employee Feedback
                                  Form</a></h4>
                              <div class="text-muted">HR Department</div>
                            </div>
                          </td>

                          <td data-label="Submitted By">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-sm me-2" style="
                                    background-image: url({{ asset('assets/static/avatars/000f.jpg') }});
                                  "></span>

                              <div class="flex-fill">
                                <div class="h4 mb-0">
                                  Alice Johnson
                                </div>
                                <div class="text-muted">
                                  alice@example.com
                                </div>
                              </div>
                            </div>
                          </td>

                          <td data-label="Completion Time">09:45</td>

                          <td data-label="Submitted At" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                            2 hours ago
                          </td>

                          <td data-label="Status">
                            <span class="badge bg-green-lt">COMPLETED</span>
                          </td>

                          <td>
                            <div class="dropdown flex-nowrap">
                              <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots"
                                  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                              </a>

                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/submissions/view">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                  Open
                                </a>

                                <a class="dropdown-item" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                  Download
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                  Remove
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                          <td>
                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                          </td>

                          <td data-label="Submission ID">
                            <span class="text-muted">4586936</span>
                          </td>

                          <td data-label="Form">
                            <div class="flex-fill">
                              <h4 class="m-0"><a href="/submissions/view" class="text-reset">Project Approval
                                  Form</a></h4>
                              <div class="text-muted">Operations</div>
                            </div>
                          </td>

                          <td data-label="Submitted By">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-sm me-2" style="
                                    background-image: url({{ asset('assets/static/avatars/001f.jpg') }});
                                  "></span>

                              <div class="flex-fill">
                                <div class="h4 mb-0">
                                  Marie Lebarree
                                </div>
                                <div class="text-muted">marie@example.com</div>
                              </div>
                            </div>
                          </td>

                          <td data-label="Completion Time">05:12</td>

                          <td data-label="Submitted At" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                            4 hours ago
                          </td>

                          <td data-label="Status">
                            <span class="badge bg-green-lt">COMPLETED</span>
                          </td>

                          <td>
                            <div class="dropdown flex-nowrap">
                              <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots"
                                  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                              </a>

                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/submissions/view">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                  Open
                                </a>

                                <a class="dropdown-item" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                  Download
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                  Remove
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                          <td>
                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                          </td>

                          <td data-label="Submission ID">
                            <span class="text-muted">4586937</span>
                          </td>

                          <td data-label="Form">
                            <div class="flex-fill">
                              <h4 class="m-0"><a href="/submissions/view" class="text-reset">Customer Satisfaction
                                  Survey</a></h4>
                              <div class="text-muted">Support Team</div>
                            </div>
                          </td>

                          <td data-label="Submitted By">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-sm me-2" style="
                                    background-image: url({{ asset('assets/static/avatars/002f.jpg') }});
                                  "></span>

                              <div class="flex-fill">
                                <div class="h4 mb-0">
                                  Carol Davis
                                </div>
                                <div class="text-muted">
                                  carol@example.com
                                </div>
                              </div>
                            </div>
                          </td>

                          <td data-label="Completion Time">02:30</td>

                          <td data-label="Submitted At" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                            6 hours ago
                          </td>

                          <td data-label="Status">
                            <span class="badge bg-azure-lt">ATTEMPTED</span>
                          </td>

                          <td>
                            <div class="dropdown flex-nowrap">
                              <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots"
                                  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                              </a>

                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/submissions/view">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                  Open
                                </a>

                                <a class="dropdown-item" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                  Download
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                  Remove
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                          <td>
                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                          </td>

                          <td data-label="Submission ID">
                            <span class="text-muted">4586933</span>
                          </td>

                          <td data-label="Form">
                            <div class="flex-fill">
                              <h4 class="m-0"><a href="/submissions/view" class="text-reset">Vendor Registration
                                  Form</a></h4>
                              <div class="text-muted">Procurement</div>
                            </div>
                          </td>

                          <td data-label="Submitted By">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-sm me-2" style="
                                    background-image: url({{ asset('assets/static/avatars/003m.jpg') }});
                                  "></span>

                              <div class="flex-fill">
                                <div class="h4 mb-0">
                                  David Wilson
                                </div>
                                <div class="text-muted">
                                  david@example.com
                                </div>
                              </div>
                            </div>
                          </td>

                          <td data-label="Completion Time">04:18</td>

                          <td data-label="Submitted At" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                            1 day ago
                          </td>

                          <td data-label="Status">
                            <span class="badge bg-azure-lt">ATTEMPTED</span>
                          </td>

                          <td>
                            <div class="dropdown flex-nowrap">
                              <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots"
                                  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                              </a>

                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/submissions/view">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                  Open
                                </a>

                                <a class="dropdown-item" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                  Download
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
                                  Remove
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                          <td>
                            <input class="form-check-input me-2 align-middle select_cb" type="checkbox" />
                          </td>

                          <td data-label="Submission ID">
                            <span class="text-muted">4586932</span>
                          </td>

                          <td data-label="Form">
                            <div class="flex-fill">
                              <h4 class="m-0"><a href="/submissions/view" class="text-reset">Leave Request
                                  Form</a></h4>
                              <div class="text-muted">Administration</div>
                            </div>
                          </td>

                          <td data-label="Submitted By">
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar avatar-sm me-2" style="
                                    background-image: url({{ asset('assets/static/avatars/004m.jpg') }});
                                  "></span>

                              <div class="flex-fill">
                                <div class="h4 mb-0">
                                  Egan Poetz
                                </div>
                                <div class="text-muted">egan@example.com</div>
                              </div>
                            </div>
                          </td>

                          <td data-label="Completion Time">06:04</td>

                          <td data-label="Submitted At" title="Aug 6, 2018 • 10:08 pm" data-bs-toggle="tooltip">
                            2 days ago
                          </td>

                          <td data-label="Status">
                            <span class="badge bg-dark-lt">OPENED</span>
                          </td>

                          <td>
                            <div class="dropdown flex-nowrap">
                              <a href="#" class="ms-auto btn-action dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots"
                                  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                  <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                </svg>
                              </a>

                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/submissions/view">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-arrow-right"></i>
                                  Open
                                </a>

                                <a class="dropdown-item" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-download"></i>
                                  Download
                                </a>

                                <a class="dropdown-item removeButton" href="#">
                                  <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-trash"></i>
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
      .getElementById("select_all")
      .addEventListener("click", function (elm) {
        var cbs = document.getElementsByClassName("select_cb");
        for (var i = 0; i < cbs.length; i++) {
          if (cbs[i].type == "checkbox") {
            cbs[i].checked = elm.target.checked;
          }
        }
        check_available_choices();
      });
    document.querySelectorAll(".select_cb").forEach((elm) => {
      elm.addEventListener("click", function (elm) {
        var cbs = document.getElementById("select_all");
        if (cbs.type == "checkbox" && cbs.checked == true) {
          cbs.checked = false;
        }
        check_available_choices();
      });
    });

    function check_available_choices() {
      const className = "select_cb";

      // Get all elements with the specified class name
      const checkboxes = document.getElementsByClassName(className);

      // Initialize an array to store the checked checkboxes
      const checkedCheckboxes = [];

      // Loop through the elements
      for (let i = 0; i < checkboxes.length; i++) {
        // Check if the element is a checkbox and it's checked
        if (checkboxes[i].type === "checkbox" && checkboxes[i].checked) {
          // Add the checked checkbox to the array
          checkedCheckboxes.push(checkboxes[i]);
        }
      }

      const element = document.getElementById("choices_for_selected");

      // Apply a CSS transition for a smooth effect
      element.style.transition = "opacity 0.5s"; // Change opacity over 0.5 seconds
      element.style.opacity = 0; // Fade out the element

      // Wait for the transition to complete before changing the inner HTML
      setTimeout(function () {
        if (checkedCheckboxes.length > 0) {
          document.getElementById("choices_for_selected").innerHTML =
            `<div class="col"><a href="#" class="link-reset link-red" id="btn_remove_selected">
            <i class="icon las la-trash px-4"></i>Remove selected</a></div><div class="col-auto"></div>`;
        } else {
          document.getElementById("choices_for_selected").innerHTML = ``;
        }

        // Restore opacity (fade in)
        element.style.opacity = 1;
      }, 200); // Delay the change for 0.5 seconds (matching the transition duration)
    }
  </script>
@endpush