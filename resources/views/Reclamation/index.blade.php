@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
  <h2><center>Gestion de Reclamation</center></h2>
  
  <a href="reclamation/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Date Reclamation</th>
        <th>Lieu</th>
        <th>Message</th>
      </tr>
      			
    </thead>
    <tbody>
        @foreach($breclamation as $reclamation)
      <tr>
        <td>{{$$reclamation->Creerà}} </td>
        <td>{{$$reclamation->Lieu}} </td>
        <td>{{$$reclamation->Message}} </td>
        
        <td class="action_td">
            <a href="reclamation/{{$reclamation->id}}/edit"><button type="button" class="btn btn-info btn-xs">MODIFIER</button></a>
         
             
        {!! Form::open(['action' => ['Admin\reclamationcontroller@destroy',
        $reclamation->id],'method'=>'DELETE']) !!}
          <a onclick="return confirm('Etes vous sûr(e) de vouloir supprimer cette reclamation ?')">
             {{ Form::button('Supprimer',['type' => 'submit', 'class' => 'btn btn-danger btn-xs'] )  }}
          </a>
        {!! Form::close() !!}
        </td>
      </tr>
      @endforeach    
    </tbody>
  </table>
  
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Precedent</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
  </ul>

</div>
@stop












