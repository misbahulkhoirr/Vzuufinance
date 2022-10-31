<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::latest()->get();

        return view('master-data.kategori.index', [
            'title' => 'Kategori',
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master-data.kategori.create', [
            'title' => 'Tambah Kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $attributtes = [
            'name' => strtoupper($request->name),
        ];

        Kategori::create($attributtes);

        return redirect('/master-data/kategori-pembukuan')->with('success', 'Successfully saved data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori_pembukuan)
    {
        $kategori = Kategori::where('id', $kategori_pembukuan->id)->first();

        return view('master-data.kategori.edit', [
            'title'  => 'Edit Kategori',
            'kategori'   => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori_pembukuan)
    {
        $validates = [
            'name' => 'required|string|max:100'
        ];
        $request->validate($validates);

        $attributtes = [
            'name' => strtoupper($request->name),
        ];


        Kategori::where('id', $kategori_pembukuan->id)->update($attributtes);

        return redirect('/master-data/kategori-pembukuan')->with('success', 'Successfully saved data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori_pembukuan)
    {
        Kategori::destroy($kategori_pembukuan->id);
        return redirect('/master-data/kategori-pembukuan')->with('success', 'Successfully saved data.');
    }
}
