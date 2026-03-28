<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title dinâmico --}}
    <title>@yield('title', config('app.name'))</title>

    {{-- Bootstrap CSS --}}
    <link href="{{ asset('css/bootsrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.css" />

    {{-- CSS opcional --}}
    <style>
        /*body {*/
        /*    display: flex;*/
        /*    flex-direction: column;*/
        /*    min-height: 100vh;*/
        /*}*/

        /*main {*/
        /*    flex: 1;*/
        /*}*/

        /*.navbar-brand {*/
        /*    font-weight: bold;*/
        /*}*/

        /*footer {*/
        /*    background: #f8f9fa;*/
        /*    border-top: 1px solid #ddd;*/
        /*}*/
    </style>

    @stack('css')
</head>
<body>

{{-- 🔝 NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- 📦 CONTEÚDO --}}
<main class="container my-4">
    @yield('content')
</main>

{{-- 🔻 FOOTER --}}
<footer class="py-3 mt-auto">
    <div class="container text-center">
        <small>
            © {{ date('Y') }} {{ config('app.name') }} - Todos os direitos reservados
        </small>
    </div>
</footer>

{{-- Bootstrap JS --}}
<script src="{{ asset('js/bootrap.bundle.min.js') }}"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
@stack('js')
</body>
</html>
