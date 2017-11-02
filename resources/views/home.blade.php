@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo {{auth()->guard('web')->user()->name}}
                  <div class="form-inline col-md-3" style="margin-right: 4%; float: right;">
                    <form class="form-horizontal" method="POST" action="{{ url('/filtro') }}">
                    {{ csrf_field() }}
                       <label class="mr-sm-2" for="inlineFormCustomSelectPref">JOGO:</label>
                       <select class="custom-select mb-2 mr-sm-2 mb-sm-0"  name="categoria" id="inlineFormCustomSelectPref" >
                          <option selected value="0">Escolha..</option>
                          <option value="1">CS-GO</option>
                          <option value="4">FIFA 17</option>
                          <option value="2">CLASH</option>
                          <option value="3">DOTA 2</option> 
                      </select>
                      <div class="form-group">
                         <div class="col-md-4 col-md-offset-5">
                            <button type="submit" class="btn btn-primary btn-sm">
                            Buscar
                            </button>
                        </div>
                     </div>
                    </form>
                </div>
                </div>


                <div class="panel-body">
                 <table width="100%">
                        <tr>
                            <td style="text-align: center;"><strong>Time</strong></td>
                            <td style="text-align: center;"><strong>Jogo</strong></td>
                            <td style="text-align: center;"><strong>Capitão</strong></td>
                            <td style="text-align: center;"><strong>Status</strong></td>
                            <td style="text-align: center;"><strong>Alterar Pag</strong></td>
                            <td style="text-align: center;"><strong>Ações</strong></td>
                        </tr>
                         @foreach($formus as $formu)
                        <tr>
                            <td style="text-align: center;"> {{$formu->time}}</td>
                            <td style="text-align: center;">  
                            @if ($formu->categoria == 1)
                                    Counter-Strike GO
                                @endif
                                @if ($formu->categoria == 2)
                                    Clash Royale
                                @endif
                                @if ($formu->categoria == 3)
                                    Dota 2  
                                @endif
                                @if ($formu->categoria == 4)
                                    Fifa 17  
                                @endif</td>
                            <td style="text-align: center;"> <a data-toggle="modal" data-target="#my{{$formu->id}}">{{$formu->namec}}</a></td>

                     <div class="modal fade" id="my{{$formu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perfil dos Vagabundos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @include('edit')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                            <td style="text-align: center;"> @if($formu->status==0) <p style="color:red;">EM DEBITO<p>@endif @if($formu->status==1)
                            <p style="color: green;">Pago</p></td>@endif
                            <td style="text-align: center;">
                            <form method="POST" action="{{ url('/home',['$id'=>$formu->id]) }}">
                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-warning btn-sm">Alterar Pagamento</button>
                            </form>


                            </td>
                            <td style="text-align: center;"> <a type="button" data-toggle="modal" data-target="#myModal{{$formu->id}}" class="btn btn-danger btn-sm">Deletar</a>
                            <a type="button"  href="{{ url('/home/edit',['id'=>$formu->id]) }}" class="btn btn-success btn-sm">Editar</a>
                            

                                <div class="modal fade" id="myModal{{$formu->id}}" role="dialog">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:black;text-align: center;" class="modal-title">Confirmação de Exclusão.</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p style="color: black;">Você possui certeza ao excluir {{$formu->namec}} ? </p>
                                    <br>
                                  </div>
                                  <div class="modal-footer">

                                    <a  type="button"  href="{{ url('/home/delete',['$id'=>$formu->id]) }}"  class="btn btn-primary">Prosseguir</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Volta</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
