<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Arr;
use Storage;

class IndexController extends Controller
{

    public function index()
    {
        $setting = \Helper::getSetting();

        return view('setting.index',compact('setting'));
    }

    public function update(Request $request)
    {

        $validates = [
            'app_name' => 'required'
        ];

        $request->validate($validates);

        if ($request->logo) {
            $validates = Arr::add($validates, 'logo','mimes:jpeg,png,jpg,gif');
        }

        $request->validate($validates);

        $attributes = [
            'app_name' => $request->app_name
        ];

  
        if ($request->logo) {
            $attributes = Arr::add($attributes, 'logo', Storage::disk('public')->put('setting',$request->file('logo'),'public'));
        }

        Setting::first()->update($attributes);

        return back()->with(['success' => 'Successfully saved data.']);
    }
}
