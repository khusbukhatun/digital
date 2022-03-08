<?php

namespace App\Http\Controllers;
use App\restaurant;
use Illuminate\Http\Request;

class restaurants extends Controller
{
    public function dashboard(){
        return view('backend.layouts.dashboard');
      }
      
      public function showdata()
      {
          $restaurants = restaurant::all();
          return view('restaurant',compact('restaurants'))  ;
      }
      public function create() {
        return view('restaurant_create');
      }
      
      public function restaurant_submit( Request $request) {
        $data = [
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'location' => $request->get('location'),
            'rating' => $request->get('rating'),
        ];
      
        restaurant::insert($data);
        return redirect()->route('restaurants');
      }
      public function update(Request $request, $id) {
        $data = [
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'location' => $request->get('location'),
          'rating' => $request->get('rating'),
      ];
      
       restaurant::where('id',$id)->update($data);
       return redirect()->route('restaurants');
      
      }
      
      public function edit($id) {
      
        $restaurant = restaurant::where('id',$id)->first();
            if($restaurant){
                return view('edit_restaurant',compact('restaurant'));
            }
       }
       public function delete($id) {
        $restaurant = restaurant::find($id);
        if($restaurant) {
          restaurant::destroy($id);
        }
        return redirect()->back();
      }
      
      
      
      
      
      }

