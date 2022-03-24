<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\foodchef;
use App\Reservation;
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

public function reservation(Request $request) {
    $data = [
      'name' => $request->get('name'),
      'email' => $request->get('email'),
      'phone' => $request->get('phone'),
      'guest' => $request->get('guest'),
      'date' => $request->get('date'),
      'time' => $request->get('time'),
      'message' => $request->get('message'),

  ];
  reservation::insert($data);
  return redirect()->back();

  }

  public function viewreservation()
  {
      $data=reservation::all();
      return view("reservation", compact("data"));
  }

  public function viewchef()
  {
      $data=reservation::all();
      return view("foodchef");
  }









}
