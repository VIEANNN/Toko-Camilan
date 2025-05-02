@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        
        <div class="bg-white shadow-sm rounded-lg p-4">
            <h2 class="text-lg font-semibold">Jumlah Kategori Camilan</h2>
            <p>{{ $kategoriCount }} kategori camilan terdaftar.</p>
        </div>
    </div>
@endsection
