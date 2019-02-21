<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Cart::create(['id' => md5(uniqid(rand(), true)) , 'key' => md5(uniqid(rand(), true)) ]);
        return response()->json([
            'Message' => 'A new cart have been created for you!',
            'CartToken' => $cart->id,
            'CartKey' => $cart->key
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

     /**
      * Adds Products to the given Cart;
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Cart  $cart
      * @return void
      */
    public function addProducts(Cart $cart,Request $request)
    {
        //
    }
    
}
