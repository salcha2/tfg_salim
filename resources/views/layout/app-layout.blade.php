<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Aquí puedes agregar otros estilos si los tienes -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Aquí puedes agregar otros scripts si los tienes -->
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">
        <!-- Barra de navegación -->
        <nav class="bg-gray-800">
            <!-- Aquí puedes colocar tu barra de navegación -->
        </nav>

        <!-- Contenido principal -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
