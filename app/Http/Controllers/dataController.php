<?php

namespace App\Http\Controllers;

use App\Models\dataAdmin;

use Illuminate\Http\Request;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKu = dataAdmin::get();
        // return $dataKu;
        return view('admin.data', compact('dataKu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'training'  => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mentor'    => 'required',
            'waktu'     => 'required',
            'harga'     => 'required',
        ]);

        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('pict'), $namaGambar);

        dataAdmin::create([
            'training'  => $request->training,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $namaGambar,
            'mentor'    => $request->mentor,
            'waktu'     => $request->waktu,
            'harga'     => $request->harga
        ]);
        return redirect()->route('dataAdmin.index')->with('success', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = dataAdmin::find($id);
        return view('admin.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dataAdmin::find($id)->update([
        //     'gambar' => $request->gambar,
        //     'training' => $request->training,
        //     'deskripsi' => $request->deskripsi,
        //     'mentor' => $request->mentor,
        //     'waktu' => $request->waktu,
        //     'harga' => $request->harga
        // ]);
        // dataAdmin::find($id)->update($request->all());

        $request->validate([
            'training'  => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mentor'    => 'required',
            'waktu'     => 'required',
            'harga'     => 'required',
        ]);

        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('pict'), $namaGambar);

        dataAdmin::find($id)->update([
            'training' => $request->training,
            'gambar' => $namaGambar,
            'deskripsi' => $request->deskripsi,
            'mentor' => $request->mentor,
            'waktu' => $request->waktu,
            'harga' => $request->harga
        ]);

        return redirect()->route('dataAdmin.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dataAdmin::find($id)->delete();
        return redirect()->route('dataAdmin.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
