@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

      <div class="page-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-auto ms-3">
              <span class="avatar avatar-sm rounded-circle"
                style="background-image: url({{ asset('assets/static/avatars/008m.jpg') }})" ></span>
            </div>
            <div class="col">
              <h2 class="page-title mb-1">John R. Rodriguez</h2>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler" width="24" height="24"
                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                      <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                      <path d="M12 12l0 .01" />
                      <path d="M3 13a20 20 0 0 0 18 0" />
                    </svg>
                    Account executive at Fragrant Flower Lawn Services
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M14 4l0 4l-6 0l0 -4" />
                  </svg>
                  Update
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="page-body">
        <div class="container-xl">
          <div class="row g-3 justify-content-center">
            <div class="col-10 col-md-10 col-lg-10">
              <div class="card mb-5">
                <div class="card-body">
                  <div class="row g-3 mb-3">
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label required strong">Firstname</label>
                      <input type="text" class="form-control" name="firstname" autocomplete="off">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label required strong">Lastname</label>
                      <input type="text" class="form-control" name="lastname" autocomplete="off">
                    </div>
                  </div>
                  <div class="row g-3 mb-3">
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label required strong">Email</label>
                      <input type="text" class="form-control" name="email" disabled value="email@domain.com">
                      <small class="form-hint ms-1">Registered email cannot be modified</small>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label strong">Change avatar</label>
                      <input type="file" class="form-control" />
                    </div>
                  </div>
                  <div class="row g-3 mb-3">
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label required strong">Designation</label>
                      <input type="text" class="form-control" name="designation" autocomplete="off">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                      <label class="form-label strong">Location</label>
                      <select type="text" class="form-select " id="select-countries"></select>
                    </div>
                  </div>
                  <div class="row g-3 mb-3">
                    <div class="col-6 col-md-6 col-lg-6">
                      <label class="form-label strong">Telephone</label>
                      <select type="text" class="form-select" id="add-phone" value="" multiple></select>
                      <small class="form-hint ms-1">Add multiple phone if needed</small>
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
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.TomSelect && (new TomSelect(el = document.getElementById('add-phone'), {
        plugins: {
          remove_button: {
            title: 'Remove',
          }
        },
        create: true,
        copyClassesToDropdown: false,
        dropdownParent: 'body',
        controlInput: '<input>',
        render: {
          item: function (data, escape) {
            if (data.customProperties) {
              return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
            }
            return '<div>' + escape(data.text) + '</div>';
          },
          option: function (data, escape) {
            if (data.customProperties) {
              return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
            }
            return '<div>' + escape(data.text) + '</div>';
          },
        },
      }));
    });
    // @formatter:on
  </script>

  <script>
    // @formatter:off
    function flagemojiToPNG(flag) {
      var countryCode = Array.from(flag, (codeUnit) => codeUnit.codePointAt()).map(char => String.fromCharCode(char - 127397).toLowerCase()).join('')
      return "<img src='https://flagcdn.com/24x18/" + countryCode + ".png'>"
    }

    document.addEventListener("DOMContentLoaded", function () {
      var el;
      window.TomSelect && (new TomSelect(el = document.getElementById('select-countries'), {
        plugins: { 'clear_button': { 'title': 'Remove selected' }, 'dropdown_input': {} },
        valueField: 'code',
        labelField: 'name',
        searchField: ['name', 'code'],
        // fetch remote data
        load: function (query, callback) {
          var self = this;
          if (self.loading > 1) {
            callback();
            return;
          }

          var url = 'https://gist.githubusercontent.com/sagarpardeshi/2ee1f8e1ba11cf11fe762449f456aef4/raw/26dc35bb5c762327d42655064a3cdd4e3d3f7783/countries.json';
          fetch(url)
            .then(response => response.json())
            .then(json => {
              callback(json);
              self.settings.load = null;
            }).catch(() => {
              callback();
            });

        },
        // custom rendering function for options
        render: {
          item: function (data, escape) {
            if (data.flag) {
              return `<div class="align-items-center"><span class="flag flag-xs flag-country-${escape(data.code.toLowerCase())} col-auto me-2"></span> <span class="limited_length col-auto">${escape(data.name)}</div>`;
            }
            return '<div>' + escape(data.name) + '</span></div>';
          },
          option: function (data, escape) {
            if (data.flag) {
              return `<div class="align-items-center"><span class="flag flag-xs flag-country-${escape(data.code.toLowerCase())} col-auto me-2"></span> <span class="col-auto">${escape(data.name)}</span></div>`;
            }
            return '<div>' + escape(data.name) + '</div>';
          },
        },
      }));
    });
    // @formatter:on
  </script>
@endpush