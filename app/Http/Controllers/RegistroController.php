<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function adicionar(){
        return view('adicionar');
    }

    public function apagar(){
        $registros=Registro::all();
        return view('apagar',['registros' => $registros]);
    }

    public function alterar(){
        $registros=Registro::all();
        return view('alterar',['registros' => $registros]);
    }

    public function listar(){
        return view('listar');
    }

    public function store(Request $request){
        $registro = new Registro;
        $registro->tipo_imovel=$request->tipo_imovel;
        $registro->valor=$request->valor;
        $registro->data=$request->data;
        $registro->descricao=$request->descricao;
        $registro->save();
        return redirect('/registro');
    }

    public function delete(Request $request){
        $item=Registro::find($request->id);
        if(!$item){
            return response()->json(['message' => 'Item não encontrado'], 404);
        }
        else{
            $item->delete();
            return redirect('/registro');
        }
    }

    public function update(Request $request){
        $item=Registro::find($request->id);
        if($item){
            $request->validate([
                'valor'=>'required',
                'data' =>'required',
                'descricao'=>'required'
            ]);
            $item->update($request->all());
            return redirect('/registro');
        }
    }

    public function read(Request $request){
        if(empty($request->tipo_imovel)){
            $registros=Registro::all();
            return view('listar',['registros' => $registros]);
        }
        else{
        $registros = Registro::where('tipo_imovel',$request->tipo_imovel)->get();
        return view('listar',['registros'=>$registros]);
        }
    }
  
}
