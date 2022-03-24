<?php

namespace App\Http\Controllers;

use App\site_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function site_settings() {
        $settings = site_setting::find(1);
        return view('site_setting', compact('settings'));
    }

    public function settings_update(Request $request) {

        $validated = $request->validate([
        $this->validate($request, ['file' => 'logo|mimes:jpeg,png,jpg,gif,svg|max:2048',]),
           'system_name' => ['required', 'string', 'max:255'],
           'phone' => ['required', 'string', 'max:255'],
           'address' => ['required', 'string', 'max:255'],
           'slogan' => ['required', 'string', 'max:255'],
           'facebook' => ['required', 'string', 'max:255'],
           'instagram' => ['required', 'string', 'max:255'],
           'twitter' => ['required', 'string', 'max:255'],
           'copyright' => ['required', 'string', 'max:255'],
        ]);


        $logo_url = '';

        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/logo');
            $file->move($path, $new_name);
            $logo_url = asset('logo/'.$new_name);
        }

        // dd($logo_url);

        $data = [
            'logo' => $logo_url,
            'system_name' => $request-> get('system_name'),
            'phone' => $request-> get('phone'),
            'address' => $request-> get('address'),
            'slogan' => $request-> get('slogan'),
            'facebook' => $request-> get('facebook'),
            'instagram' => $request-> get('instagram'),
            'twitter' => $request-> get('twitter'),
            'copyright' => $request-> get('copyright'),
        ];

        DB::table('site_settings')->truncate();
        site_setting::insert($data);
        // dd('Done!');
        return redirect()->back();
    }
}
