<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::latest()->get();

        return view('master-data.bank.index', [
            'title' => 'Bank',
            'banks' => $banks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master-data.bank.create', [
            'title' => 'Tambah Nama Bank',
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

        Bank::create($attributtes);

        return redirect('/master-data/bank')->with('success', 'Successfully saved data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        dd($bank);
        $bank = Bank::where('id', $bank->id)->first();

        return view('master-data.bank.edit', [
            'title'  => 'Edit Nama Bank',
            'bank'   => $bank
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $validates = [
            'name' => 'required|string|max:100'
        ];
        $request->validate($validates);

        $attributtes = [
            'name' => strtoupper($request->name),
        ];


        Bank::where('id', $bank->id)->update($attributtes);

        return redirect('/master-data/bank')->with('success', 'Successfully saved data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        Bank::destroy($bank->id);
        return redirect('/master-data/bank')->with('success', 'Successfully saved data.');
    }
}
