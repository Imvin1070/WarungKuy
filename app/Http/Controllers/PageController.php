<?php
namespace App\Http\Controllers;

use App\Models\Warungkuy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function dashboard()
    {
        return view("layout/dashboard");
    }
    function form()
    {
        return view("page/form");
    }
    function barang_simpan(Request $request){
        Warungkuy::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'satuan' => $request->satuan,
            'stok'=> $request->stok,
        ]);
        return redirect()->route('data_barang');
    }
    function barang_data(){
        $data = Warungkuy::get();

        return view('page/data', compact('data'));
    }
    function barang_ubah($id){
        $data = Warungkuy::find($id);

        return view('page/ubah', compact('data'));
    }
    function barang_perbarui(Request $request,$id){
        $Barang = Warungkuy::find($id);
        $Barang->kode = $request->kode;
        $Barang->nama = $request->nama;
        $Barang->satuan = $request->satuan;
        $Barang->stok = $request->stok;
        $Barang->save();

        return redirect()->route('data_barang');
    }
    function barang_hapus($id){
        $Barang = Warungkuy::find($id);
        $Barang->delete($id);

        return redirect()->route('data_barang');
    }
    public function index() {
        if(Auth::user()->role == 'Superadmin'){
            return redirect()->route("data_barang");
        } elseif (Auth::user()->role == 'Admin'){
            return redirect()->route("form");
        }
    }
}
