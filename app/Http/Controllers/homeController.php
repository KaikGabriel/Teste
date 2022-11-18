<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\User;
use App\Models\ProdutosAp;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function mostrarHome(){
        $produtosAp = ProdutosAp::all();
        $produtos = Produtos::all();
        $user = auth()-> user();
     
        return view ('home', ['produtos' => $produtos , 'produtosAp' => $produtosAp , 'user' => $user]);
    }
    

public function searchProducts(Request $request){

    $wishlist = Wishlist::where('user_id', Auth::id())->get();
    $produtos= Produtos::all();
    $produtosAp= Produtos::all();
    $wishlistcount = Wishlist::count();
    $request-> query('search');   
         $searchProducts = Produtos::where('categoria', 'LIKE', '%'.$request->search.'%')
        ->orWhere('nome', 'LIKE', '%'.$request->search.'%')
        ->orWhere('valor', 'LIKE', '%'.$request->search.'%')
        ->orWhere('estado', 'LIKE', '%'.$request->search.'%')
        ->orWhere('cidade', 'LIKE', '%'.$request->search.'%')
       
        
        ->paginate(15); 
        return view('search', compact('produtos'), ['produtos' => $produtos,'produtosAp' => $produtosAp, 'wishlistcount'=>$wishlistcount], compact ('wishlist'));
    
    



}
}
