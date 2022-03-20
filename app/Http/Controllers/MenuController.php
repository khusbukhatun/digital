<?php

namespace App\Http\Controllers;
use App\menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function dashboard(){
        return view('backend.layouts.dashboard');
      }

    public function showdata()
      {
          $menus = menu::all();
          return view('menu_list', compact('menus'));
      }

      public function create() {
        return view('create_menu');
      }

      public function menu_submit( Request $request) {

        $image_url = '';

        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
        }

        $data = [
            'dish_name' => $request->get('dish_name'),
            'dish_quality' => $request->get('dish_quality'),
            'price' => $request->get('price'),
            'cover' => $image_url ?? '',
        ];

        menu::insert($data);
        return redirect()->route('menu.list');
      }


      public function update( Request $request, $id){

        $image_url = '';

        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
        }

        $data = [
            'dish_name' => $request->get('dish_name'),
            'dish_quality' => $request->get('dish_quality'),
            'price' => $request->get('price'),
            'cover' => $image_url ?? '',
        ];

      menu::where('id',$id)->update($data);
        return redirect()->route('menu.list');
    }
      public function edit($id) {

        $menu = menu::where('id',$id)->first();
            if($menu){
                return view('edit_menu',compact('menu'));
            }
       }
       public function delete($id) {
        $menu = menu::find($id);
        if($menu) {
            menu::destroy($id);
        }
        return redirect()->back();
      }

























}
