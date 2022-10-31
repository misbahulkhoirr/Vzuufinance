<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AkunBank;
use App\Models\Bank;

class AkunBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun_banks = AkunBank::latest()->get();

        return view('master-data.akun-bank.index', [
            'title' => 'Akun Bank',
            'akun_banks' => $akun_banks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = Bank::get();
        return view('master-data.akun-bank.create', [
            'title' => 'Tambah Akun',
            'banks' => $banks
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
            'bank_id' => 'required',
            'account_number' => 'required|numeric|min:6'
        ]);

        $attributtes = [
            'bank_id' => $request->bank_id,
            'account_number' => $request->account_number,
        ];

        AkunBank::create($attributtes);

        return redirect('/master-data/akun-bank')->with('success', 'Successfully saved data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AkunBank  $akunBank
     * @return \Illuminate\Http\Response
     */
    public function show(AkunBank $akunBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AkunBank  $akunBank
     * @return \Illuminate\Http\Response
     */
    public function edit(AkunBank $akunBank)
    {
        $banks = Bank::get();
        $akun_bank = AkunBank::where('id', $akunBank->id)->first();

        return view('master-data.akun-bank.edit', [
            'title'  => 'Edit No Akun',
            'banks'   => $banks,
            'akun_bank'   => $akun_bank
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\AkunBank  $akunBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AkunBank $akunBank)
    {
        $request->validate([
            'bank_id' => 'required',
            'account_number' => 'required|numeric|min:6'
        ]);

        $attributtes = [
            'bank_id' => $request->bank_id,
            'account_number' => $request->account_number,
        ];

        AkunBank::where('id', $akunBank->id)->update($attributtes);

        return redirect('/master-data/akun-bank')->with('success', 'Successfully saved data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AkunBank  $akunBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(AkunBank $akunBank)
    {
        AkunBank::destroy($akunBank->id);
        return redirect('/master-data/akun-bank')->with('success', 'Successfully saved data.');
    }
}
