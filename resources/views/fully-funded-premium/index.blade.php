@extends('adminlte::page')

@section('title', 'Data Fully Funded Premium')

@section('content_header')
    <h1>Data Fully Funded Premium</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('fully-funded-premium.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Domisili</th>
                <th>Instansi</th>
                <th>Nomor Whatsapp</th>
                <th>Username Instagram</th>
                <th>Alasan Mengikuti</th>
                <th>Divisi</th>
                <th>Alasan Divisi</th>
                <th>Riwayat Penyakit</th>
                <th>Kondisi Lapangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->domisili }}</td>
                    <td>{{ $item->instansi }}</td>
                    <td>{{ $item->nomor_whatsapp }}</td>
                    <td>{{ $item->username_instagram }}</td>
                    <td>{{ $item->alasan_mengikuti }}</td>
                    <td>{{ $item->divisi }}</td>
                    <td>{{ $item->alasan_divisi }}</td>
                    <td>{{ $item->riwayat_penyakit }}</td>
                    <td>{{ $item->kondisi_lapangan }}</td>
                    <td>
                        <a href="{{ route('fully-funded-premium.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('fully-funded-premium.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
