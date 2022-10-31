<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Role;
use Hash;
use Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('master-data.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();

        return view('master-data.users.create', compact('roles'));
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
            'username' => 'required|string|without_spaces|max:30|unique:users,name',
            'full_name' => 'required|string|max:100',
            'role' => 'required|numeric|in:1,2,3,4',
            'password' => 'required|min:8',
        ]);

        $attributtes = [
            'name' => strtolower($request->username),
            'full_name' => ucfirst($request->full_name),
            'role_id' => $request->role,
            'password' => Hash::make($request->password),
        ];

        if ($request->photo) {
            $attributtes = Arr::add($attributtes, 'photo', Storage::disk('public')->put('photo', $request->file('photo'), 'public'));
        }

        User::create($attributtes);

        return redirect('/master-data/users')->with('success', 'Successfully saved data.');
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
        $roles = Role::get();
        $user = User::where('id', $id)->first();

        return view('master-data.users.edit', compact('roles', 'user'));
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

        $validates = [
            'username' => 'required|string|without_spaces|max:30|unique:users,name,' . $id,
            'role' => 'required|numeric|in:1,2,3,4',
            'full_name' => 'required|string|max:100'
        ];

        if ($request->password) {
            $validates = Arr::add($validates, 'password', 'required|min:8');
        }

        if ($request->photo) {
            $validates = Arr::add($validates, 'photo', 'mimes:jpeg,png,jpg,gif');
        }

        $request->validate($validates);

        $attributtes = [
            'name' => strtolower($request->username),
            'role_id' => $request->role,
            'full_name' => ucfirst($request->full_name)
        ];

        if ($request->password) {
            $attributtes = Arr::add($attributtes, 'password', Hash::make($request->password));
        }

        if ($request->photo) {
            $attributtes = Arr::add($attributtes, 'photo', Storage::disk('public')->put('photo', $request->file('photo'), 'public'));
        }

        User::where('id', $id)->update($attributtes);

        return back()->with('success', 'Successfully saved data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
        }

        return back();
    }
}
