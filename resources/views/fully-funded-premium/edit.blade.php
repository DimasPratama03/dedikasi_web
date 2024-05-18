@extends('adminlte::page')

@section('title', 'Edit Data Fully Funded Premium')

@section('content_header')
    <h1>Edit Data Fully Funded Premium</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('fully-funded-premium.update', $data->id) }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}" required>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $data->nama_lengkap }}" required>
        </div>
        <div class="form-group">
            <label for="domisili">Domisili:</label>
            <input type="text" name="domisili" class="form-control" id="domisili" value="{{ $data->domisili }}" required>
        </div>
        <div class="form-group">
            <label for="instansi">Instansi:</label>
            <input type="text" name="instansi" class="form-control" id="instansi" value="{{ $data->instansi }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_whatsapp">Nomor Whatsapp:</label>
            <input type="text" name="nomor_whatsapp" class="form-control" id="nomor_whatsapp" value="{{ $data->nomor_whatsapp }}" required>
        </div>
        <div class="form-group">
            <label for="username_instagram">Username Instagram:</label>
            <input type="text" name="username_instagram" class="form-control" id="username_instagram" value="{{ $data->username_instagram }}" required>
        </div>
        <div class="form-group">
            <label for="alasan_mengikuti">Alasan Mengikuti:</label>
            <textarea name="alasan_mengikuti" class="form-control" id="alasan_mengikuti" required>{{ $data->alasan_mengikuti }}</textarea>
        </div>
        <div class="form-group">
            <label for="divisi">Divisi:</label>
            <input type="text" name="divisi" class="form-control" id="divisi" value="{{ $data->divisi }}" required>
        </div>
        <div class="form-group">
            <label for="alasan_divisi">Alasan Divisi:</label>
            <textarea name="alasan_divisi" class="form-control" id="alasan_divisi" required>{{ $data->alasan_divisi }}</textarea>
        </div>
        <div class="form-group">
            <label for="riwayat_penyakit">Riwayat Penyakit:</label>
            <input type="text" name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" value="{{ $data->riwayat_penyakit }}">
        </div>
        <div class="form-group">
            <label for="kondisi_lapangan">Kondisi Lapangan:</label>
            <input type="text" name="kondisi_lapangan" class="form-control" id="kondisi_lapangan" value="{{ $data->kondisi_lapangan }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@stop
