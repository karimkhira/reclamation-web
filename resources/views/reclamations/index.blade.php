@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
  <h2><center>Gestion de Reclamation</center></h2>
  
  <a href="reclamations/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Reclamation</th>
        <th>Lieu</th>
        <th>Etat</th>
        <th>Crée Par </th>
        <th>Crée le </th>
        <th>Réparée Par </th>
        <th>Actions</th>

      </tr>
      			
    </thead>
    <tbody>
        @foreach($breclamation as $reclamation)
      <tr>
        <td>{{$reclamation->message}} </td>
        <td>{{$reclamation->locals_id}} </td>
        <td>{{$reclamation->etat_id}} </td>
        <td>{{$reclamation->usercreation_id}} </td>
        <td>{{$reclamation->created_at}} </td>
        <td>{{$reclamation->userreparation_id}} </td>
        <td class="action_td">
            <a href="reclamations/{{$reclamation->id}}/edit" class="btn btn-info btn-xs">
              Modifier
            </a>   
        {!! Form::open(['action' => ['reclamationsController@destroy',$reclamation->id],'method'=>'DELETE']) !!}
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