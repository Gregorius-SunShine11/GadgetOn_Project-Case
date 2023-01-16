<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Gadget;

class ProductController extends Controller
{
    //
    public function index_product() {
        $Gadget = Gadget::all();
        return view('product.index', compact('Gadget'));
    }

    public function create_product() {
        return view('product.create');
    }

    public function store_product (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'description' => 'required|min:50',
            'price' => 'required|integer',
            'year' => 'required|integer',
            'image' => 'required|file|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $destinationPath = 'images';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $validator = $validator->validated();
        DB::table('gadgets')->insert([
            'name' => $validator['name'],
            'description' => $validator['description'],
            'price' => $validator['price'],
            'year' => $validator['year'],
            'image' => $myimage
        ]);
        return redirect()->route('index_product');
    }

    public function view_product ($id) {
        $Gadget = DB::table('gadgets')->where('id',$id)->first();
        return view('product.show', compact('Gadget'));
    }

    public function edit_product ($id) {
        $Gadget = DB::table('gadgets')->where('id',$id)->first();
        return view('product.edit', compact('Gadget'));
    }

    public function update_product (Request $request, $id) {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:50',
            'price' => 'required|integer',
            'image' => 'nullable|file|image',
        ]);

        DB::table('gadgets')->where('id',$id)->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'year' => $request['year']
        ]);

        if($request['image'] != null){
            $destinationPath = 'images';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);
            DB::table('gadgets')->where('id',$id)->update([
                'image' => $myimage
            ]);
        }

        return redirect()->route('index_product');
    }

    public function delete_product ($id) {
        DB::table('gadgets')->delete($id);
        return redirect()->route('index_product');
    }

}
