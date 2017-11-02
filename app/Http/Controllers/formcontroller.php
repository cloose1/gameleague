<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulario;

class formcontroller extends Controller
{
    	private $formu;


	public function __construct(formulario $formu){
		$this->formu=$formu;
	}
public function index(){
        return view('index');
    }



     public function store(Request $request)
    {
   
        $form= new formulario;
        $form->time= $request->time;
        $form->categoria= $request->categoria;
        $form->contato= $request->contato;
        $form->namec= $request->namec;
        $form->emailc= $request->emailc;
        $form->nickc= $request->nickc;
        $form->name2= $request->player2;
        $form->email2= $request->email2;
        $form->nick2= $request->nick2;
        $form->name3= $request->player3;
        $form->email3= $request->email3;
        $form->nick3= $request->nick3;
        $form->name4= $request->player4;
        $form->email4= $request->email4;
        $form->nick4= $request->nick4;
        $form->name5= $request->player5;
        $form->email5= $request->email5;
        $form->nick5= $request->nick5;

        $form->save();

        return redirect('/')->with('status','Formulário enviado com Sucesso!');
}



    }
