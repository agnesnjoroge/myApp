<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
        'name' => 'required',
        'brand' => 'required',
        'price' => 'required'
       ]);
       
       $newItem = Item::create($data);
      
      return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $items = Item::all();
       return view('items.show',['items' => $items]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit',['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data = $request -> validate([
        'name' => 'required',
        'brand' => 'required',
        'price' => 'required'
       ]);
       
       $item -> update($data);
       return redirect(route('index'))->with('success','Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
      return redirect(route('index'))->with('success','Product Deleted');
    }
}
