<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use File;


class PesertaController extends Controller
{
    public function index(){
        $peserta = DB::table('peserta')->get();

        return view('Admin.index', compact('peserta'));
    }

    public function tambahPeserta(){
        return view('Admin.tambah-peserta');
    }

    public function storePeserta(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'asal_sekolah' => ['required', 'string'],
            'kelas' => ['required', 'string'],
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Coba Cek Kembali Inputannya!!');
        }

        $peserta = DB::table('peserta')->insertGetId([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_dokumen = $peserta . "_" . $request->nama . '.' . $file->getClientOriginalExtension();
            $file->move('Gambar Peserta/', $nama_dokumen);

            DB::table('peserta')->where('id', $peserta)->update([
                'gambar' => $nama_dokumen
            ]);
        }

        return redirect('Admin/index');
    }

    public function updatePeserta(Request $request, String $idPeserta){
        $validator = Validator::make($request->all(), [
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'asal_sekolah' => ['required', 'string'],
            'kelas' => ['required', 'string'],
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Coba Cek Kembali Inputannya!!');
        }

        if ($request->hasFile('gambar')) {


            $file = $request->file('gambar');
            $nama_dokumen = $idPeserta . "_" . $request->nama . '.' . $file->getClientOriginalExtension();
            $file->move('Gambar Peserta/', $nama_dokumen);

            DB::table('peserta')->where('id', $idPeserta)->update([
                'gambar' => $nama_dokumen
            ]);
        }

        $peserta = DB::table('peserta')->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas
        ]);

        return redirect('Admin/index');
    }


    public function Search(Request $request)
    {
        $cari = $request->cari;
        $peserta = DB::table('peserta')->where('nama', 'LIKE', "%".$cari."%")
                                    ->orWhere('alamat', 'LIKE', "%".$cari."%")
                                    ->orWhere('jenis_kelamin', 'LIKE', "%".$cari."%")
                                    ->orWhere('asal_sekolah', 'LIKE', "%".$cari."%")
                                    ->orWhere('kelas', 'LIKE', "%".$cari."%")
                                    ->get();

        return view('Admin.index', compact('peserta'));
    }

    public function editPeserta(String $idPeserta){
        $peserta = DB::table('peserta')->where('id', $idPeserta)->get();

        return view('Admin.edit-peserta', compact('peserta'));
    }

    public function hapusPeserta(String $idPeserta){
        $peserta = DB::table('peserta')->where('id', $idPeserta)->value('gambar');
        File::delete('Gambar Peserta/'.$peserta);

        $peserta = DB::table('peserta')->where('id', $idPeserta)->delete();

        return redirect('Admin/index');
    }


}
