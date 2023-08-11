{{-- @extends('layout/dashboard')

@push('styles')
    <link href="{{ asset('css/ubah.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h1 class="title">Ubah Data Barang</h1>
    <table>
        <form method="POST" action={{ route('perbarui_databarang', $data->id) }}>
            @csrf
            <tr>
                <td>Kode</td>
                <td> : <input type="text" name="kode" value={{ $data->kode }} placeholder="0293"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> : <input type="text" name="nama" value={{ $data->nama }} placeholder="Shampoo"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td> : <input type="text" name="satuan" value={{ $data->satuan }} placeholder="7000"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td> : <input type="text" name="stok" value={{ $data->stok }} placeholder="20"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan"></td>
            </tr>
        </form>
    </table>
@endsection --}}
@extends('layout/dashboard')
@push('styles')
    <link href="{{ asset('css/ubah.css') }}" rel="stylesheet">
@endpush
@section('content')
    <h1 class="title">Ubah Data Barang</h1>
    <table>
        <form method="POST" action={{ route('perbarui_databarang', $data->id) }}>
            @csrf
            <tr>
                <td>
                    <label class="tlip">Kode :</label>
                    <input type="text" name="kode" value={{ $data->kode }} placeholder="0293">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="tlip">Nama :</label>
                    <input type="text" name="nama" value={{ $data->nama }} placeholder="Shampoo">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="tlip">Satuan :</label>
                    <input type="text" name="satuan" value={{ $data->satuan }} placeholder="7000">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="tlip">Stok :</label>
                    <input type="text" name="stok" value={{ $data->stok }} placeholder="20">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan"></td>
            </tr>
        </form>
    </table>
@endsection
