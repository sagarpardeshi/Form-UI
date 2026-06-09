<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
      aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav flex-row order-md-last">
      <div class="d-none d-md-flex">
        <div class="nav-item me-3" x-data="{
        theme: localStorage.getItem('tablerTheme') || 'light',

        toggle() {

            this.theme =
                this.theme === 'dark'
                    ? 'light'
                    : 'dark';

            localStorage.setItem(
                'tablerTheme',
                this.theme
            );

            document.body.setAttribute(
                'data-bs-theme',
                this.theme
            );

            if (this.theme === 'light') {
                document.body.removeAttribute(
                    'data-bs-theme'
                );
            }
        }
    }">
          <a href="#" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
            data-bs-placement="bottom" @click="toggle()">
            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg>
          </a>
          <a href="#" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
            data-bs-placement="bottom" @click="toggle()">
            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
            </svg>
          </a>
        </div>
        <div class="nav-item dropdown d-none d-md-flex me-3">
          <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <span class="badge bg-red"></span>
          </a>
          <div class="card dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
            <div class="card-header">
              <h3 class="card-title">Notifications</h3>
            </div>
            <div class="list-group list-group-flush list-group-hoverable">
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="status-dot status-dot-animated bg-red d-block"></span>
                  </div>
                  <div class="col text-truncate">
                    <a href="#" class="text-body d-block">Example 1</a>
                    <div class="d-block text-muted text-truncate mt-n1">
                      Change deprecated html tags to text decoration
                      classes (#29604)
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="list-group-item-actions">
                      <i class="icon las la-times-circle text-muted"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="status-dot d-block"></span>
                  </div>
                  <div class="col text-truncate">
                    <a href="#" class="text-body d-block">Example 2</a>
                    <div class="d-block text-muted text-truncate mt-n1">
                      justify-content:between ⇒
                      justify-content:space-between (#29734)
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="list-group-item-actions">
                      <i class="icon las la-times-circle text-muted"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="status-dot d-block"></span>
                  </div>
                  <div class="col text-truncate">
                    <a href="#" class="text-body d-block">Example 3</a>
                    <div class="d-block text-muted text-truncate mt-n1">
                      Update change-version.js (#29736)
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="list-group-item-actions">
                      <i class="icon las la-times-circle text-muted"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="status-dot status-dot-animated bg-green d-block"></span>
                  </div>
                  <div class="col text-truncate">
                    <a href="#" class="text-body d-block">Example 4</a>
                    <div class="d-block text-muted text-truncate mt-n1">
                      Regenerate package-lock.json (#29730)
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="list-group-item-actions">
                      <i class="icon las la-times-circle text-muted"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col d-flex justify-content-center">
                  <a href="#" class="btn w-50">Read all</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item dropdown d-none d-md-flex me-3">
          <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show app menu"
            data-bs-auto-close="outside" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
              fill="currentColor">
              <path
                d="M183.5-183.5Q160-207 160-240t23.5-56.5Q207-320 240-320t56.5 23.5Q320-273 320-240t-23.5 56.5Q273-160 240-160t-56.5-23.5Zm240 0Q400-207 400-240t23.5-56.5Q447-320 480-320t56.5 23.5Q560-273 560-240t-23.5 56.5Q513-160 480-160t-56.5-23.5Zm240 0Q640-207 640-240t23.5-56.5Q687-320 720-320t56.5 23.5Q800-273 800-240t-23.5 56.5Q753-160 720-160t-56.5-23.5Zm-480-240Q160-447 160-480t23.5-56.5Q207-560 240-560t56.5 23.5Q320-513 320-480t-23.5 56.5Q273-400 240-400t-56.5-23.5Zm240 0Q400-447 400-480t23.5-56.5Q447-560 480-560t56.5 23.5Q560-513 560-480t-23.5 56.5Q513-400 480-400t-56.5-23.5Zm240 0Q640-447 640-480t23.5-56.5Q687-560 720-560t56.5 23.5Q800-513 800-480t-23.5 56.5Q753-400 720-400t-56.5-23.5Zm-480-240Q160-687 160-720t23.5-56.5Q207-800 240-800t56.5 23.5Q320-753 320-720t-23.5 56.5Q273-640 240-640t-56.5-23.5Zm240 0Q400-687 400-720t23.5-56.5Q447-800 480-800t56.5 23.5Q560-753 560-720t-23.5 56.5Q513-640 480-640t-56.5-23.5Zm240 0Q640-687 640-720t23.5-56.5Q687-800 720-800t56.5 23.5Q800-753 800-720t-23.5 56.5Q753-640 720-640t-56.5-23.5Z" />
            </svg>
          </a>
          <div class="card dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
            <div class="">
              <div class="card-header">
                <div class="card-title">More</div>
                <div class="card-actions btn-actions">
                  <a href="#" class="btn-action">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-1">
                      <path
                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                      </path>
                      <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="card-body scroll-y p-2" style="max-height: 50vh">
                <div class="row g-0">
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/amazon.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Amazon</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/android.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Android</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/app-store.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Apple App Store</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/apple-podcast.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Apple Podcast</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/apple.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Apple</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/behance.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Behance</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/discord.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Discord</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/dribbble.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Dribbble</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/dropbox.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Dropbox</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/ever-green.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Ever Green</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/facebook.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Facebook</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/figma.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Figma</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/github.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">GitHub</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/gitlab.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">GitLab</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-ads.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Ads</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-adsense.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google AdSense</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-analytics.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Analytics</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-cloud.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Cloud</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-drive.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Drive</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-fit.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Fit</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-home.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Home</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-maps.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Maps</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-meet.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Meet</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-photos.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Photos</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-play.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Play</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-shopping.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Shopping</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google-teams.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Google Teams</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/google.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Google</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/instagram.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Instagram</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/klarna.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Klarna</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/linkedin.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">LinkedIn</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/mailchimp.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Mailchimp</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/medium.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Medium</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/messenger.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Messenger</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/meta.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Meta</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/monday.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Monday</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/netflix.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Netflix</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/notion.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Notion</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/office-365.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Office 365</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/opera.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Opera</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/paypal.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">PayPal</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/petreon.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Patreon</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/pinterest.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Pinterest</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/play-store.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">Play Store</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/quora.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Quora</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/reddit.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Reddit</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/shopify.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Shopify</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/skype.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Skype</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/slack.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Slack</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/snapchat.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Snapchat</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/soundcloud.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">SoundCloud</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/spotify.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Spotify</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/stripe.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Stripe</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/telegram.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Telegram</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/tiktok.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">TikTok</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/tinder.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Tinder</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/trello.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Trello</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/truth.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Truth</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/tumblr.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Tumblr</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/twitch.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Twitch</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/twitter.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Twitter</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/vimeo.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Vimeo</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/vk.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">VK</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/wattpad.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Wattpad</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/webflow.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Webflow</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/whatsapp.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">WhatsApp</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/wordpress.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24"
                        height="24" alt="" />
                      <span class="h5">WordPress</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/xing.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Xing</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/yelp.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Yelp</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/youtube.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">YouTube</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/zapier.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Zapier</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/zendesk.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Zendesk</span>
                    </a>
                  </div>
                  <div class="col-4">
                    <a href="#"
                      class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                      <img src="{{ asset('assets/static/brands/zoom.svg') }}" class="w-6 h-6 mx-auto mb-2" width="24" height="24"
                        alt="" />
                      <span class="h5">Zoom</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
          <span class="avatar avatar-sm me-1" style="background-image: url({{ asset('assets/static/avatars/008m.jpg') }})"></span>
          <div class="manage-profile">
            <div>John R. Rodriguez</div>
            <div class="mt-1 small text-muted">Account executive</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="./profile">
            <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-user-circle"></i>
            Profile
          </a>
          <a href="./preferences" class="dropdown-item">
            <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-sliders-h"></i>
            Preferences
          </a>
          <a href="./sign-in" class="dropdown-item">
            <i class="nav-link-icon d-md-none d-lg-inline-block icon las la-sign-out-alt"></i>
            Logout
          </a>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="navbar-menu">
      <div class="col-md-6">
        <form action="" method="get" autocomplete="off" novalidate>
          <div class="input-icon">
            <span class="input-icon-addon">
              <i class="icon las la-search"></i>
            </span>
            <input type="text" value="" class="form-control" placeholder="Find something..."
              aria-label="Search in website" />
          </div>
        </form>
      </div>
    </div>
  </div>
</header>