<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Forms;
use App\Models\foods;
use App\Models\Calendario;
use App\Models\reservas;
use App\Models\recomendado;



class RecomendadoController extends Controller
{
    public function novarecomedacao(recomendado $recomend, Request $request){
        $data=$request->all();
        $recomend=$recomend->all();
        if($data['recomendacao']==='recomendacao'){
        return view('site/novarecomendacao',compact('recomend'));}
        else{
            return back();
        }
    }
    public function inserirrecomendacao(recomendado $recomend, Request $request){
        $data=$request->all();
        $recomend=$recomend->create($data);
        $recomend=$recomend->all();
        return view('site/recomendados',compact('recomend'));}
        
    
    public function verrecomendados(recomendado $recomend, Request $request){
        $data=$request->all();
        if($data['recomendados']=='recomendados'){
        $recomend=$recomend->all();
        return view('site/recomendadosaniversariante',compact('recomend'));}
        
    }
    public function updaterecomendados(recomendado $recomend, Request $request,string|int $id){
        $recomend=$recomend->where('id',$id)->first();
        return view('site/recomendadosupdate',compact('recomend'));
    }
    public function atualizarrecomendados(recomendado $recomend, Request $request,string|int $id){
        $recomend=$recomend->where('id',$id)->first();
        $data=$request->all();
        $recomend->update($data);
        $recomend=$recomend->all();
        return view('site/recomendados',compact('recomend'));
    }
    public function deleterecomendados(recomendado $recomend, Request $request,string|int $id){
        $recomend=$recomend->where('id',$id)->first();
    
        $recomend->delete();
        $recomend=$recomend->all();
        return view('site/recomendados',compact('recomend'));
    }
        
    
}
