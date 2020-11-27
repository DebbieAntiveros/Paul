<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemController extends Controller
{
    
    
    public function index(){
      $items = Items::all();
        return view('items.index',[
            'items' => $items,]);
    }
    public function show($id){
        
        $item = Items::findOrFail($id);
        return view('items.show',['item'=> $item]);
    }
    public function edit($id){
        
        $item = Items::findOrFail($id);
        return view('items.edit',['item'=> $item]);

    }
    public function update(){
        
        $items = new Items();
        
        $items-> name=request('name');
        $items-> type=request('type');
        $items-> color=request('color');
        
        $items -> save();
        return redirect('/items')->with('msg','The item has been updated.');

    }
    public function create(){
        return view('items.create');
    }
    public function store(){
       
        $items = new Items();
        
        $items-> name=request('name');
        $items-> type=request('type');
        $items-> color=request('color');
        
        $items -> save();
        return redirect('/items')->with('msg','The item has been saved.');
    }
    public function destroy($id) {
        $item = Items::findOrFail($id);
        $item->delete();

        return redirect('items');
    }
}
