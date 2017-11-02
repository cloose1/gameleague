<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulario;

class HomeController extends Controller
{
    private $formu;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(formulario $formu)
    {
        $this->formu=$formu;
        $this->middleware('auth');
    }




    public function index()
    {
        $formus=formulario::all();
        return view('home',compact('formus'));
    }

   

   public function alterarpag($id)
   {
    $formus = formulario::find($id);
    if($formus->status==0){
      $formus->status=1;
    $formus->update();
  }else{
    $formus->status=0;
    $formus->update();
}
    return redirect('/home');
   }

     public function edit($id)
   {
    $formu= formulario::find($id);
   return view('update',compact('formu'));
   }

    public function update($id, Request $request)
   {
      
        $formu= formulario::find($id);
        $formu->time= $request->time;
        $formu->categoria= $request->categoria;
        $formu->contato= $request->contato;
        $formu->namec= $request->namec;
        $formu->emailc= $request->emailc;
        $formu->nickc= $request->nickc;
        $formu->name2= $request->player2;
        $formu->email2= $request->email2;
        $formu->nick2= $request->nick2;
        $formu->name3= $request->player3;
        $formu->email3= $request->email3;
        $formu->nick3= $request->nick3;
        $formu->name4= $request->player4;
        $formu->email4= $request->email4;
        $formu->nick4= $request->nick4;
        $formu->name5= $request->player5;
        $formu->email5= $request->email5;
        $formu->nick5= $request->nick5;
        $formu->status=$request->status;
       $formu->update();
       return redirect('/home');
   }

    public function destroy($id){
     
      $formus = formulario::find($id);
      $formus->delete();      
      return redirect('/home');
   }

   public function filtrar(Request $request)
   {
    if($request->categoria==0){
         $formus=$this->formu->orderBy('status', 'DESC')->get();
         return  view ('home',compact('formus'));
      }  
      else{
         $formus=$this->formu->where('categoria',$request->categoria)->orderBy('status', 'DESC')->get();
        return  view ('home',compact('formus'));
     }
   }
}
