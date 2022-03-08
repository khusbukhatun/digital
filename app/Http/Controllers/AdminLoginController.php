<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function adminLogin()
    {
      //  dd('working');
        return view('backend.layouts.adminLogin');
    }

    public function submit(Request $request) {
      // dd($request->all());

      if (!$request->get('email') || !$request->get('password')) {
          return redirect()->back();
      }

      try {
          $admin = admin::where('email', $request->email)->first();
          // dd($admin);
          if ($admin) {

              if(Hash::check($request->password, $admin->password)) {
                  // dd('true');
                  Auth::login($admin);
                  return redirect()->route('dashboard');
              }
              return redirect()->back();
              // Auth::check() ? Auth::user() : '';

          } else {
              // dd('false');
              return redirect()->back();
          }

      } catch (\Throwable $th) {
          dd($th);
      }

  }

  public function adminLogout()
  {
      if (Auth::check()) {
          Auth::logout();
          return redirect()->back();
      }
      return redirect()->route('admin.login');

}
}
