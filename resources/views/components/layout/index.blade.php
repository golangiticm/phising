<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="dana, e-wallet, pembayaran digital, dompet digital">
    <title>
        @isset($title)
            {{ 'DANA' }} {{ $title }}
        @else
            {{ 'DANA' }}
        @endisset
    </title>

    <link rel="shortcut icon" href="{{ asset('web/images/logo.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Navbar -->
    <x-layout.header></x-layout.header>
    <!-- Hero -->
    <main class="mt-5">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-layout.footer></x-layout.footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
</body>

</html>
