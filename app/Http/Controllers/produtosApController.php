<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\ProdutosAp;
use App\Models\Produtos;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Redirect;


class produtosApController extends Controller
{
    
    public function addToProdutosAp($produto_id){

        if (Auth::check()){

        ProdutosAp::insert([

            'user_id' => Auth::id(),

            'produto_id' => $produto_id,

        ]);

        return Redirect::route('dashboard');

    }else{

        return Redirect::route('register');

    }

    }


    public function mostrarAprovar(){
        $produtos = Produtos::all();
        $produtosAp = ProdutosAp::all();
       
        return view('aprovarCadastro', ['produtosAp'=>$produtosAp, 'produtos' => $produtos]);

    }

    public function mostrarProdutos(){
        $produtos = Produtos::all();
        $produtosAp = ProdutosAp::all();
        return view('produtos', ['produtosAp'=>$produtosAp, 'produtos' => $produtos]);
    }

    public function destroy($id){

        Produtos::findOrFail($id) -> delete();
        
        return redirect('Aprovar-produtos');
 
    }
   
    public function update(Request $request){

        Produtos::findOrFail($request -> id) -> update ($request -> all());
        return redirect('Aprovar-produtos');

    }

   
 public function edit($id){
    $produto = Produtos::findOrFail($id);
    return redirect('Aprovar-produtos');

}
public function mostrarGrenciar(){
    $user = auth()-> user();
    $produtos = $user -> produtos;
    return view('Gerenciar', [ 'produtos' => $produtos]);
}





}
