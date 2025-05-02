<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Camilan DePe') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-6">
            <h1 class="text-2xl font-semibold mb-6">Toko Camilan DePe</h1>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li><a href="{{ route('kategori-camilan.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Kategori Camilan</a></li>
                <li><a href="{{ route('transaksi.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Transaksi</a></li>
                <li><a href="{{ route('laporan.index')}}"class="block py-2 px-4 hover:bg-gray-700 rounded">Laporan</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Statistik</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
