<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Arr;
use Storage;
use Hash;

class ProfileController extends Controller
{
   public function index()
   {
     return view('account');
   }

   public function create()
   {
       # code...
   }

   public function store()
   {
       # code...
   }

   public function show()
   {
       # code...
   }

   public function edit()
   {
       # code...
   }

   public function update(Request $request)
   {

        $validates = [
            'username' => 'required|string|max:30|unique:users,name,'.auth()->user()->id,
            'full_name' => 'required|string|max:100'
        ];

        if ($request->password) {
            $validates = Arr::add($validates, 'password','required|min:8');
        }
        
        if ($request->photo) {
            $validates = Arr::add($validates, 'photo','required');
        }

        $request->validate($validates);

        $attributtes = [
            'name' => strtolower($request->username),
            'full_name' => ucfirst($request->full_name)
        ];

        if ($request->password) {
            $attributtes = Arr::add($attributtes, 'password', Hash::make($request->password));
        }

        if ($request->photo) {
            $attributtes = Arr::add($attributtes, 'photo', Storage::disk('public')->put('photo',$request->photo,'public'));
        }

        User::where('id', auth()->user()->id)->update($attributtes);

        return back()->with('status','Successfully saved data.');
   }

   public function destroy()
   {
       # code...
   }
}
