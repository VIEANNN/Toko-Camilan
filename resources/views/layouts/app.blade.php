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
            <h1 class="text-2xl font-semibold mb-6">Camilan DePe</h1>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>

                <!-- Setup Section -->
                <li class="mt-4 font-bold text-sm text-gray-400 uppercase">Setup</li>
                <li><a href="{{ route('setup.katalog.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Katalog</a></li>
                <li><a href="{{ route('setup.inventori.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Inventori</a></li>
                <li><a href="{{ route('setup.warehouse.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Warehouse</a></li>
                <li><a href="{{ route('setup.pelanggan.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Pelanggan</a></li>
                <li><a href="{{ route('setup.marketing.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Marketing</a></li>
                <li><a href="{{ route('setup.kurir.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Kurir</a></li>
                <li><a href="{{ route('setup.jasa.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Jasa</a></li>
                <li><a href="{{ route('setup.tools.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Tools</a></li>

                <!-- Transaksi -->
                <li class="mt-4 font-bold text-sm text-gray-400 uppercase">Transaksi</li>
                <li><a href="{{ route('transaksi.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Transaksi</a></li>

                <!-- Laporan & Statistik -->
                <li class="mt-4 font-bold text-sm text-gray-400 uppercase">Analitik</li>
                <li><a href="{{ route('laporan.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Laporan</a></li>
                <li><a href="{{ route('statistik.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Statistik</a></li>

                <!-- Settings -->
                <li class="mt-4 font-bold text-sm text-gray-400 uppercase">Pengaturan</li>
                <li><a href="{{ route('settings.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a></li>
                <li><a href="{{ route('profile.edit') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Profil</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
