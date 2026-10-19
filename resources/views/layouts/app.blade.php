<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">
    <title>@yield('title', 'Toko Alat Musik') | Harmoniq</title>
    @vite(['resources/js/app.js'])

    <style>
        html[data-bs-theme="dark"] {
            --bs-body-bg: #0F0F0F;
            --bs-body-bg-rgb: 15, 15, 15;
            --bs-link-color: #E9ECEF;
            --bs-link-color-rgb: 233, 236, 239;
            --bs-link-hover-color: #FFFFFF;
            --bs-link-hover-color-rgb: 255, 255, 255;
        }
        html[data-bs-theme="dark"] .card { --bs-card-bg: #1C1C1C; }
        html[data-bs-theme="dark"] .accordion { --bs-accordion-bg: #1C1C1C; }
        html[data-bs-theme="dark"] .pagination {
            --bs-pagination-active-bg: #E9ECEF;
            --bs-pagination-active-color: #0F0F0F;
            --bs-pagination-active-border-color: #E9ECEF;
        }
        html[data-bs-theme="dark"] .form-control:focus,
        html[data-bs-theme="dark"] .form-select:focus {
            border-color: #ADB5BD;
            box-shadow: 0 0 0 .25rem rgba(233, 236, 239, .2);
        }
    </style>
</head>
<body class="bg-body d-flex flex-column min-vh-100">

    @include('partials.header')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>