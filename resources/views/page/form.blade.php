@extends('layout/dashboard')
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
@section('content')
        <h1 class="title">Pendataan Barang</h1>
        <table>
            <form method="POST" action={{ route('barang_simpan') }}>
                @csrf
                <tr><td>
                        <label class="tlip">Kode :</label>
                        <input type="text" name="kode" placeholder="0293">
                    </td>
                </tr>
                <tr><td>
                        <label class="tlip">Nama :</label>
                        <input type="text" name="nama" placeholder="Shampoo">
                    </td>
                </tr>
                <tr><td>
                        <label class="tlip">Satuan :</label>
                        <input type="text" name="satuan" placeholder="7000">
                    </td>
                </tr>
                <tr><td>
                        <label class="tlip">Stok :</label>
                        <input type="text" name="stok" placeholder="20">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan"></td>
                </tr>
            </form>
        </table>
@endsection
