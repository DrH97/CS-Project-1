<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HardwareProducts;
use Image;

class HardwareProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return HardwareProducts::create([
        //     'code' => '',
        //     'productname' => $data['productname'],
        //     'image' => $data['image'],
        //     'categoryid' => '',
        //     'sellerid' => $data['sellerid'],
        //     'description' => $data['description'],
        //     'price' => $data['price'],            
        //     'quantity' => $data['quantity'],
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
        'productname' => 'required',
        'description' => 'required',
        // 'categoryid' => 'required',
        'quantity' => 'required',
        'sellerid' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ));
      //save the data to the database
        $HardwareProduct  = new HardwareProducts ;
        $HardwareProduct->name = $request->name;
        $HardwareProduct->code = '';
        $HardwareProduct->productname = $request->productname;
        $HardwareProduct->description = $request->description;
        $HardwareProduct->categoryid = '';
        $HardwareProduct->quantity = $request->quantity;
        $HardwareProduct->price = $request->price;

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(400, 400)->save( storage_path('app/public/images/' . $filename ) );
          $HardwareProduct->image = $filename;
          $HardwareProduct->save();
        };

      $HardwareProduct->save();

      // $fetchedprod = HardwareProducts::find($HardwareProduct->id);
      //   var_dump($fetchedprod); 

      return redirect()->route('/')
        ->with('success','Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $HardwareProducts = App\HardwareProducts::all();

        foreach ($HardwareProducts as $HardwareProduct) {
            echo $HardwareProduct->name;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
