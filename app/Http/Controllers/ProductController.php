<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query all product
        return Product::all();

        //Query with limit rocord
        // return Product::orderBy('id','ASC')->paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($user->tokenCan("1")){
            $request->validate([
                'name' => 'required|min:5',
                'slug' => 'required',
                'price' => 'required'    
            ]);
            return Product::create($request->all());
        }else{
            return[
                'Status' => 'Accessibility is dennied!'
            ];
        }
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Models\Product  $product
    *@param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Product  $product
    *@param int $id;
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($user->tokenCan("1")){
            $product = Product::find($id);
            $product -> update($request->all());
            return $product;
        }else{
            return[
                'Status' => 'Accessibility is dennied!'
            ];
        }
    }
    /**
     * Remove the specified resource from storage.
     *
    //  * @param  \App\Models\Product  $product
    * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($user->tokenCan("1")){
            return Product::destroy($id);
        }else{
            return[
                'Status' => 'Accessibility is dennied!'
            ];
        }
    }
}
