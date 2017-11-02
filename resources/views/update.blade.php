@extends('layouts.app')

@section('content')
<h1 style="text-align: center;">Editar Formulário de {{$formu->namec}} </h1>

<div class="container">
    <div class="row">
      <form class="form-horizontal" method="POST" action="{{ url('/home/update',['id'=>$formu->id]) }}">
      {{ csrf_field() }}
           @include('edit')

                   <div class="form-group row ">
              <div style="margin-left: 44%;">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">
                        Enviar Dados
                    </button>
                </div>
                  <div style="margin-left:-15%; " class="col-md-4">
                    <a  href="{{route('home')}}" type="button" class="btn btn-primary">
                        Voltar
                    </a>
                </div>
            </div>
            </div>
              </form>
                  </div>
</div>
@endsection