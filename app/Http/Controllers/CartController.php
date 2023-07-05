<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    private function calculTotal($cartItems){
        $total = 0 ; 

        foreach ($cartItems as  $cart) {
            $total += ( $cart->quantity * $cart->product->prix) ;
        }
       // $total *= 1.085   ;
        return $total ; 

    }

    public function index()
    {
        # code...
        $cartItems = Cart::where("user_id" , Auth::user()->id)->get() ;
        //dd($cartItems) ;
        $total = $this->calculTotal( $cartItems) ; 
        return view('cart', compact('cartItems' , 'total')) ;

        
    }
    public function update(Cart $cart , $quantity = 1 /*Request $request*/)
    {
        # code...
        // mise à jour de 'quantity'
        $cart->update(['quantity'=> $quantity /*$request->quantity */]) ;
       
        // read all item cart user
        $cartItems = Cart::where("user_id" , Auth::user()->id)->get() ;
        
        $total = $this->calculTotal( $cartItems) ; 
      
        return response()->json([   'result'=>true, 
                                    'total' => $total]) ;
    }

    public function deleteOne(Cart $cart)
    {
        # code...
        $cart->delete() ;

        return redirect(route('cart')) ;
    }
    public function delete()
    {
        
        Cart::where('user_id', Auth::user()->id)
                ->delete() ;

        return redirect(route('cart')) ;
        
    }
}
