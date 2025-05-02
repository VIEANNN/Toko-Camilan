@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
<div class="container">
    <h1>Edit Transaksi</h1>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf @method('PUT')
        @include('transaksi.form', ['transaksi' => $transaksi])
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
