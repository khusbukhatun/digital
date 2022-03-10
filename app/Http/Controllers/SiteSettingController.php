<?php

namespace App\Http\Controllers;
use App\site_setting;

use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function site(){

        $settings = site_setting::find(1);
        return view('site_setting', compact('settings'));
       }
       public function update(Request $request)
       {
         //$  dd($request->all());
           $logo_url ='';
           $validated = $request->validate([
               'system_name' => 'required',
               'phone' => 'required',
              // 'mobile' => 'required',
               'address' => 'required',
               'slogan' => 'required',
               'facebook' => 'required',
               'instagram' => 'required',
               'twitter' => 'required',
              // 'logo' => 'required',
               'copyright' => 'required',
           ]);

           $data =[
            'system_name' =>$request->get('system_name'),
            'phone' =>$request->get('phone'),
            'mobile' =>$request->get('phone'),
            'address' =>$request->get('address'),
            'slogan' =>$request->get('slogan'),
            'facebook' =>$request->get('facebook'),
            'instagram' =>$request->get('instagram'),
            'twitter' =>$request->get('twitter'),
            'copyright' =>$request->get('copyright'),
             // 'logo' =>$request->get('logo'),
           ];
           DB::table('site_settings')->truncate();
           site_setting::insert($data);
           dd('done');
           return redirect()->back();







        }
    }