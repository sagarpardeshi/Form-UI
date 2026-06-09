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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                      <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    San Fransisco, California
                  </a>
                </div>
                <div class="col-auto me-2">
                  <a href="#" class="link-reset link-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
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
                <a href="#" class="btn  btn-icon" aria-label="Button">
                  <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                  </svg>
                </a>
                <a href="#" class="btn  btn-icon" aria-label="Button">
                  <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 9h8" />
                    <path d="M8 13h6" />
                    <path
                      d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                  </svg>
                </a>
                <a href="#" class="btn  btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M15 15l3.35 3.35" />
                      <path d="M9 15l-3.35 3.35" />
                      <path d="M5.65 5.65l3.35 3.35" />
                      <path d="M18.35 5.65l-3.35 3.35" />
                    </svg>
                  Contact Support
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="page-body">
        <div class="container-xl">
          <ul class="nav nav-bordered mb-4" data-bs-toggle="tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#emailConfigTab" data-bs-toggle="tab">
                <i class="las la-envelope icon me-2"></i>
                SMTP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#storageConfigTab" data-bs-toggle="tab">
                <i class="las la-server icon me-2"></i>
                Storage</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#eeo" data-bs-toggle="tab">
                <i class="las la-sms icon me-2"></i>
                SMS</a>
            </li> -->
          </ul>
          <div class="container-fluid">
            <div class="row tab-content justify-content-center">

              <div class="col-12 col-md-10 tab-pane active show" id="emailConfigTab">
                <!-- SMTP Settings Card -->
                <div class="card p-3 border-0">

                  <!-- Header -->
                  <div class="card-header border-0">

                    <div class="w-100 d-flex align-items-center justify-content-between gap-3">

                      <!-- Left -->
                      <div class="d-flex align-items-center gap-3 min-w-0">

                        <div class="d-flex align-items-center justify-content-center rounded-circle bg-blue-lt"
                          style="width: 56px; height: 56px">

                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                              d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                            <path
                              d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
                          </svg>

                        </div>

                        <div class="d-flex flex-column justify-content-center">
                          <h3 class="lh-1 mb-1">SMTP Configuration</h3>

                          <small class="text-secondary">
                            Configure SMTP settings for email notifications
                          </small>
                        </div>

                      </div>

                      <!-- Right Dropdown -->
                      <div class="col-auto">
                        <label class="form-check form-check-single form-switch">
                          <input class="form-check-input" type="checkbox" checked>
                        </label>
                      </div>

                    </div>

                  </div>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Sender Details -->
                    <div class="mb-5">
                      <div class="form-label fw-semibold mb-3">
                        Sender information
                      </div>

                      <div class="row g-3">

                        <!-- From Name -->
                        <div class="col-md-6">
                          <label class="form-label required">
                            From name
                          </label>

                          <input type="text" class="form-control" placeholder="Acme Forms">
                        </div>

                        <!-- From Email -->
                        <div class="col-md-6">
                          <label class="form-label required">
                            From email address
                          </label>

                          <input type="email" class="form-control" placeholder="noreply@acmeforms.com">
                        </div>

                      </div>
                    </div>

                    <!-- SMTP Server -->
                    <div class="mb-5">
                      <div class="form-label fw-semibold mb-3">
                        SMTP server settings
                      </div>

                      <div class="row g-3">

                        <!-- Host -->
                        <div class="col-md-6">
                          <label class="form-label required">
                            SMTP host
                          </label>

                          <input type="text" class="form-control" placeholder="smtp.mailprovider.com">

                          <div class="form-hint">
                            Your email service provider SMTP endpoint.
                          </div>
                        </div>

                        <!-- Port -->
                        <div class="col-md-3">
                          <label class="form-label required">
                            Port
                          </label>

                          <input type="number" class="form-control" value="587">

                          <div class="form-hint">
                            Common ports: 465, 587
                          </div>
                        </div>

                        <!-- Encryption -->
                        <div class="col-md-3">
                          <label class="form-label required">Encryption</label>
                          <select type="text" class="form-select" placeholder="Encryption" id="encryption" value="">
                            <option value="none">None</option>
                            <option value="tls">TLS</option>
                            <option value="ssl">SSL</option>
                          </select>
                        </div>

                      </div>
                    </div>

                    <!-- Authentication -->
                    <div class="mb-5">
                      <div class="form-label fw-semibold mb-3">
                        Authentication
                      </div>

                      <div class="row g-3">

                        <!-- Username -->
                        <div class="col-md-6">
                          <label class="form-label required">
                            SMTP username
                          </label>

                          <input type="text" class="form-control" placeholder="smtp-user">
                        </div>

                        <!-- Password -->
                        <div class="col-md-6">
                          <label class="form-label required">
                            SMTP password
                          </label>

                          <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="••••••••••••">

                            <span class="input-group-text">
                              <a href="#" class="link-secondary" title="Show password">
                                <!-- eye icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                  stroke-linecap="round" stroke-linejoin="round">

                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                  <path
                                    d="M22 12c-2.667 4 -6 6 -10 6s-7.333 -2 -10 -6c2.667 -4 6 -6 10 -6s7.333 2 10 6" />
                                </svg>
                              </a>
                            </span>
                          </div>
                        </div>

                      </div>
                    </div>

                    <!-- Email Features -->
                    <div class="mb-4">
                      <div class="form-label fw-semibold mb-3">
                        Email options
                      </div>

                      <div class="card bg-gray-100">
                        <div class="card-body">

                          <div class="d-flex flex-column gap-3">

                            <!-- Track Opens -->
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox">

                              <span class="form-check-label">
                                Track email opens and delivery status
                              </span>
                            </label>

                            <!-- Reply To -->
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox" checked>

                              <span class="form-check-label">
                                Allow recipients to reply directly to sender email
                              </span>
                            </label>

                            <!-- Auto Retry -->
                            <label class="form-check">
                              <input class="form-check-input" type="checkbox">

                              <span class="form-check-label">
                                Automatically retry failed deliveries
                              </span>
                            </label>

                          </div>

                        </div>
                      </div>
                    </div>

                    <!-- Test Connection -->
                    <div class="alert alert-info bg-blue-lt mb-0">
                      <div class="d-flex">

                        <div class="me-3">
                          <!-- info icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 9h.01" />
                            <path d="M11 12h1v4h1" />
                            <path d="M12 3c4.97 0 9 4.03 9 9s-4.03 9 -9 9s-9 -4.03 -9 -9s4.03 -9 9 -9z" />
                          </svg>
                        </div>

                        <div class="flex-fill">
                          <div class="fw-semibold mb-1">
                            Verify your SMTP connection
                          </div>

                          <div class="text-secondary mb-3">
                            Send a test email to ensure your configuration is working correctly.
                          </div>

                          <div class="row g-2 align-items-center">
                            <div class="col-md">
                              <input type="email" class="form-control" placeholder="test@example.com">
                            </div>

                            <div class="col-md-auto">
                              <button class="btn btn-outline-primary w-100">

                                <!-- send icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                  stroke-linecap="round" stroke-linejoin="round">

                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path d="M10 14l11 -11" />
                                  <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-4 -9" />
                                  <path d="M21 3l-9 4" />
                                </svg>

                                Send test email
                              </button>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                  <!-- Footer -->
                  <div class="card-footer bg-transparent">
                    <div class="d-flex align-items-center">

                      <div class="text-secondary">
                        Credentials are securely encrypted before storage.
                      </div>

                      <div class="ms-auto d-flex gap-2">

                        <button class="btn btn-link link-secondary">
                          Cancel
                        </button>

                        <button class="btn btn-primary">

                          <!-- device-floppy icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">

                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 4m0 2a2 2 0 0 1 2 -2h8l4 4v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                            <path d="M14 4l0 4l-6 0l0 -4" />
                            <path d="M10 14l4 0" />
                          </svg>

                          Save SMTP configuration
                        </button>

                      </div>
                    </div>
                  </div>

                </div>

              </div>

              <div class="col-12 col-md-10 tab-pane " id="storageConfigTab">
                <!-- Submission Storage Integrations -->
                <div class="card p-3 border-0">

                  <!-- Header -->
                  <div class="card-header border-0">

                    <div class="w-100 d-flex align-items-center justify-content-between gap-3">

                      <!-- Left -->
                      <div class="d-flex align-items-center gap-3">

                        <div class="d-flex align-items-center justify-content-center rounded-circle bg-blue-lt"
                          style="width:56px;height:56px">

                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-database">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                              d="M3 15.731c1.968 1.507 5.234 2.269 9 2.269c3.76 0 7.025 -.76 9 -2.252v2.252c0 2.425 -3.895 3.936 -8.693 3.998l-.307 .002c-4.938 0 -9 -1.523 -9 -4z" />
                            <path
                              d="M3 9.731c1.968 1.507 5.234 2.269 9 2.269c3.76 0 7.025 -.76 9 -2.252v2.252c0 2.477 -4.062 4 -9 4c-4.798 0 -8.77 -1.438 -8.979 -3.795l-.016 -.101l-.005 -.104z" />
                            <path
                              d="M12 2c1.041 0 2.044 .068 2.977 .198l.469 .071q .84 .14 1.586 .348l.44 .131l.075 .024a11 11 0 0 1 .805 .3l.199 .086q .535 .242 .967 .53q .165 .11 .313 .225a3.8 3.8 0 0 1 .669 .668l.091 .128q .07 .105 .129 .211l.07 .139q .163 .35 .2 .73l.01 .211c0 2.477 -4.062 4 -9 4c-4.798 0 -8.77 -1.438 -8.979 -3.795a1 1 0 0 1 -.021 -.205l.005 -.104l.016 -.1c.205 -2.306 4.01 -3.733 8.667 -3.794z" />
                          </svg>

                        </div>

                        <div>

                          <h3 class="lh-1 mb-1">
                            Submission Storage
                          </h3>

                          <small class="text-secondary">
                            Manage spreadsheet and cloud storage integrations used for automatic form submission storage
                          </small>

                        </div>

                      </div>

                      <!-- Right -->
                      <div class="d-flex align-items-center gap-2">

                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-connect-storage">

                          Connect Storage

                        </button>

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

                          Form submissions are automatically synced to your connected storage providers.
                          At least <strong class="text-body">one active integration</strong> is required.

                        </div>

                      </div>

                      <div class="d-flex align-items-center gap-2 flex-wrap">

                        <span class="badge bg-green-lt border-0 px-3 py-2">
                          2 Active
                        </span>

                        <span class="badge bg-yellow-lt border-0 px-3 py-2">
                          1 Attention Needed
                        </span>

                        <span class="badge bg-blue-lt border-0 px-3 py-2">
                          Auto Sheet Creation Enabled
                        </span>

                      </div>

                    </div>

                    <!-- Integration Table -->
                    <div class="table-responsive rounded-4 border overflow-visible">

                      <table class="table table-vcenter table-striped mb-0">

                        <thead class="bg-light">

                          <tr>

                            <th>Integration</th>
                            <th>Usage & Forms</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>

                          </tr>

                        </thead>

                        <tbody>

                          <!-- Google Sheets -->
                          <tr>

                            <!-- Integration -->
                            <td>

                              <div class="d-flex align-items-start gap-3">

                                <div class="avatar bg-green-lt avatar-rounded avatar-shadow-0 flex-shrink-0">

                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                    <path d="M4 4h16v16h-16z" />
                                    <path d="M8 8h8" />
                                    <path d="M8 12h8" />
                                    <path d="M8 16h5" />

                                  </svg>

                                </div>

                                <div class="min-w-0">

                                  <div class="fw-bold">
                                    Google Sheets
                                  </div>

                                  <div class="text-muted small text-truncate">
                                    workspace@company.com
                                  </div>

                                  <div class="text-muted small">
                                    Connected May 02, 2026
                                  </div>

                                </div>

                              </div>

                            </td>

                            <!-- Usage -->
                            <td>

                              <div class="fw-medium mb-1">
                                2.4 GB / 15 GB
                              </div>

                              <div class="progress progress-sm mb-2">

                                <div class="progress-bar w-25"></div>

                              </div>

                              <div class="small text-muted">
                                18 Forms • 84,291 submissions
                              </div>

                            </td>

                            <!-- Status -->
                            <td>

                              <div class="d-flex flex-column gap-2">

                                <div>

                                  <span class="badge bg-green-lt">
                                    Active
                                  </span>

                                </div>

                                <div class="small text-muted">
                                  Last activity 1 min ago
                                </div>

                              </div>

                            </td>

                            <!-- Actions -->
                            <td class="text-end">

                              <div class="dropdown">

                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown">

                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                    <path d="M5 12m-1 0a1 1 0 1 0 2 0" />
                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0" />
                                    <path d="M19 12m-1 0a1 1 0 1 0 2 0" />

                                  </svg>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end">

                                  <a class="dropdown-item" href="#">
                                    View Forms
                                  </a>

                                  <a class="dropdown-item" href="#">
                                    Manage Permissions
                                  </a>

                                  <a class="dropdown-item" href="#">
                                    Open Storage
                                  </a>

                                  <a class="dropdown-item" href="#">
                                    Sync Logs
                                  </a>

                                  <div class="dropdown-divider"></div>

                                  <a class="dropdown-item" href="#">
                                    Disable Integration
                                  </a>

                                  <a class="dropdown-item text-red" href="#">
                                    Disconnect
                                  </a>

                                </div>

                              </div>

                            </td>

                          </tr>

                          <!-- Microsoft -->
                          <tr>

                            <!-- Integration -->
                            <td>

                              <div class="d-flex align-items-start gap-3">

                                <div class="avatar bg-blue-lt avatar-rounded avatar-shadow-0 flex-shrink-0">

                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                    <path d="M4 4l7 2v14l-7 -2z" />
                                    <path d="M13 4h7v16h-7" />

                                  </svg>

                                </div>

                                <div class="min-w-0">

                                  <div class="fw-bold">
                                    Microsoft 365
                                  </div>

                                  <div class="text-muted small text-truncate">
                                    admin@company.onmicrosoft.com
                                  </div>

                                  <div class="text-muted small">
                                    Connected Apr 18, 2026
                                  </div>

                                </div>

                              </div>

                            </td>

                            <!-- Usage -->
                            <td>

                              <div class="fw-medium mb-1">
                                8.2 GB / 20 GB
                              </div>

                              <div class="progress progress-sm mb-2">

                                <div class="progress-bar w-50"></div>

                              </div>

                              <div class="small text-muted">
                                7 Forms • 19,482 submissions
                              </div>

                            </td>

                            <!-- Status -->
                            <td>

                              <div class="d-flex flex-column gap-2">

                                <div>

                                  <span class="badge bg-orange-lt">
                                    Requires Attention
                                  </span>

                                </div>

                                <div class="small text-muted">
                                  Last activity 3 hours ago
                                </div>

                              </div>

                            </td>

                            <!-- Actions -->
                            <td class="text-end">

                              <div class="d-flex justify-content-end gap-2">

                                <button class="btn btn-warning btn-sm">
                                  Reconnect
                                </button>

                                <div class="dropdown">

                                  <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="20" height="20"
                                      viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" fill="none">

                                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />

                                      <path d="M5 12m-1 0a1 1 0 1 0 2 0" />
                                      <path d="M12 12m-1 0a1 1 0 1 0 2 0" />
                                      <path d="M19 12m-1 0a1 1 0 1 0 2 0" />

                                    </svg>

                                  </a>

                                  <div class="dropdown-menu dropdown-menu-end">

                                    <a class="dropdown-item" href="#">
                                      Enable Auto Storage
                                    </a>

                                    <a class="dropdown-item" href="#">
                                      View Forms
                                    </a>

                                    <a class="dropdown-item" href="#">
                                      Storage Settings
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item text-red" href="#">
                                      Disconnect
                                    </a>

                                  </div>

                                </div>

                              </div>

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </div>

                    <!-- Footer -->
                    <div class="mt-4 pt-3 border-top">

                      <div class="d-flex align-items-center gap-2">

                        <i class="icon text-muted flex-shrink-0 las la-info-circle"></i>

                        <div class="small text-muted lh-base">
                          Each form automatically creates and syncs its own spreadsheet or worksheet
                          inside the selected storage provider.
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