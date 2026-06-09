<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title>
        @yield('title', config('app.name'))
    </title>

    {{-- Tabler CSS --}}
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/demo.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/modified.css') }}" rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <!-- Documentation: https://fonts.google.com/icons?icon.query=office&icon.platform=web&icon.set=Material+Symbols -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,500,1,0" />

    @stack('styles')
    @livewireStyles
</head>

<body>

    <div class="page">

        <div id="page-loader" class="page page-center bg-body">
            <div class="container container-slim py-4">
                <div class="text-center">
                    <div class="text-secondary mb-3">
                        Loading...
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-indeterminate"></div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #page-loader {
                position: fixed;
                inset: 0;
                z-index: 99999;
                transition: opacity .25s ease;
            }

            #page-loader.hide {
                opacity: 0;
                visibility: hidden;
            }
        </style>

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        {{-- Header --}}
        @include('layouts.partials.header')

        <div class="page-wrapper">

            {{-- Main Content --}}
            @yield('content')

            {{-- Modals --}}
            @stack('modals')

            {{-- Footer --}}
            @include('layouts.partials.footer')

        </div>

    </div>

    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tom-select/dist/js/tom-select.complete.min.js') }}"></script>
    <script src="{{ asset('assets/libs/litepicker/dist/litepicker.js') }}"></script>
    <script src="{{ asset('assets/js/tabler.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo-theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo.min.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('scripts')
    @livewireScripts

    <script>
        window.addEventListener('load', () => {
            const loader = document.getElementById('page-loader');

            loader.classList.add('hide');

            setTimeout(() => {
                loader.remove();
            }, 250);
        });

        document.addEventListener('click', function (e) {

            const link = e.target.closest('a');

            if (!link) return;

            const href = link.getAttribute('href');

            if (
                !href ||
                href.startsWith('#') ||
                href.startsWith('javascript:') ||
                link.target === '_blank' ||
                link.hasAttribute('data-bs-toggle')
            ) {
                return;
            }

            const loader = document.getElementById('page-loader');

            if (loader) {
                loader.classList.remove('hide');
            }
        });
    </script>

</body>

</html>