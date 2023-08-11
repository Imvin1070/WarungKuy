@extends('layout/dashboard')

@push('styles')
    <link href="{{ asset('css/data.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h1 class="title">Data Barang</h1>
    <table>
        <tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>Satuan</td>
            <td>Stok</td>
        </tr>
        @foreach ($data as $a)
            <tr>
                <td>{{ $a->kode }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->satuan }}</td>
                <td>{{ $a->stok }}</td>
                {{-- <td>
                <a href="{{ route('ubah_databarang', $a->id) }}" class="btn-update">Update</a>
            </td>
            <td>
                <a href="{{ route('hapus_barang', $a->id) }}" class="btn-delete">Delete</a>
            </td> --}}
                @if (Auth::user()->role == 'Superadmin')
                    <td>
                        <a href="{{ route('hapus_barang', $a->id) }}" class="btn-delete">Delete</a>
                    </td>
                @elseif(Auth::user()->role == 'Admin')
                    <td>
                        <a href="{{ route('ubah_databarang', $a->id) }}" class="btn-update">Update</a>
                    </td>
                @endif


            </tr>
        @endforeach
    </table>
@endsection
