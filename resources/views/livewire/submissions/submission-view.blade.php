@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <div class="d-flex align-items-center">
                <h2 class="page-title mb-0">Submission Details</h2>
              </div>
              <div class="text-muted mt-1">
                Submission #SUB-001 - Alice Johnson
              </div>
            </div>
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list d-flex align-items-center">

                <!-- Back Button -->
                <a href="/submissions" class="btn">
                  <i class="ti ti-arrow-left icon"></i>
                  Back to Submissions
                </a>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a href="#" class="btn btn-icon rounded-circle p-2" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                      <path d="M10 20h-6"></path>
                      <path d="M14 20h6"></path>
                      <path
                        d="M12 15l-2 -2h-3a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-3l-2 2z">
                      </path>
                      <path d="M9 6h6"></path>
                      <path d="M9 9h3"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">
                      <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-check-double"></i>
                      Accepted
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-search"></i>
                      Reviewed
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-ban"></i>
                      Disqualified
                    </a>

                    <a class="dropdown-item" href="#">
                      <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-stamp"></i>
                      Approved
                    </a>

                  </div>
                </div>

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
            <div class="col-lg-12">
              <div class="card p-3">
                <div class="card-header mb-2">
                  <h3 class="card-title">Respondent Information</h3>
                  <div class="card-actions">
                    <span class="badge bg-green-lt px-2 py-1 text-uppercase me-1">Completed</span>
                    <span class="badge bg-blue-lt px-2 py-1 text-uppercase">Verified Submission</span>
                  </div>
                </div>

                <div class="card-body">
                  <div class="datagrid">
                    <div class="datagrid-item">
                      <div class="datagrid-title">Respondent</div>
                      <div class="datagrid-content">
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-sm me-2" style="
                                background-image: url({{ asset('assets/static/avatars/000f.jpg') }});
                              ">
                          </span>

                          <div>
                            <div class="fw-medium">Alice Johnson</div>
                            <div class="text-muted small">
                              Business Developer
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Email Address</div>
                      <div class="datagrid-content">alice@example.com</div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Phone Number</div>
                      <div class="datagrid-content">+1 (555) 123-4567</div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Submitted At</div>
                      <div class="datagrid-content">
                        Feb 28, 2026 • 04:18 PM
                      </div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Submission ID</div>
                      <div class="datagrid-content">4586930</div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Form</div>
                      <div class="datagrid-content">
                        <div class="d-flex align-items-center text-primary">
                          <!-- <i class="ti ti-clipboard-text me-1"></i> -->
                          <a href="form-details.html" class="nav-link">Product Launch Poll</a>
                        </div>
                      </div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Source</div>
                      <div class="datagrid-content">
                        Submitted via Customer Portal
                      </div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Completion Time</div>
                      <div class="datagrid-content">16 min 14 sec</div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Response Intelligence</div>
                      <div class="datagrid-content">
                        <div class="d-flex align-items-center text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 20l10 0"></path><path d="M6 6l6 -1l6 1"></path><path d="M12 3l0 17"></path><path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path><path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path></svg>
                          High Quality Response
                        </div>
                      </div>
                    </div>

                    <div class="datagrid-item">
                      <div class="datagrid-title">Completion Rate</div>
                      <div class="datagrid-content">
                        <span class="badge bg-green-lt px-2 py-1 text-uppercase">100%</span>
                      </div>
                    </div>

                    <!-- <div class="datagrid-item">
                      <div class="datagrid-title">Fields</div>
                      <div class="datagrid-content">14 / 14 answered</div>
                    </div> -->

                    <!-- <div class="datagrid-item">
                      <div class="datagrid-title">Refill Attempts</div>
                      <div class="datagrid-content">
                        1 resubmission allowed
                      </div>
                    </div> -->

                    <div class="datagrid-item">
                      <div class="datagrid-title">Automation Stage</div>
                      <div class="datagrid-content">
                        <div class="d-flex align-items-center text-success">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M10 20h-6"></path>
                            <path d="M14 20h6"></path>
                            <path
                              d="M12 15l-2 -2h-3a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-3l-2 2z">
                            </path>
                            <path d="M9 6h6"></path>
                            <path d="M9 9h3"></path>
                          </svg>
                          Accepted
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Responses -->
          <div class="row row-deck row-cards mb-3">
            <div class="col-12">
              <div class="card p-3">

                <!-- HEADER -->

                <div class="card-header">

                  <div>

                    <h3 class="card-title mb-1">
                      Form Responses
                    </h3>

                    <div class="text-muted small">
                      Includes field-level behavior analytics and validation insights.
                    </div>

                  </div>

                </div>

                <!-- BODY -->

                <div class="card-body p-0">

                  <!-- ROW -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-indigo-lt">
                              Long Text
                            </span>

                            <span class="badge bg-yellow-lt">
                              AI Insight
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            What challenges did you face while onboarding your team onto our platform, and what
                            improvements
                            would make the experience more intuitive for first-time users?

                          </div>

                          <div class="text-muted small mt-3 lh-base">

                            Long responses automatically become scrollable while maintaining equal row proportions and
                            visual consistency.

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex flex-column justify-content-center"
                            style="min-height:140px;max-height:180px;overflow-y:auto;">

                            <div class="lh-lg text-break">

                              The onboarding process was mostly smooth, but several team members initially struggled
                              with
                              permissions configuration and workspace setup.

                              <br><br>

                              We would recommend adding:

                              <br><br>

                              • Guided onboarding walkthroughs

                              <br>

                              • Better tooltips for admin settings

                              <br>

                              • Recommended default templates

                              <br>

                              • Faster dashboard rendering during high traffic periods

                              <br><br>

                              Overall support quality was excellent and issues were resolved within the same business
                              day.

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
                                  Words
                                </div>

                                <div class="fw-semibold">
                                  124
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Sentiment
                                </div>

                                <div class="fw-semibold text-success">
                                  Positive
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Typing Duration
                                </div>

                                <div class="fw-semibold">
                                  48 Seconds
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Corrections
                                </div>

                                <div class="fw-semibold">
                                  6 Edits
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

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-green-lt">
                              Email
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Primary contact email address for communication and product updates

                          </div>

                          <div class="text-muted small mt-3">

                            Browser autofill and validation analytics enabled.

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center" style="min-height:140px;">

                            <div>

                              <div class="fw-bold text-break">
                                alice@example.com
                              </div>

                              <div class="text-success small mt-2">
                                Verified successfully
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
                                  Input Method
                                </div>

                                <div class="fw-semibold">
                                  Browser Autofill
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Validation
                                </div>

                                <div class="fw-semibold">
                                  First Attempt
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Completion Time
                                </div>

                                <div class="fw-semibold">
                                  2 Seconds
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- MULTI SELECT -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-red-lt">
                              Multi Select
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Which communication channels would you prefer for future support conversations?

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center" style="min-height:140px;">

                            <div class="d-flex flex-wrap gap-2">

                              <span class="badge bg-blue-lt px-3 py-2">
                                Email
                              </span>

                              <span class="badge bg-blue-lt px-3 py-2">
                                SMS
                              </span>

                              <span class="badge bg-blue-lt px-3 py-2">
                                WhatsApp
                              </span>

                              <span class="badge bg-blue-lt px-3 py-2">
                                Slack
                              </span>

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
                                  Selections
                                </div>

                                <div class="fw-semibold">
                                  4 Selected
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Selection Changes
                                </div>

                                <div class="fw-semibold">
                                  None
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Option Reviews
                                </div>

                                <div class="fw-semibold">
                                  6
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- FILE UPLOAD -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-pink-lt">
                              File Upload
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Upload screenshots, logs, or supporting documentation related to the reported issue

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center justify-content-between"
                            style="min-height:140px;">

                            <div class="d-flex align-items-start gap-3">

                              <div class="avatar avatar-md bg-blue-lt border-0 avatar-rounded">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="currentColor"
                                  class="icon icon-tabler icons-tabler-filled icon-tabler-file-description">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path
                                    d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005zm3 14h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m0 -4h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2" />
                                  <path d="M19 7h-4l-.001 -4.001z" />
                                </svg>

                              </div>

                              <div class="flex-fill min-w-0">

                                <div class="fw-semibold text-break">

                                  onboarding_dashboard_loading_issue_final_version_v2.png

                                </div>

                                <div class="text-muted small mt-2">

                                  1.2 MB • PNG • Secure upload validated

                                </div>

                                <div class="d-flex flex-wrap gap-2 mt-3">

                                  <a class="btn btn-md btn-outline-primary" href="#">
                                    <i class="icon d-md-none d-lg-inline-block icon las la-download"></i>
                                    <span>Download</span>
                                  </a>

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
                                  Upload Time
                                </div>

                                <div class="fw-semibold">
                                  3 Seconds
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Virus Scan
                                </div>

                                <div class="fw-semibold text-success">
                                  Passed
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Retry Attempts
                                </div>

                                <div class="fw-semibold">
                                  None
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- RATING -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-yellow-lt">
                              Rating
                            </span>

                            <span class="badge bg-orange-lt">
                              Required
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            How satisfied are you with the onboarding and support experience?

                          </div>

                          <div class="text-muted small mt-3">

                            Star rating with benchmark comparison enabled.

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex flex-column justify-content-center" style="min-height:140px;">

                            <div class="d-flex align-items-center justify-content-between mb-3">

                              <div class="fw-bold fs-2">
                                4.5 / 5
                              </div>

                              <div class="text-yellow fs-2">
                                ★★★★★
                              </div>

                            </div>

                            <div class="progress progress-sm">

                              <div class="progress-bar bg-yellow" style="width:90%"></div>

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
                                  Average Benchmark
                                </div>

                                <div class="fw-semibold">
                                  4.1 / 5
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Response Time
                                </div>

                                <div class="fw-semibold">
                                  5 Seconds
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Rating Changes
                                </div>

                                <div class="fw-semibold">
                                  None
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- PHONE NUMBER -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-cyan-lt">
                              Phone Number
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Primary phone number for urgent communication and verification

                          </div>

                          <div class="text-muted small mt-3">

                            OTP verification enabled.

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center" style="min-height:140px;">

                            <div>

                              <div class="fw-bold fs-3">
                                +1 (555) 240-9812
                              </div>

                              <div class="text-success small mt-2">
                                Verified successfully
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
                                  Country Detection
                                </div>

                                <div class="fw-semibold">
                                  United States
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  OTP Attempts
                                </div>

                                <div class="fw-semibold">
                                  1 Attempt
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Completion Time
                                </div>

                                <div class="fw-semibold">
                                  6 Seconds
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

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-blue-lt">
                              Date Picker
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Preferred follow-up meeting date and time

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center justify-content-between"
                            style="min-height:140px;">

                            <div>

                              <div class="fw-bold fs-3">
                                March 18, 2026
                              </div>

                              <div class="text-muted mt-2">
                                Thursday • 10:30 AM
                              </div>

                            </div>

                            <span class="badge bg-green-lt px-3 py-2">
                              Scheduled
                            </span>

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
                                  Timezone
                                </div>

                                <div class="fw-semibold">
                                  UTC -05:00
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Date Changes
                                </div>

                                <div class="fw-semibold">
                                  2 Revisions
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Availability Match
                                </div>

                                <div class="fw-semibold text-success">
                                  Available
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- IDENTITY -->

                  <div class="border-bottom p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-purple-lt">
                              Identity Verification
                            </span>

                            <span class="badge bg-success-lt">
                              KYC Verified
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Upload government-issued identity document for account verification

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center justify-content-between"
                            style="min-height:140px;">

                            <div class="d-flex align-items-center gap-3">

                              <span class="avatar avatar-lg bg-green-lt">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-id"
                                  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                  fill="none">

                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <rect x="3" y="4" width="18" height="16" rx="3" />
                                  <circle cx="9" cy="10" r="2" />
                                  <path d="M15 8h2" />
                                  <path d="M15 12h2" />
                                  <path d="M7 16h10" />

                                </svg>

                              </span>

                              <div>

                                <div class="fw-bold">
                                  Passport_Verification.pdf
                                </div>

                                <div class="text-muted small mt-1">
                                  Government issued passport • OCR validated
                                </div>

                              </div>

                            </div>

                            <span class="badge bg-success text-success-fg px-3 py-2">
                              Verified
                            </span>

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
                                  Verification Status
                                </div>

                                <div class="fw-semibold text-success">
                                  Approved
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  OCR Confidence
                                </div>

                                <div class="fw-semibold">
                                  98.2%
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Verification Time
                                </div>

                                <div class="fw-semibold">
                                  14 Seconds
                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- YES / NO -->

                  <div class="p-4">

                    <div class="row g-4 align-items-stretch">

                      <!-- QUESTION -->

                      <div class="col-12 col-xl-3 d-flex">

                        <div class="w-100 d-flex flex-column justify-content-center">

                          <div class="d-flex flex-wrap gap-2 mb-3">

                            <span class="badge bg-teal-lt">
                              Boolean
                            </span>

                          </div>

                          <div class="fw-semibold lh-base text-break">

                            Would you like to receive product updates and release announcements?

                          </div>

                        </div>

                      </div>

                      <!-- ANSWER -->

                      <div class="col-12 col-xl-6 d-flex">

                        <div class="card bg-light-subtle border w-100 shadow-none">

                          <div class="card-body d-flex align-items-center justify-content-between"
                            style="min-height:140px;">

                            <div class="d-flex align-items-center gap-3">

                              <span class="avatar avatar-md bg-success text-success-fg">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M5 12l5 5l10 -10" />

                                </svg>

                              </span>

                              <div>

                                <div class="fw-bold fs-3">
                                  Yes
                                </div>

                                <div class="text-muted small mt-1">
                                  User opted in during signup
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
                                  Selection Time
                                </div>

                                <div class="fw-semibold">
                                  1 Second
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Changes
                                </div>

                                <div class="fw-semibold">
                                  None
                                </div>

                              </div>

                              <div>

                                <div class="text-muted small">
                                  Consent Logged
                                </div>

                                <div class="fw-semibold text-success">
                                  Yes
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

          <div class="row row-deck row-cards mb-3">

            <div class="col-lg-6">

              <div class="card h-100 p-3">

                <div class="card-header">
                  <h3 class="card-title">
                    Submission Timeline
                  </h3>
                </div>

                <div class="card-body">

                  <ul class="steps steps-vertical">
                    <li class="step-item">
                      <div class="h4 m-0">10:02 AM</div>
                      <div class="text-secondary">
                        Form session started.
                      </div>
                    </li>
                    <li class="step-item">
                      <div class="h4 m-0">10:03 AM</div>
                      <div class="text-secondary">Email field autofilled from saved browser profile.</div>
                    </li>
                    <li class="step-item">
                      <div class="h4 m-0">10:05 AM</div>
                      <div class="text-secondary">Phone number validation retried twice before success.</div>
                    </li>
                    <li class="step-item">
                      <div class="h4 m-0">10:07 AM</div>
                      <div class="text-secondary">File uploaded successfully.</div>
                    </li>
                    <li class="step-item">
                      <div class="h4 m-0">10:08 AM</div>
                      <div class="text-secondary">Form submitted successfully.</div>
                    </li>
                  </ul>

                </div>

              </div>

            </div>

            <!-- Automation -->

            <div class="col-lg-6">

              <div class="card h-100 p-3">

                <div class="card-header">
                  <h3 class="card-title">
                    Workflow & Automation
                  </h3>
                </div>

                <div class="card-body">

                  <div class="list-group list-group-flush">

                    <div class="list-group-item px-0">

                      <div class="d-flex align-items-start">

                        <span class="avatar avatar-sm bg-green-lt text-green me-3">

                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />

                          </svg>

                        </span>

                        <div class="flex-fill">

                          <div class="fw-bold">
                            Internal Notification
                          </div>

                          <div class="text-muted small">
                            Team alert delivered successfully after submission.
                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="list-group-item px-0">

                      <div class="d-flex align-items-start">

                        <span class="avatar avatar-sm bg-blue-lt text-blue me-3">

                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 12l5 5l10 -10" />
                            <path d="M2 12l5 5m5 -5l5 -5" />

                          </svg>

                        </span>

                        <div class="flex-fill">

                          <div class="fw-bold">
                            Auto-tagging
                          </div>

                          <div class="text-muted small">
                            Submission tagged automatically based on selected categories.
                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="list-group-item px-0">

                      <div class="d-flex align-items-start">

                        <span class="avatar avatar-sm bg-cyan-lt text-cyan me-3">

                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 8v4l3 3" />
                            <path d="M12 3a9 9 0 1 0 9 9" />

                          </svg>

                        </span>

                        <div class="flex-fill">

                          <div class="fw-bold">
                            Follow-up Workflow
                          </div>

                          <div class="text-muted small">
                            Automated reminder scheduled based on preferred contact date.
                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="list-group-item px-0">

                      <div class="d-flex align-items-start">

                        <span class="avatar avatar-sm bg-green-lt text-green me-3">

                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />

                          </svg>

                        </span>

                        <div class="flex-fill">

                          <div class="fw-bold">
                            Export Queue
                          </div>

                          <div class="text-muted small">
                            Submission exported successfully into reporting pipeline.
                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <!-- Additional Information -->
          <div class="row row-deck row-cards">
            <div class="col-lg-6">
              <div class="card h-100 p-3">

                <div class="card-header">
                  <h3 class="card-title">
                    Technical & Geo Details
                  </h3>
                </div>

                <div class="card-body">

                  <div class="row g-3">

                    <div class="col-sm-6">

                      <div class="form-label">
                        IP Address
                      </div>

                      <div class="fw-bold">
                        192.168.1.100
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Device Type
                      </div>

                      <div class="fw-bold">
                        Mobile
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Browser
                      </div>

                      <div class="fw-bold">
                        Chrome 120
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Operating System
                      </div>

                      <div class="fw-bold">
                        Android 14
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Screen Resolution
                      </div>

                      <div class="fw-bold">
                        1080 × 2400
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Timezone
                      </div>

                      <div class="fw-bold">
                        UTC -5
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Country
                      </div>

                      <div class="fw-bold">
                        United States
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Region
                      </div>

                      <div class="fw-bold">
                        New York
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        City
                      </div>

                      <div class="fw-bold">
                        New York
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Postal Code
                      </div>

                      <div class="fw-bold">
                        10001
                      </div>

                    </div>

                  </div>

                </div>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-100 p-3">

                <div class="card-header">
                  <h3 class="card-title">
                    Form Performance Insights
                  </h3>
                </div>

                <div class="card-body">

                  <div class="row g-3">

                    <div class="col-sm-6">

                      <div class="form-label">
                        Fields Completed
                      </div>

                      <div class="fw-bold">
                        18 / 18
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Optional Fields
                      </div>

                      <div class="fw-bold">
                        4 / 4 Completed
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Validation Retries
                      </div>

                      <div class="fw-bold">
                        2 retries
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Average Field Time
                      </div>

                      <div class="fw-bold">
                        11s
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Autofilled Fields
                      </div>

                      <div class="fw-bold">
                        3 fields
                      </div>

                    </div>

                    <div class="col-sm-6">

                      <div class="form-label">
                        Longest Interaction
                      </div>

                      <div class="fw-bold">
                        Feedback Message
                      </div>

                    </div>

                    <div class="col-12">

                      <div class="alert alert-info bg-blue-lt mb-0">

                        Respondents who complete all optional fields
                        show 32% higher follow-up interaction rates.

                      </div>

                    </div>

                    <div class="col-12">

                      <div class="alert alert-warning bg-orange-lt mb-0">

                        Submission resumed after 48s inactivity before final submit action.

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

@endpush