@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="container">
    <h1>Tambah Transaksi</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        @include('transaksi.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
